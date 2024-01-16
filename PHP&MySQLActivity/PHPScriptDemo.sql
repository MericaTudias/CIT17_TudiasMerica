CREATE DATABASE PHPScriptDemo;
USE PHPScriptDemo;
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

CREATE table Instructor(
    InstructorID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Phone varchar(255),
    PRIMARY KEY(InstructorID)
);

CREATE table Enrollment(
    EnrollmentID int not null,
    StudentID int(255),
    CourseID int(255),
    ErollmentDate varchar(255),
    Grade varchar(255),
    PRIMARY KEY(EnrollmentID),
    FOREIGN KEY(StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY(CourseID) REFERENCES Course(CourseID)
);
