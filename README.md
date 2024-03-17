# TRANQUILITY TRIBE WEB README 


## PROJECT DESCRIPTION
The Tranquility Tribe developed a data-powered website to help individuals seek mindfulness and wellness solutions solve the challenge of integrating guided meditation, relaxation exercises, and wellness tips into their daily lives. 

## TECHNOLOGIES USED
- HyperText Markup Language (HTML)
- Cascading Styling Sheets (CSS)
- JavaScript (JS)
- Asynchronous JavaScript and XML (AJAX)
- Hypertext Preprocessor (PHP)

## DOCUMENTATION

This repository contains the source code for the Tranquility Tribe web application. 
Tranquility Tribe is an online platform that fosters community and provides personal development and wellness resources. Brief overview of folders Tranquility Tribe folders

**action folder:** Contains PHP scripts for handling user login and registration.

**login folder:** Contains PHP files for login and registration interface.

**assets:** Contains images and other static assets used in the Tranquility Tribe web application.

**css:** Contains CSS stylesheets for styling the website's webpages. Examples are the wellness tips and registration pages, amongst many other ages.

**js:** Contains JavaScript files for client-side scripting.

**settings:** Contains PHP files for the connection and core files that establish the connection to the database

**view:** Contains all the PHP files for the pages 

**db:** Contains the database being used for the project



## SETUP INSTRUCTIONS

To set up the Tranquility Tribe web application locally, follow these steps:
Clone this repository to your local machine. Use the following command statement:

**git clone https://github.com/PapaYaw-Boampong/Tranquility-Tribe-Team-Project.git**

- Configure your web server to serve the application from the root directory of your web server.
- Import the database schema using the provided SQL file (TT2025.sql).
- Update the database connection settings in the settings/connection.php file to match your local database configuration.
- Ensure that PHP is installed and configured correctly on your local machine.
- Access the application through your web browser. INSERT LINK


## TRANQUILITY TRIBE FOLDERS

**ACTION FOLDER**

The action folder contains PHP scripts for handling user login and registration. 

- login_user_action.php: Handles user login functionality. Validates user credentials and initiates a session upon successful login.
- register_user_action.php: Handles user registration functionality. Inserts user data into the database after validating the form inputs.

**ASSETS FOLDER**

This folder contains the CSS files responsible for styling different pages and components of the website. 

- aboutUsCSS.css: Contains styles specific to the "About Us" page.

- aboutUsTestCss.css: Possibly contains test styles for the "About Us" page.

- exercises.css: Styles related to the exercises page or components.

- homePageCSS.css: Styles for the home page of the website.

- landingPageCSS.css: Styles for the landing page are often the initial page users see when they visit the site.

- loginCSS.css: Styles for the login page.

- loginTestCSS.css: Likely contains test styles for the login page.

- meditation.css: Styles for the meditation page or related components.

- nav-bar.css: Styles for the navigation bar, ensuring consistent styling across the site.

- personalizedPlanCSS.css: Styles related to personalized plans or sections of the website.

- profile.css: Styles for the user profile page.

- registerCSS.css: Styles for the registration page.

- registerTestCss.css: Probable test styles for the registration page.

**DB FOLDER**

The folder contains the files that have to do with the database structure and its visualization, that is, its Entity-Relationship Diagram(ERD) and the database.

- TT2025.sql: This file is likely a SQL script containing the database schema or structure for the Tranquillity Tribe Wellness project, possibly updated or specific to 2025.

- erd.drawio: This file could be another diagram created using draw.io, representing the database's Entity-Relationship Diagram (ERD).


**JS FOLDER**

Contains JavaScript files for various functionalities on the Tranquility Tribe website

- login.js: This file contains JavaScript code related explicitly to handling functionalities related to the login process, such as form validation, authentication, and user session management.

- meditation.js: Likely contains JavaScript code related to functionalities specific to the meditation page, such as controlling audio/video players, handling user interactions, and updating content dynamically.

- profile.js: This file likely contains JavaScript code for managing user profile-related functionalities, such as updating user information, handling preferences, and interactions on the profile page.

- register.js: Contains JavaScript code related to functionalities specific to the registration process, such as form validation, handling user input, and submitting registration data to the server.

**LOGIN FOLDER**

The login folder contains PHP files responsible for rendering the user interface and facilitating user interactions during the login and registration processes.

- loginView.php: This PHP file likely contains the view (presentation layer) for the login page. It includes HTML markup and embedded PHP code to dynamically generate the login form and display any related messages or errors.

- registerView.php: Similarly, this PHP file is likely the view for the registration page. It contains HTML markup and PHP code to render the registration form and handle user input, displaying relevant messages or errors as needed.

**SETTINGS FOLDER**

Contains files that help in setting up the foundational components and configurations necessary for the database connection and other function connections of the web application.

- connection.php: This PHP file likely contains code to establish a connection to the database. It typically includes credentials (such as database hostname, username, password, and database name) and functions to connect to the database using a PHP database extension like MySQLi or PDO.

- core.php: This PHP file often contains core functionalities or configurations used throughout the application. It may define constants, include necessary files, initialize essential variables, set up session handling, or perform other initialization tasks required for the smooth functioning of the web application.


**VIEW FOLDER**

Contains the components of the web application's user interface, responsible for rendering dynamic content and providing users with an interactive and engaging experience

- aboutUsView.php: This PHP file is likely the view for the "About Us" page. It contains HTML markup and embedded PHP code to display information about the Tranquillity Tribe Wellness team, mission, and related content.

- exercisesPageView.php: This PHP file may serve as the view for the exercises page. It likely contains HTML markup and PHP code to display exercise-related content, such as descriptions, images, and instructional videos.

- homePageView.php: This PHP file serves as the view for the website's home page. It typically contains HTML markup and PHP code to display dynamic content, such as featured articles, announcements, or promotions.

- landingPageView.php: This PHP file is likely the view for the landing page, which is often the initial page users see when they visit the website. It may contain HTML markup and PHP code to introduce the website's purpose and features, and encourage user engagement.

- meditationPageView.php: This PHP file likely serves as the view for the meditation page. It may contain HTML markup and PHP code to display meditation-related content, such as guided meditation sessions, relaxation techniques, and mindfulness exercises.

- personalizedPlanView.php: This PHP file may serve as the view for personalized plans or recommendations tailored to individual users. It may contain HTML markup and PHP code to display personalized content based on user preferences, goals, or past interactions.

- profile.php: This PHP file likely serves as the view for the user profile page. It typically contains HTML markup and PHP code to display user information, settings, and options for managing the user's account.
- 
- wellness.php: This PHP file may serve as a general view of wellness-related content on the website. It could contain HTML markup and PHP code to display articles, tips, resources, or other content to promote well-being.

## PROJECT STATUS

Complete
## CONTRIBUTORS

Thanks goes to the following wonderful people:

- Julia Mc-Addy Akuorkor
- Mariam Wahab
- Candace Tariro Hunzwi
- Papa Yaw Boampong Wireko
- Pascal Mathias Okoli

