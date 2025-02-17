# Robot-Control-Web-Application

his project is a lightweight web application designed to control the movement of a robot base while logging directional data in a Firebase Realtime Database. It also features a PHP script to fetch the most recent direction from the database.

-------------------------------------------------------------------------------------------------

(Features):
Web Interface: A user-friendly and responsive UI with buttons to control the robot's movement (Forward, Backward, Left, Right).
Firebase Integration: Stores directional data in Firebase Realtime Database along with timestamps.
Data Retrieval: A PHP script retrieves the most recently logged direction from the database.


-------------------------------------------------------------------------------------------------

Technologies Used

1-(Frontend):

*HTML, CSS, JavaScript

*Firebase SDK for JavaScript

2-(Backend):

*PHP

*Firebase Admin SDK for PHP

3-(Database):

*Firebase Realtime Database


-----------------------------------------------------------------------------------------------

(Setup Instructions):

1-Clone the Repository

git clone <https://github.com/jomanbeyari1/Robot-Control-Web-Application)>
cd robot_control

2-Configure Firebase

Create a Firebase project in Firebase Console.
Enable Realtime Database and set the rules to read and write as true for testing purposes.
Download the Service Account Key from Project Settings > Service Accounts.
Place the .json key file in the project root.

3-Install PHP Dependencies

Make sure you have Composer installed. Run the following command in the project root:
composer install

4-Run the Application

a-Start a local server using XAMPP or any PHP server.

b-Place the project folder in the htdocs directory (for XAMPP).

c-Access the web interface:
http://127.0.0.1:5500/index.html

d-Test the PHP script:
http://localhost/robot_control/retrieve_last_value.php


![image](https://github.com/user-attachments/assets/eb52d998-b818-4a5c-bf55-e2cbc51e8607)


------------------------------------------------------------------------------------------------

(Future Enhancements):

*Implement authentication for secure database access.

*Develop more advanced control mechanisms for the robot.

*Integrate real-time feedback to enhance interaction with the robot.

