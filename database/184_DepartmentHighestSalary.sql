## First Solution 

WITH MaxSalaries AS (
  SELECT departmentId, 
         MAX(salary) AS maxSalary 
  FROM 
    Employee 
  GROUP BY 
    departmentId
) 
SELECT 
  dep.name AS Department, 
  emp.name AS Employee, 
  emp.salary AS Salary 
FROM 
  Employee emp 
  JOIN Department dep ON emp.departmentId = dep.id 
  JOIN MaxSalaries ms ON emp.departmentId = ms.departmentId AND emp.salary = ms.maxSalary;


## Second Solution

SELECT 
    dep.name AS Department, 
    emp.name AS Employee, 
    emp.salary AS Salary
FROM 
    Employee emp
JOIN 
    Department dep ON emp.departmentId = dep.id
WHERE 
    emp.salary = (
        SELECT 
            MAX(salary) 
        FROM 
            Employee 
        WHERE 
            departmentId = emp.departmentId
    );
