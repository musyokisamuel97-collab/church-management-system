CREATE DATABASE IF NOT EXISTS church_management;

USE church_management;

-- USERS TABLE

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(255),
role VARCHAR(20)
);

INSERT INTO users (username,password,role)
VALUES ('admin',MD5('admin123'),'admin');

INSERT INTO users (username,password,role)
VALUES ('patron',MD5('patron123'),'patron');

-- MEMBERS TABLE

CREATE TABLE members (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
gender VARCHAR(10),
phone VARCHAR(20),
department VARCHAR(50),
date_joined DATE,
status VARCHAR(20),
photo VARCHAR(255)
);

-- VISITORS TABLE

CREATE TABLE visitors (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
phone VARCHAR(20),
residence VARCHAR(100),
visit_date DATE,
interest VARCHAR(100)
);

-- FOLLOWUP TABLE

CREATE TABLE followups (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
contact VARCHAR(50),
residence VARCHAR(100),
status VARCHAR(50)
);

-- ATTENDANCE TABLE

CREATE TABLE attendance (
id INT AUTO_INCREMENT PRIMARY KEY,
member_name VARCHAR(100),
service_date DATE,
status VARCHAR(20)
);

-- DEPARTMENTS TABLE

CREATE TABLE departments (
id INT AUTO_INCREMENT PRIMARY KEY,
department_name VARCHAR(100),
leader VARCHAR(100)
);

-- FINANCE TABLE (TITHES AND OFFERINGS)

CREATE TABLE finance (
id INT AUTO_INCREMENT PRIMARY KEY,
member_name VARCHAR(100),
amount DECIMAL(10,2),
type VARCHAR(50),
date DATE
);

-- INVENTORY TABLE

CREATE TABLE inventory (
id INT AUTO_INCREMENT PRIMARY KEY,
item_name VARCHAR(100),
category VARCHAR(100),
quantity INT,
condition_status VARCHAR(50)
);
