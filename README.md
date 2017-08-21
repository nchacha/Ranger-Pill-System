# Ranger-Pill-System
Repository for my UCR CS179J Senior Project. The Ranger Pill System is a pill management system that alert users when to take his/her pills. I used a Raspberry PI and an Arduino Mega to create this system.  DO NOT PLAGIARIZE. If you have any questions, send them my way!

Source Code Descriptions

main.py: The main program of the project.  It runs get_time.py first, and depending on what time value get_time returns, it either quits or runs send_flag.py
get_time.py: Accesses the mysql database and retrieves the time when the system is supposed to run for today.  Outputs the time to dates.txt
send_flag.py: Determines when it's time to take the pills and sends a flag to the arduino to do the appropriate actions
weekdays.ino: The arduino code that controls the servo, fingerprint scanner, and lights.  Sends a flag back to send_flag.py if the pills have or have not been taken

Website Code Descriptions

index.php: The main log-in page
checklogin.php: Takes the credentials from index.php, checks if they exist in the database, and if they’re valid
menu.php: Main Menu page
week.php: Creates the weekly schedule
confirm.php: Page where caretaker confirms if the schedule is correct
insert.php: Inserts the dates and times to the mysql table
change.php: Takes in the date and the new time the caretaker wants to change
changephp.php: Takes the input from change.php and makes the change in the database table
updatecomp.php: Confirms the change has occurred
view.php: Takes in a date and outputs the time the user is scheduled to take their pills
logout.php: Logs out the caretaker from the website
time.php: Outputs the time for today's time. 
