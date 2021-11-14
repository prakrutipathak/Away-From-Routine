#Tour-and-Travel-website
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

auth_password=Your  Email Password

force_sender=Your Email-id

 Turning on 'less secure apps' settings as mailbox user

Create the database, name useform and import the SQL file useform.sql .

