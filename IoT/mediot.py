import Adafruit_BMP.BMP085 as BMP085 
import pyrebase
import time
import requests
import math
import random
import board
import decimal
sensor = BMP085.BMP085()
from firebase import firebase

TOKEN = "BBFF-5NwkUEf1PzXTAN856gkXtXy8Dp6IhC"  # Put your TOKEN here
DEVICE_LABEL = "mediot"  # Put your device label here 
VARIABLE_LABEL_1 = "altitude"  # Put your first variable label here
VARIABLE_LABEL_2 = "oxy"  # Put your second variable label here
VARIABLE_LABEL_3 = "pressure"  # Put your second variable label here
VARIABLE_LABEL_4 = "temp"  # Put your second variable label here

from firebase.firebase import FirebaseAuthentication
DSN = 'https://hacknitr-c0c75-default-rtdb.firebaseio.com/' # 'https://myapp.firebaseio.com/'
#SECRET = 'shruti7376036196' # 'secretkey'
#EMAIL ='shruti456rawal@gmail.com' # 'prateekrai266@gmail.com'

#authentication = FirebaseAuthentication(SECRET,EMAIL, True, True)
firebase = firebase.FirebaseApplication('https://hacknitr-c0c75-default-rtdb.firebaseio.com/')




def post_request(payload):
    # Creates the headers for the HTTP requests
    url = "http://industrial.api.ubidots.com"
    url = "{}/api/v1.6/devices/{}".format(url, DEVICE_LABEL)
    headers = {"X-Auth-Token": TOKEN, "Content-Type": "application/json"}

    # Makes the HTTP requests
    status = 400
    attempts = 0
    while status >= 400 and attempts <= 5:
        req = requests.post(url=url, headers=headers, json=payload)
        status = req.status_code
        attempts += 1
        time.sleep(1)

    # Processes results
    print(req.status_code, req.json())
    if status >= 400:
        print("[ERROR] Could not send data after 5 attempts, please check \
            your token credentials and internet connection")
        return False

    print("[INFO] request made properly, your device is updated")
    return True




def update_database():  
  
    temp = format(sensor.read_temperature())
    pres = format(sensor.read_pressure())
    oxi_level = format(95+float(decimal.Decimal(random.randrange(-85,198))/100))
    if temp is not None and pres is not None and oxi_level is not None:  
        #str_temp = ' {0:0.2f} *C '.temp    
        #str_pres  = ' {0:0.2f} %'.pres
        #str_alti = ' {0:0.2f} m'.alti
        print('Temp = {0:0.2f} *C'.format(sensor.read_temperature()))
        print('Pressure = {0:0.2f} KPa'.format(sensor.read_pressure()/1000))
        print('Oxygen Saturation = {0:0.2f} %'.format(float(oxi_level)))
        print('Sealevel Altitude = {0:0.2f} m'.format(sensor.read_altitude()))

        value_1 = sensor.read_altitude()
        value_2 = float(oxi_level)
        value_3 = sensor.read_pressure()/1000
        value_4 = sensor.read_temperature()


        payload = {VARIABLE_LABEL_1: value_1,VARIABLE_LABEL_2: value_2,VARIABLE_LABEL_3: value_3,VARIABLE_LABEL_4: value_4}
        print("[INFO] Attemping to send data")
        post_request(payload)
        print("[INFO] finished")
        print("\n")
              
    else:  
        print('Failed to get reading. Try again!')    
  
    data = {"temp": sensor.read_temperature(), "pressure": sensor.read_pressure(), "oxysat": oxi_level}  
    firebase.post('/sensor/dht', data)
    time.sleep(1);
    
while True:  
        update_database()  