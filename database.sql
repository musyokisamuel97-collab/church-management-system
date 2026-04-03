CREATE DATABASE church_management;
USE church_management;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(255),
role VARCHAR(20)
);

INSERT INTO users(username,password,role)
VALUES('admin',MD5('admin123'),'admin');

CREATE TABLE members(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
gender VARCHAR(10),
phone VARCHAR(20),
status VARCHAR(50),
department VARCHAR(100),
date_joined DATE,
photo VARCHAR(255)
);

CREATE TABLE visitors(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
contact VARCHAR(20),
residence VARCHAR(100),
date_visited DATE
);

CREATE TABLE followups(
id INT AUTO_INCREMENT PRIMARY KEY,
visitor_name VARCHAR(100),
contact VARCHAR(20),
residence VARCHAR(100),
status VARCHAR(50)
);

CREATE TABLE attendance(
id INT AUTO_INCREMENT PRIMARY KEY,
member_name VARCHAR(100),
service_date DATE
);

CREATE TABLE departments(
id INT AUTO_INCREMENT PRIMARY KEY,
department_name VARCHAR(100)
);

CREATE TABLE tithes(
id INT AUTO_INCREMENT PRIMARY KEY,
member_name VARCHAR(100),
amount DECIMAL(10,2),
date_given DATE
);

CREATE TABLE inventory(
id INT AUTO_INCREMENT PRIMARY KEY,
item_name VARCHAR(100),
category VARCHAR(100),
quantity INT
);
