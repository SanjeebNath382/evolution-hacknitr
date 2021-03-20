# **IoT Scheme | MedIoT** :computer:
<p align="center">
  <img width="60%" src="https://github.com/amandewatnitrr/evolution-hacknitr/blob/main/imgs/image_processing20191005-22376-4jawmy.gif">
</p>

## Hardware Requirements :
1. Raspberry Pi
2. Analog to Digital Converter(ADC)
3. Voltage Level Converter
4. Sensors("We used BMP085 and Pulse Oximeter for this purpose.")


## Setting Up the Raspberry Pi
1. Clone this repository on your raspberry pi.
2. Move to the IoT folder
3. Use the below command to install all the required libraries
```pip
pip3 install -r requirements.txt 
```
4. Now as you are ready to work with, in oerder to make it work, you need to make your account on Udibots and also, login to your firebase console.
5. So, in order to make it work, you need to change, the device token, and device label to one you have created.
```python3
TOKEN = "BBFF-5NwkUEf1PzXTAN856gkXtXy8Dp6IhC"  # Put your TOKEN here
DEVICE_LABEL = "mediot"  # Put your device label here
```

