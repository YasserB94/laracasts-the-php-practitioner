# The PHP Practitioner
Fully refreshing php from scratch to prepare for Laravel development, using Laracast's 'The PHP Practitioner' course.

## SQL 101 Database
Notes on created database to follow along the course.

### Creating the table
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
### Adding data
```sql
INSERT INTO todos (description,completed) VALUES('Complete The PHP Practitioner course',false);
INSERT INTO todos (description,completed) VALUES('Complete Laravel 8 course',false);
SELECT * FROM todos;
+----+--------------------------------------+-----------+
| id | description                          | completed |
+----+--------------------------------------+-----------+
|  1 | Complete The PHP Practitioner course |         0 |
|  2 | Complete Laravel 8 course            |         0 |
+----+--------------------------------------+-----------+
```
### Using A Tool
All of the above is easier done with tools like:
- SequelPro //FREE OPEN SOURCE -- Used by course
    - !!! SequelPro is no longer maintained. Install Sequel Ace instead
        - If you are usign my notes as documentation and need a reason: It has darkmode ❤️‍🔥
- Querious // ? 
- Navicat // ?
- Datagrip //PAID

TODO:: C
