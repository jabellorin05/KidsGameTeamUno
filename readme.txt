#######################################
# Real-Time Validation & Sign-In Website README
#######################################

Welcome to the Real-Time Validation & Sign-In website! This project features real-time validation of user input, user account creation and sign-in functionality, as well as session management for user authentication.

## Features

1. Real-Time Validation:
   - Validates user input in real-time using AJAX for instant feedback.
   - Monitors input fields for errors such as invalid characters or incorrect formats.

2. Sign-In:
   - User account login form with username and password fields.
   - Options to submit the form or access the registration form.
   - Authentication with PHP session management.
   - Error handling for incorrect login credentials.
   - Forgot password link for password recovery.

3. Sign-Out & Time-Out:
   - Logout functionality with session destruction.
   - Automatic logout after 15 minutes of inactivity.

4. Game Levels:
   - Includes multiple game levels with different challenges involving numbers and letters.

## Setup

1. Clone this repository to your local machine.
2. Ensure you have PHP and MySQL installed.
3. Import the provided SQL dump file to set up the database.
4. Update database credentials in the PHP files.
5. Start your local server.
6. Access the website in your browser.

## Folder Structure

|-- public/assets/css/ # CSS stylesheets
|-- public/assets/js/ # JavaScript files
|-- db/ # SQL dump file for database setup
|-- index.php # Homepage with login form
|-- public/form/signup-form.php # User registration form
|-- public/form/signin-form.php  
|-- config.php #define root directory path
|-- public/form/pw-update-form.php
|-- public/form/game_form.php # Game levels page
|-- README.txt # This README file



## Usage

1. Navigate to the homepage and either sign in or register for a new account.
2. Use the provided forms to sign in with your credentials or create a new account.
3. Access the game levels page after successful login to start playing.

