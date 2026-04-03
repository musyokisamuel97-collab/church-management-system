CREATE DATABASE church_db;

USE church_db;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50),
role VARCHAR(50)
);

INSERT INTO users(username,password,role)
VALUES('admin','admin123','admin');

CREATE TABLE members(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
date_joined DATE,
gender VARCHAR(10),
status VARCHAR(20),
phone VARCHAR(20),
department VARCHAR(50)
);

CREATE TABLE visitors(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
phone VARCHAR(20),
residence VARCHAR(100),
interest VARCHAR(100),
visit_date DATE
);

CREATE TABLE followups(
id INT AUTO_INCREMENT PRIMARY KEY,
visitor_name VARCHAR(100),
contact VARCHAR(50),
residence VARCHAR(100),
status VARCHAR(50)
);

CREATE TABLE inventory(
id INT AUTO_INCREMENT PRIMARY KEY,
item_name VARCHAR(100),
department VARCHAR(100),
quantity INT
);

CREATE TABLE attendance(
id INT AUTO_INCREMENT PRIMARY KEY,
member_name VARCHAR(100),
service_date DATE,
status VARCHAR(20)
);
