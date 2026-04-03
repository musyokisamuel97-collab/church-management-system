CREATE DATABASE church_management;

USE church_management;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100),
username VARCHAR(50),
password VARCHAR(255),
role VARCHAR(50)
);

CREATE TABLE members (
id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100),
phone VARCHAR(20),
email VARCHAR(100),
ministry VARCHAR(100)
);

CREATE TABLE visitors (
id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100),
phone VARCHAR(20),
visit_date DATE,
place_of_interest VARCHAR(100)
);

CREATE TABLE inventory (
id INT AUTO_INCREMENT PRIMARY KEY,
item_name VARCHAR(100),
category VARCHAR(100),
quantity INT,
location VARCHAR(100)
);
