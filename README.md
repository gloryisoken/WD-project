WebDev Project – Nail Appointment Booking System  
For Summer Repeats Submission  

Overview  
This project is a simple PHP-based web application that allows users to view nail designs, sign up, log in, and book an appointment with a nail artist. It includes frontend and backend logic, user session handling, and database integration using PHP and MySQL.

Features Implemented  
- Homepage with previews of nail sets that link to individual pages  
- Individual nail pages (nail1.php, nail2.php, etc.) with sample layout  
- Static About page  
- User Sign-Up and Login pages  
- Appointment booking form that only appears once logged in  
- Form validations using basic PHP  
- Database saves appointments and user info correctly  
- Session handling: user stays logged in until logout  
- Logout ends session and brings user back to the homepage  
- Prevents access to booking page unless user is logged in  
- Confirmation message after booking  
- Responsive design using Bootstrap and custom CSS  

Progress Timeline

Early stage (up to July 7)  
- Set up PHP includes for header and footer  
- Created homepage, login, signup, and about pages  
- Designed layout using Bootstrap and custom CSS  
- Built form layout for login and booking (no backend logic yet)  

July 16 onward  
- Completed all nail preview pages  
- Styled and finished booking page  
- Created database in phpMyAdmin  
- Moved from Laragon to XAMPP for development  
- Added users and appointments tables to database  
- Connected PHP to MySQL database  

Final stage  
- Signup saves user info to the users table  
- Login checks credentials and starts session  
- Booking form saves to appointments table  
- Session prevents access to booking unless logged in  
- Logout destroys session and redirects user  
- All major functions tested and working  

Tools and Resources Used  
- PHP: Used for backend logic (login, signup, booking, sessions)  
- MySQL: Used for storing user accounts and appointments  
- XAMPP: Local development environment and database access  
- phpMyAdmin: Created and managed database  
- Bootstrap: Used for layout and responsive styling  
- Sessions: Used for login, logout, and booking access  
- Visual Studio Code: Used to write and manage code  
- SymfonyCasts: Used for understanding login and session logic  
- W3Schools & Lecture Notes: Used to understand PHP syntax and form handling  

How to Use  
1. Launch project in XAMPP (place folder inside htdocs).  
2. Open browser and go to localhost/Project (i simply called it 'Project') 
3. Create a user using the Sign-Up form.  
4. Log in with your new account.  
5. Use the booking form to make an appointment.  
6. Log out to end the session and return to homepage.  
