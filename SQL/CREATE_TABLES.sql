DROP TABLE IF EXISTS location;
DROP TABLE IF EXISTS project;
DROP TABLE IF EXISTS employee;
DROP TABLE IF EXISTS department;

CREATE TABLE department(
    deptNumber INT UNIQUE NOT NULL,
    deptName VARCHAR(200) UNIQUE NOT NULL,
    PRIMARY KEY (deptNumber, deptName)
);

CREATE TABLE employee(
    SIN INT PRIMARY KEY,
    SupervisorSIN INT DEFAULT 0,
    employeeName VARCHAR(200) NOT NULL,
    birthdate DATE NOT NULL,
    address VARCHAR(200),
    phoneNumber VARCHAR(200),
    salary DECIMAL(7,2),
    gender VARCHAR(20) DEFAULT 'N/A',
    hours DECIMAL(7, 2),
    deptNumber INT NOT NULL,
    deptName VARCHAR(200) NOT NULL,
    managesDept BOOLEAN DEFAULT 0,
    managerStartDate DATE DEFAULT NULL,
    CONSTRAINT `department_Num` FOREIGN KEY (deptNumber) REFERENCES department(deptNumber)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `department_Name` FOREIGN KEY (deptName) REFERENCES department(deptName)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE project(
    projectID INT NOT NULL,
    projectName VARCHAR(200) NOT NULL,
    SIN INT NOT NULL,
    startDate DATE,
    stage VARCHAR(20),
    revenue DECIMAL(8, 2),
    employeeIsManager BOOLEAN DEFAULT 0,
    CONSTRAINT `Emp_SIN` FOREIGN KEY (SIN) REFERENCES employee(SIN)
    ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY(projectID, projectName, SIN)
);

CREATE TABLE location(
    locationName VARCHAR(200) PRIMARY KEY,
    deptName VARCHAR(200) NOT NULL,
    deptNumber INT NOT NULL,
    projectID INT NOT NULL,
    CONSTRAINT `dept_Name` FOREIGN KEY (deptName) REFERENCES department(deptName)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `dept_Num` FOREIGN KEY (deptNumber) REFERENCES department(deptNumber)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `project_ID` FOREIGN KEY (projectID) REFERENCES project(projectID)
    ON DELETE CASCADE ON UPDATE CASCADE
);