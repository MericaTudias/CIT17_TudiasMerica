CREATE DATABASE PHPScriptDemo;
USE PHPScriptDemo;
CREATE table Student(
    StudentID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    DateOfBirth varchar(255),
    Email varchar(255),
    Phone int(11),
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
    Phone int(11),
    PRIMARY KEY(InstructorID)
);

CREATE table Enrollment(
    EnrollmentID int not null,
    StudentID int(255),
    CourseID int(255),
    ErollmentDate varchar(255),
    Grade int(255),
    PRIMARY KEY(EnrollmentID),
    FOREIGN KEY(StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY(CourseID) REFERENCES Course(CourseID)
);

INSERT INTO Student(StudentID, FirstName, LastName, DateOfBirth, Email, Phone)
VALUES(011, "Jane", "Hopper", "05-25-1971", "eleven@gmail.com", 09011011011);

INSERT INTO Course(CourseID, CourseName, Credits)
VALUES(01, "CIT17", "1");

INSERT INTO Instructor(InstructorID, FirstName, LastName, Email, Phone)
VALUES(123, "Martin", "Brenner", "brenner@gmail.com", 09123456789);

INSERT INTO Enrollment(EnrollmentID, StudentID, CourseID, ErollmentDate, Grade)
VALUES(0101, 011, 01, "10-13-1989", 99);