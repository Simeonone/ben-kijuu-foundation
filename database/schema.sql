-- database/schema.sql
CREATE DATABASE ben_kijuu_foundation;
USE ben_kijuu_foundation;

-- Event registration table (this is the main one now)
CREATE TABLE event_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    nationality VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    how_heard VARCHAR(100) NOT NULL, -- dropdown option
    tshirt_size ENUM('XS', 'S', 'M', 'L', 'XL', 'XXL') NOT NULL,
    participation_type ENUM('In Person', 'Virtual') NOT NULL,
    distance ENUM('5km', '10km', '21km') NOT NULL,
    number_of_adults INT DEFAULT 1,
    number_of_children INT DEFAULT 0,
    total_people INT GENERATED ALWAYS AS (number_of_adults + number_of_children) STORED,
    comments TEXT,
    special_requirements TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Keep these for other forms (contact, newsletter, etc.)
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE newsletter_subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin users (for dashboard access)
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);