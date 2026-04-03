CREATE DATABASE church_management;
USE church_management;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(255),
role VARCHAR(20)
);

INSERT INTO users (username,password,role)
VALUES ('admin', MD5('admin123'), 'admin');

CREATE TABLE members(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
join_date DATE,
gender VARCHAR(10),
status VARCHAR(20),
phone VARCHAR(20),
department VARCHAR(50)
);

CREATE TABLE visitors(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
contact VARCHAR(50),
residence VARCHAR(100),
date_visited DATE
);

CREATE TABLE followup(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
contact VARCHAR(50),
residence VARCHAR(100),
status VARCHAR(50)
);

CREATE TABLE inventory(
id INT AUTO_INCREMENT PRIMARY KEY,
item VARCHAR(100),
quantity INT,
date_added DATE
);
