-- Drop tables if they exist
DROP TABLE IF EXISTS UserRoles;
DROP TABLE IF EXISTS RelaxationExercises;
DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Roles;
DROP TABLE IF EXISTS Interests;
DROP TABLE IF EXISTS Goals;

-- Create Roles table
CREATE TABLE Roles (
    role_id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50) NOT NULL UNIQUE
);

-- Insert roles data
INSERT IGNORE INTO Roles (role_name) VALUES ('admin'), ('instructor'), ('standard');

-- Create Interests table
CREATE TABLE Interests (
    interest_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE
);

-- Insert preset interests
INSERT INTO Interests (name) VALUES 
('Relaxation Techniques'),
('Yoga & Meditation'),
('Positive Thinking'),
('Creative Arts Therapy'),
('Nature Connection'),
('Music for Mood Boosting'),
('Exercise for Health'),
('Balanced Nutrition'),
('Stress Relief'),
('Better Sleep Habits'),
('Happiness & Joy Practices'),
('Self-Care Tips'),
('Supportive Communities'),
('Mental Health Awareness'),
('Anxiety & Mood Management');

-- Create Users table
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    passwrd VARCHAR(255) NOT NULL, -- Add password field
    firstName VARCHAR(100),
    lastName VARCHAR(100),
    country VARCHAR(50),
    gender ENUM('male', 'female', 'other') DEFAULT 'male',
    date_of_birth DATE,
    occupation VARCHAR(100),
    registration_date DATE DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    interest_id INT,
    FOREIGN KEY (interest_id) REFERENCES Interests(interest_id) -- Reference to Interests table
);

-- Create UserRoles table to map users to roles
CREATE TABLE UserRoles (
    user_id INT,
    role_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id),
    FOREIGN KEY (role_id) REFERENCES Roles(role_id),
    PRIMARY KEY (user_id, role_id)
);

-- Create RelaxationExercises table
CREATE TABLE RelaxationExercises (
    exercise_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    description TEXT,
    category VARCHAR(50),
    url VARCHAR(100)
);

-- Create Goals table
CREATE TABLE Goals (
    goal_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    goal_status ENUM('complete', 'incomplete') DEFAULT 'incomplete',
    goal_text TEXT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);
