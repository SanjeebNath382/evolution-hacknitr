# **IoT Scheme | MedIoT** :computer:
<p align="center">
  <img width="60%" src="https://github.com/amandewatnitrr/evolution-hacknitr/blob/main/imgs/image_processing20191005-22376-4jawmy.gif">
</p>

## Hardware Requirements :
1. Raspberry Pi
2. Analog to Digital Converter(ADC)
3. Voltage Level Converter
4. Sensors("We used BMP085 and Pulse Oximeter for this purpose.")
5. I2C Bus if using more than 1 I2C based Sensors.

## CAD Model of the MedIoT Kit
The files cannot be shared as they are subjected for confidential research purpose.
<p align="center">
  <img width="40%" src="https://github.com/amandewatnitrr/evolution-hacknitr/blob/main/imgs/isometric_box.png">
  <img width="40%" src="https://github.com/amandewatnitrr/evolution-hacknitr/blob/main/imgs/top_box.png"><br>
  <img width="40%" src="https://github.com/amandewatnitrr/evolution-hacknitr/blob/main/imgs/WhatsApp%20Image%202021-03-20%20at%2013.16.06.jpeg">
</p>

## Setting Up the Raspberry Pi
1. Clone this repository on your raspberry pi.
2. Move to the **IoT folder**.
3. Use the below command to install all the required libraries
```pip
pip3 install -r requirements.txt 
```
4. Now as you are ready to work with, in oerder to make it work, you need to make your account on Udibots and also, login to your firebase console.
5. In order to make it work, you need to change, the device token, and device label to one you have created.
```python3
#For Udibots only

TOKEN = "BBFF-5NwkUEf1PzXTAN856gkXtXy8Dp6IhC"  # Put your TOKEN here (LINE 12)
DEVICE_LABEL = "mediot"  # Put your device label here (LINE 13)
```
6. Change the variable labels, to the one, you have created.
```python3
(LINE 14 - 17)

VARIABLE_LABEL_1 = "altitude"  # Put your first variable label here
VARIABLE_LABEL_2 = "oxy"  # Put your second variable label here
VARIABLE_LABEL_3 = "pressure"  # Put your second variable label here
VARIABLE_LABEL_4 = "temp"  # Put your second variable label here

# Similarly you can create more variables in the same manner, but be careful that it should be same as the API Label of Variable on Udibots.
```
7. Now, create a dictionary as shown below:
```python3
payload = {VARIABLE_LABEL_1: value_1,VARIABLE_LABEL_2: value_2,VARIABLE_LABEL_3: value_3,VARIABLE_LABEL_4: value_4}

# The Variable Labels has already been set, the 'value_1' and others store the data obtained from the sensors.
```
8. Now, the code is **configured and ready to work with Udibots**.

**Now, let's configure the code to work with Firebase**
9. Now, open your firbase console.
11. Create a real-time database and, than look for a similar URL as shown below:
```python3
DSN = 'https://hacknitr-c0c75-default-rtdb.firebaseio.com/' # 'https://myapp.firebaseio.com/' (LINE 20)

# Replace it with the one you created.
firebase = firebase.FirebaseApplication(DSN) (LINE 25)
```
12. Set the real-time database authentication to NULL.
```Java
auth = NULL;
```
14. Create a dictionary, that stores a relevant name of information being sent along with the vallues. Also, keep this in consideration that each time we push the data, a new node will be created which is a bit problem of concern, but can be rectified.
```python3
data = {"temp": sensor.read_temperature(), "pressure": sensor.read_pressure(), "oxysat": oxi_level} (LINE 87) 
firebase.post('/sensor/mediot', data) #Edit the nodes as you want them to appear on the firebase (LINE 88)
```
# No, you are ready to go ahead :smile:
<p align="center"> 
  <img width="70%" src="https://github.com/amandewatnitrr/evolution-hacknitr/blob/main/imgs/b43db78f64c8e26fb580bb7f00b66222.gif">
</p>
