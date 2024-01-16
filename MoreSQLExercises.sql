CREATE DATABASE StudentRecord;

CREATE table Student(
    StudentID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    DateOfBirth varchar(255),
    Email varchar(255),
    Phone varchar(255),
    PRIMARY KEY(StudentID)
);

CREATE table Course(
    CourseID int not null,
    CourseName varchar(255),
    Credits varchar(255),
    PRIMARY KEY(CourseID)
);