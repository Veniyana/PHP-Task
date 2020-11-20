The solution to the task is in index.php


connectDB.php - connection between backend and frontend
database.sql - the database 
index.php - the solution to the task in it the file (solution in PHP)
main.js - another solution but with JavaScript


There are two ways to see the output of the task given.
1. PHP based (automatically)
2. JavaScript based (you need to uncomment line 69 in index.php)


For installation:
1. The database name should be 'succevo task'.
2. Import the file 'database.sql' into the already created 'succevo task' database.

The task:
There is a simple table with 3 columns id, parent_id, name. Write a recursive function to show all names from the table in parent child order.

| id        | Parent_id   | name     |
| --------- |:-----------:| --------:|
| 1         | 0           | A        |
| 2         | 0           | B        |
| 3         | 1           | C        |
| 4         | 0           | D        |
| 5         | 2           | E        |
| 6         | 2           | F        |
| 8         | 4           | G        |
| 9         | 1           | H        |
| 10        | 0           | I        |
| 11        | 4           | J        |
| 12        | 1           | K        |
| 13        | 0           | L        |


@2020