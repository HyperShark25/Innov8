SELECT * FROM Employee;

SELECT Fname, Lname, Salary, Dno FROM Employee;

SELECT Pname, Plocation, Dnum FROM Project;

SELECT Fname, Lname AS Full_Name, Salary * 0.10 AS ANNUAL_COMM FROM Employee;

SELECT SSN, Fname, Lname FROM Employee WHERE Salary > 1000;

SELECT SSN, Fname, Lname FROM Employee WHERE Salary * 12 > 10000;

SELECT Fname, Lname, Salary FROM Employee WHERE Sex = 'F';

SELECT DNumber, Dname FROM Department WHERE MGRSSN = 968574;

SELECT Pnumber, Pname, Plocation FROM Project WHERE Dnum = 10;

SELECT D.DNumber, D.Dname, E.SSN AS Manager_ID, E.Fname,
E.Lname AS Manager_Name FROM Department D JOIN Employee E ON D.MGRSSN = E.SSN;

SELECT D.Dname, P.Pname FROM Department D JOIN Project P ON D.DNumber = P.Dnum;

SELECT Dep.*, E.Fname, E.Lname AS Employee_Name FROM Dependent Dep JOIN Employee E
ON Dep.ESSN = E.SSN;

SELECT Dependent.Dependent_name, Dependent.Sex FROM Dependent JOIN
Employee ON Dependent.ESSN = Employee.SSN WHERE Dependent.Sex = 'F'
AND Employee.Sex = 'F' UNION SELECT Dependent.Dependent_name, Dependent.Sex
FROM Dependent JOIN Employee ON Dependent.ESSN = Employee.SSN
WHERE Dependent.Sex = 'M' AND Employee.Sex = 'M';

SELECT E.* FROM Employee E JOIN Department D ON E.SSN = D.MGRSSN;

SELECT Pnumber, Pname, Plocation FROM Project WHERE City IN ('Cairo', 'Alex');

SELECT * FROM Project WHERE Pname LIKE 'a%';

SELECT * FROM Employee WHERE Dno = 30 AND Salary BETWEEN 1000 AND 2000;

SELECT E.Fname, E.Lname FROM Employee as E JOIN Works_for WF
ON E.SSN = WF.ESSN JOIN Project as P ON WF.Pno = P.Pnumber
WHERE E.Dno = 10 AND P.Pname = 'AL Rabwah' AND WF.Hours >= 10;

SELECT E.Fname, E.Lname FROM Employee as E JOIN Employee as S
ON E.Superssn = S.SSN WHERE S.Fname = 'Kamel' AND S.Lname = 'Mohamed';

SELECT P.Pname, SUM(WF.Hours) AS Total_Hours FROM Project P JOIN Works_for WF
ON P.Pnumber = WF.Pno GROUP BY P.Pname;



SELECT D.Dname, 
       MAX(E.Salary) AS Max_Salary, 
       MIN(E.Salary) AS Min_Salary, 
       AVG(E.Salary) AS Avg_Salary
FROM Department D
JOIN Employee E ON D.DNumber = E.Dno
GROUP BY D.Dname;

SELECT E.Lname
FROM Employee E
WHERE E.SSN IN (SELECT MGRSSN FROM Department)
  AND NOT EXISTS (
      SELECT 1 
      FROM Dependent D 
      WHERE D.ESSN = E.SSN
  );

SELECT D.DNumber, D.Dname, COUNT(E.SSN) AS Num_Employees
FROM Department D
JOIN Employee E ON D.DNumber = E.Dno
GROUP BY D.DNumber, D.Dname
HAVING AVG(E.Salary) < (
    SELECT AVG(Salary)
    FROM Employee
);

SELECT E.Dno, E.Lname, E.Fname, P.Pname
FROM Employee E
JOIN Works_for WF ON E.SSN = WF.ESSN
JOIN Project P ON WF.Pno = P.Pnumber
ORDER BY E.Dno, E.Lname, E.Fname;

SELECT P.Pnumber, D.Dname, e.Lname FROM Project P
JOIN Department D ON P.Dnum = D.DNumber
JOIN Employee E ON D.MGRSSN = E.SSN
WHERE P.City = 'Cairo';


SELECT P.Pnumber FROM Project P
JOIN Works_for WF ON P.Pnumber = WF.Pno
JOIN Employee E ON WF.ESSN = E.SSN WHERE E.Lname = 'Mohamed'
UNION
SELECT P.Pnumber FROM Project P
JOIN Department D ON P.Dnum = D.DNumber
JOIN Employee E ON D.MGRSSN = E.SSN WHERE E.Lname = 'Mohamed';

SELECT E.SSN, E.Fname, E.Lname FROM Employee E
WHERE NOT EXISTS (
    SELECT * 
    FROM Dependent D 
    WHERE D.ESSN = E.SSN
);


INSERT INTO Employee (
Fname, Lname, SSN,
BDATE, Address, Sex,
Salary, Superssn, Dno)
VALUES ('Mohamed', 'Tarek',
 102672, '1999-08-25',
 'Smouha', 'M',
 5000, 112233, 30);

/* Data Manipulating Language */

INSERT INTO Employee (Fname, Lname, SSN, BDATE, Address, Sex, Dno)
VALUES ('Rami', 'Omar', 102660, '2002-05-19', 'Sidi Bishr', 'M', 30);

INSERT INTO Department (Dname, DNumber, MGRSSN, MGRStartdate)
VALUES ('DEPT IT', 100, 112233, '2006-11-01');


UPDATE Employee SET Superssn = NULL, Dno = 100 WHERE Fname = 'Noha'
AND Lname = 'Mohamed';

UPDATE Department SET MGRSSN = 102672 WHERE DNumber = 20;

UPDATE Employee SET Superssn = 102672 WHERE SSN = 102660;

DELETE FROM Employee WHERE Fname = 'Kamel' AND Lname = 'Mohamed';

UPDATE Employee SET Salary = Salary * 1.20 WHERE SSN = 102672;
