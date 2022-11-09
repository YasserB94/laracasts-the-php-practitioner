# The PHP Practitioner
Fully refreshing php from scratch to prepare for Laravel development, using Laracast's 'The PHP Practitioner' course.

## SQL 101 Database
```sql
CREATE DATABASE mytodos;
CREATE TABLE todos (id INTEGER PRIMARY KEY AUTO_INCREMENT,description TEXT NOT NULL,completed BOOLEAN NOT NULL);
DESCRIBE todos;
+-------------+------------+------+-----+---------+----------------+
| Field       | Type       | Null | Key | Default | Extra          |
+-------------+------------+------+-----+---------+----------------+
| id          | int(11)    | NO   | PRI | NULL    | auto_increment |
| description | text       | NO   |     | NULL    |                |
| completed   | tinyint(1) | NO   |     | NULL    |                |
+-------------+------------+------+-----+---------+----------------+
```