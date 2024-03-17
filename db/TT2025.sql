-- Drop tables if they exist
DROP TABLE IF EXISTS UserRoles;
DROP TABLE IF EXISTS WellnessPlans;
DROP TABLE IF EXISTS AnalyticsData;
DROP TABLE IF EXISTS MeditationSession;
DROP TABLE IF EXISTS WellnessTips;
DROP TABLE IF EXISTS RelaxationExercises;
DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Roles;
DROP TABLE IF EXISTS Interests;

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
    userName VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    firstName VARCHAR(100),
    lastName VARCHAR(100),
    country VARCHAR(50),
    gender ENUM('male', 'female', 'other') DEFAULT 'male',
    date_of_birth DATE,
    occupation VARCHAR(100),
    registration_date DATE,
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

-- Create MeditationSession table
CREATE TABLE MeditationSession (
    session_id INT PRIMARY KEY AUTO_INCREMENT, 
    title VARCHAR(100), 
    description TEXT, 
    duration TIME, 
    rating INT,  
    reviews INT,  
    url VARCHAR(100)
);

-- Create WellnessTips table
CREATE TABLE WellnessTips (
    tip_id INT PRIMARY KEY AUTO_INCREMENT,  
    title VARCHAR(100),  
    category VARCHAR(50),  
    content TEXT
);

-- Create RelaxationExercises table
CREATE TABLE RelaxationExercises (
    exercise_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    description TEXT,
    category VARCHAR(50),
    url VARCHAR(100)
);

-- Create WellnessPlans table
CREATE TABLE WellnessPlans (
    plan_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL, 
    creation_date DATE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create Goals table
CREATE TABLE Goals (
    goal_id INT PRIMARY KEY AUTO_INCREMENT,
    plan_id INT NOT NULL,
    goal_text TEXT,
    FOREIGN KEY (plan_id) REFERENCES WellnessPlans(plan_id)
);


-- Create AnalyticsData table
CREATE TABLE AnalyticsData (
    analytics_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    date DATE,
    metrics INT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);
