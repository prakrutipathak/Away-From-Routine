# Tour-and-Travel-website


A tour and travel website named "Away From Routine." In this, there are two panels: admin and user.



In the user panel, if a user is new, they have to do a signup to see all the information regarding cities. All facilities like buses, cabs, and hotels are available on it.Atlast users must fill out a registration form with all of their information to confirm the booking and make payment.


In the admin panel, the admin wants to create their account. The admin has rights to edit and delete the users' information. All the information and the number of registrations are visible on the admin profile.

Changes you should make:-

At  login-signup/controllerUserData.php
$sender = "From:enter your email id";

At  ADMIN-PANEL/controllerUserData.php
$sender = "From:enter your email id";

At process.php
$to="your email-id";

The changes you should make to your XAMPP server for email verification and contact us.  

 Go to C:\xampp\php and open the php.ini file.
 
SMTP=smtp.gmail.com

smtp_port=587

sendmail_from = Your Email-id

sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


Now, go to C:\xampp\sendmail and open the sendmail.ini file.

smtp_server=smtp.gmail.com

smtp_port=587 or 25 //use any of them

error_logfile=error.log

debug_logfile=debug.log

auth_username=Your Email-id

auth_password=Use app Password  //steps to generate an app password are listed below.

force_sender=Your Email-id

Create the database, name useform and import the SQL file useform.sql .

Create and use app passwords
Note: If you use 2-Step-Verification and are seeing a 'password incorrect' error when trying to access your Google Account, an app password may solve the problem.

1.Go to your Google Account.
2.On the left navigation panel, choose Security.
3.On the 'Signing in to Google' panel, choose App passwords. If you don’t see this option:
4.2-Step Verification is not set up for your account
5.2-Step Verification is set up for security keys only
6.Your account is through work, school or other organisation
7.You’ve turned on Advanced Protection for your account
8.At the bottom, choose Select app and choose the app that you’re using.
9.Choose Select device and choose the device that you're using.
Choose Generate.
Follow the instructions to enter the app password. The app password is the 16-character code in the yellow bar on your device.
Choose Done.
