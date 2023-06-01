-- Create database for student
CREATE DATABASE student_db;
USE student_db;

CREATE TABLE student (
  `studentID` int(30) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `program` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `year` int(30) NOT NULL,
  `password`varchar(45) NOT NULL,
  PRIMARY KEY  (`studentID`)
);

-- Create database for professors
CREATE DATABASE professor_db;
USE professor_db;

-- Create table for professors
CREATE TABLE professors (
  `professorsID` int(30) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password`varchar(45) NOT NULL,
  PRIMARY KEY  (`professorsID`)
);

-- Create database for faculty
CREATE DATABASE faculty_db;
USE faculty_db;

-- Create table for faculty
CREATE TABLE faculty (
  `facultyID` int(30) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password`varchar(45) NOT NULL,
  PRIMARY KEY  (`facultyID`)
);


-- Create the database
CREATE DATABASE item_db;
USE item_db;

-- Create the table for items
CREATE TABLE items (
  `itemID` int(30) NOT NULL,
  `itemName` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `quantity` int(30) NOT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY  (`itemID`)
);

CREATE DATABASE admin_db;
USE admin_db;

CREATE TABLE admin (
  `adminID` int(30) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`adminID`)
);
