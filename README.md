![logo](https://user-images.githubusercontent.com/26342942/89724675-cf9b6680-da23-11ea-9b84-fdbc01c20759.png)

# The Third Eye

Developed by:
### CODE RED
# Team Members
Ramachandran A
 and Dr. Gireeshan MG
# Problem Statement:
### IOT BASED PERIMETER SECURITY 
# Existing System
The existing system consist of police officers involved in monitoring cctv and perimeter surveillance. The communication is done wireless and there are cases of communication gap.

# Proposed System
The proposed system is found to be a fully customisable,portable,low cost and a far more efficient system considering the coordination between the first
responders and accuracy of monitoring. The system is portable and because of that, it  is not to be hosted on a web platform instead is independent and confined to perimeter networks.

# Usage
- Security personnel can set up their own desired and complex perimeter with the hardware modules they have known as the Perimeter Pool.
- Which ever number of hardware modules being used can be configured with the control system.
- The control system is a web based application which can monitor and control the core functionalities of the system.
- Like said, any number of perimeter pools can be set up having a control system and a bunch of hardware modules.
- The communication remain secure as it doesnt go out of the private network.
- Multiple breach filtering mechanisms are used to eliminate redundant and false alarms.
- AI based object detection and recognition included for better accuracy and automation.
- Opens the door to computer based policing and requires only one officer to monitor the entire pool.

# Advantages
- Portable
- Automated
- Customisable
- Secure
- Efficient utilisation of resources
- Better coordination on the levels of security

# The Chakravyuh

A multilayered perimeter which can be setup using the hardware modules are known as chakravyuh. The perimeter pool can be set up inside/outside the government organisation and can be monitored by multiple private networks and control systems.
Can be termed as perimeter of perimeters.


![chakravyuh](https://user-images.githubusercontent.com/26342942/89726262-36c21680-da36-11ea-9c34-3a699705fd3f.png)

# Example of usage

- A VIP is coming for a function and strict police security need to be enforced.
- The Third eye components can be accomodated in a single police vehicle. 
- The team consist of a control station master, group of sentries,policemen on duty and personal security for the VIP.
- The team arrived one day before the function, looked into the surroundings and charted out a plan to set up which type of perimeter is needed for better security.
- The modules are set up one by one on the perimeter forming the desired perimeter pool.
- Once the perimeter is setup, a private wireless hostspot is used to connect all the modules in the perimeter pool.
- All the hardware modules are configured with the control station manually by adding the scope of the module(eg: Main Gate), the coordinates of the module and the ip address of the camera associated with the module. 
- The UI will be set up with a panel having the scope of all hardware modules installed in the perimeter. 
- The security in charge are provided with the third eye mobile application which will be manually configured with the control station.
- The top and personal security personnel's mobile numbers are added as SOS(Save Our Ship) numbers in the control station.
- Once the hardware module encounters any movement, a mail is sent to the mail id goverened by the control station.
- The control station automatically processes it to find out which hardware triggered the movement and finds the presence of any threat(Humans or vehicles) using the ip camera attached with the module with the help of AI based object recognition.
- If the program finds any threat, the respective scope will be alerted(eg: Main Gate) in the control station and live camera feed will be opened in the control station.
- The sentries(android app users) will be alerted by the application and will recieve directions on the google maps for navigating to the module that triggered the breach.
- Personal secuurity officers inside with the VIP will be sent with an SOS SMS indicating the breach and scope.

# How it works
### Use Case 
![use_case](https://user-images.githubusercontent.com/26342942/89726914-b8697280-da3d-11ea-9a56-ca7be6a24805.jpg)

### Data Flow 
![DFD](https://user-images.githubusercontent.com/26342942/89726924-d20aba00-da3d-11ea-99f8-c8295b738c4c.jpg)
- The hardware module will be having a PIR sensor a computer vision enable camera. 
- The PIR senosor will be listening in its range for even slight movements all the time.
- Once a movement is detected, a mail is sent from the hardware module with the module id to the mail address configured with the control station.
- The control station listens to the mails on a timely basis.
- When the conrol station encounters the mail, time based constraints are checked to verify that the mail is not a duplicate of the previous.
- When the mail is found to be new, the curresponding camera of the module is loaded with the object detection script.
- if the script finds nothing as humans/vehicles, the alarm is predicted false and the mail is discarded.
- If any threat is identified[Eg: Humans/vechicles in our current context], alarm will be initiated and the live camera feed of the triggered location will be displayed in the control station automatically.
- The android application users/sentries/security in charge will be alerted with the navigaton towards the breach.
- The SOS numbers will be delivered with an SMS indicating the breach.

# Users
### Control Master
### Oerations/Duty in Charge
### SOS Recievers/Personal Security

# Modules
### Hardware
### Control Station [Web]
### Android

# Hardware

The hardware module comes with a wifi enabled microcontroller, a PIR sensor for detecting movement and computer vision enabled camera.
[Note: Because of the shortage of resources, the webcam is used instead of camera for demonstration !!!]

![IMG-20200807-WA0120](https://user-images.githubusercontent.com/26342942/89726716-5576dc00-da3b-11ea-8774-71f1d829bee8.jpg)

- ESP8266 NodeMCU is used as the micrcontroller for this project as it is wifi capable.
- A custom low cost PIR sensor is used for detecting the movements.
- Blynk platform is used to configure the hardware with the mail id of the control station.
- Mail will be sent with the module id in cause of any movement being detected.

# Control Station

### Login Screen

![Screenshot (80)](https://user-images.githubusercontent.com/26342942/89727106-848f4c80-da3f-11ea-80ee-fb511627c546.png)

- The control station master can access the system using his credentials stored in the database.

### Main Screen
