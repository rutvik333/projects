Select * From users Where id=1;
Insert Into users Values('');
Update users Set username="xyz" Where id=0;
Delete From users Where id=1;



CREATE DATABASE test;
Drop Database test;

CREATE TABLE employees (
    id int(20) Primary Key Not Null,
    username Varchar(200),
     city Varchar(200) );
DROP TABLE employees;
ALTER TABLE employees ADD contact int(20);
ALTER TABLE employees DROP Column contact;
ALTER TABLE table_name RENAME COLUMN old_name to new_name;
TRUNCATE TABLE employees;  /*used to delete all the rows from the table*/


(INNER) JOIN: /* Returns records that have matching values in both tables */

SELECT id, username, email
FROM users
INNER JOIN employees ON users.id = employees.eid;

LEFT (OUTER) JOIN:/* Returns all records from the left table, and the matched records from the right table*/

SELECT column_lists  
FROM users    
LEFT [OUTER] JOIN employees    
ON users.id = employees.eid;    

RIGHT (OUTER) JOIN: /* Returns all records from the right table, and the matched records from the left table*/

SELECT column_lists    
FROM table1    
RIGHT [OUTER] JOIN table2    
ON table1.column = table2.column;    


FULL (OUTER) JOIN: /* Returns all records when there is a match in either left or right table*/
  
SELECT column_lists    
FROM table1    
FULL [OUTER] JOIN table2    
ON table1.column = table2.column;   


CREATE SEQUENCE My_Sequence AS INT
START WITH 1
INCREMENT BY 1
MINVALUE 1
MAXVALUE 7
CYCLE;

UPDATE CUSTOMERS SET ID = NEXT VALUE FOR my_Sequence;
