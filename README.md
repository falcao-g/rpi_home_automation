# Rpi Home Automation
Baseline for home automation projects with the Raspberry Pi

# Hardware
Raspberry Pi</br>
Relay Module

# Flow Communication
Web Server (Apache) --> PHP --> Python --> GPIO Raspberry
 
# GPIO
Connection Devices</br>
DEVICE 1 --> Pin7 (GPIO4)</br>
DEVICE 2 --> Pin 11 (GPIO17)</br>

# Instructions
1. Do "sudo apt install apache2 -y" in the raspberry pi
2. Do "sudo apt install php libapache2-mod-php -y"
3. Copy directory GPIO to /home/pi</br>
4. Go to /var/www/html and remove the "index.html"
5. Copy file php/index.php to /var/www/html (DocumentRoot Apache)
6. Connect a 3.3V gpio in the vcc port of the relay
7. Connect a gnd gpio in the gnd port of the relay
8. Connect the Pin 7 (GPIO4) in the In1 port of the relay
9. Connect the Pin 11 (GPIO17) in the In2 port of the relay
And now you can connect any device in the relay and control it via web :)
