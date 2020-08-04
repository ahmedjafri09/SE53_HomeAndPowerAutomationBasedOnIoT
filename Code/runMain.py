import mysql.connector
import RPi.GPIO as GPIO
import time
import dht11
import datetime
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.IN)         #Read output from PIR motion sensor
instance = dht11.DHT11(pin=13)  #reading DHT11 sensor
GPIO.setwarnings(False)         #setting warnings off

temp = [0,0]  ##Variable to check and compare previous value to stop overloading

########################### LOGIC AND FUNCTIONS #######################################

#####Setting output ports#####
def setPorts(portsCursor):

    portsCursor.execute("SELECT * from appliance_record")

    result = portsCursor.fetchall()
     
    for y in result:
        GPIO.setup(y[5], GPIO.OUT)
    GPIO.setwarnings(False)
            
def automate(query):
    pirSensor(query)
    

def manual(query):
    query.execute("SELECT * FROM appliance_record")

    autoRes = query.fetchall()
    for y in autoRes:
        if y[4] == 'Off' or y[4] == 'off':
            turnOff(y[5])
        elif y[4] == 'on' or y[4] == 'On':
            turnOn(y[5])
            
    
#Logic for PIR sensor, used in automatic mode
def pirSensor(q):
    i=GPIO.input(11)
    temp[1] = i
    if i==0:                 #When output from motion sensor is LOW
        q.execute("SELECT * from appliance_record")
        res = q.fetchall()
        if temp[0] != temp[1]:
            m.write("Intruder left at: "+repTime+"\n")
            print("No one present in the room")            
        for y in res:            
            turnOff(y[5])
        
        temp[0] = i
       # print("print1")
        
    elif i==1:               #When output from motion sensor is HIGH
        if temp[0] != temp[1]:
            m.write("Intruder detected at: "+repTime+"\n")
            print("Detected presence in the room!")
        q.execute("SELECT * from appliance_record WHERE type='Light'")
        res = q.fetchall()
        for y in res:
            turnOn(y[5])  #Turn ON LED
        tempSensor(q)
        temp[0] = i
       # print("print2")
       
#Temp sensor logic, used in automatic mode
def tempSensor(tempQ):
    motion=GPIO.input(11)
    result = instance.read() #reading from dht11 sensor
    
    #print("print3")
    if result.is_valid():             #When output from temp sensor is not garbage values
        ######### FAN LOGIC ########
        tempQ.execute("SELECT * from appliance_record WHERE type = 'Fan'")
        res = tempQ.fetchall()
        if result.temperature >= 22.00:
            for y in res:
                turnOn(y[5]) #give power to FAN
                print(y[1],"is running!")
        elif result.temperature < 22.00:
            for y in res:
                turnOff(y[5]) #take power from FAN
                print(y[1],"is shutdown!")
                
        ######### AC/ROOM COOLER LOGIC #########
        tempQ.execute("SELECT * from appliance_record WHERE type = 'Room cooler'")
        res = tempQ.fetchall()
        if result.temperature >= 26.00:
            for y in res:
                turnOn(y[5]) #give power to AIR CONDITIONER OR ANY COOLER
                print(y[1],"is running!")
        elif result.temperature < 26.00:
            for y in res:
                turnOff(y[5]) #take power from AIR CONDITIONER OR ANY COOLER
                print(y[1],"is shutdown!")
        
        fTemp = (result.temperature*9/5)+32
        t.write(str(result.temperature) + "C, " + str(fTemp) + ", " + str(repTime)+"\n")
        print ("Temperature in C: %-3.2f C" %result.temperature)
        print ("Temperature in F: %-3.3f F" %fTemp)
        #print ("Humidity: %-3.2f%%" %result.humidity)
    result = False

#TURN OFF/ON functions
def turnOff(x): #shutting down lights and fans to save power
    port = x;
    control = "Off";
    GPIO.output(x,0) #taking power back from appliance x
    updateStatus(mydb.cursor(),port, control)
    
def turnOn(x): #turning on appliance
    port = x;
    control = "On";
    GPIO.output(x,1) #giving power to appliance x
    updateStatus(mydb.cursor(),port, control)
    

def updateStatus(query, port, control):
    q = "UPDATE appliance_record SET control ='"+control+"' WHERE port = '"+str(port)+"'" 
    query.execute(q)
    mydb.commit()


############################ END OF FUNCTIONS ########################################





############################ WHILE TRUE BLOCK (MAIN) ###################################
while True:
    m = open("resMotion.txt", "a") #writing file for motion detection
    t = open("resTemp.txt", "a") #writing file for temp sensor
    repTime = (time.strftime("%H:%M:%S"))
    
    mydb = mysql.connector.connect(host="192.168.0.104", user="root",
                                    password="1234", database="prj")
    mycursor = mydb.cursor()
    
    setPorts(mydb.cursor()) #### Setting ports on board in runtime to detect changes from db
    
    mycursor.execute("SELECT * from automate_app")
    
    result = mycursor.fetchall()
     
    for y in result:
        if y[1] == 'On':
            automate(mydb.cursor())
        elif y[1] == 'Off':
            manual(mydb.cursor())

    m.close()
    t.close()

############################ END OF WHILE TRUE BLOCK ####################################



