# PHP Database Integration

## Set up
### Pre-requesites
- [XAMPP](https://www.apachefriends.org)

### Database
- Once XAMPP is installed, run all the servers
- open http://localhost/phpmyadmin/
- Create a database with the following information:

```
dbname: demo
table: User
columns:
  id - int (2)
  username - varchar (30)
  password - varchar (30)
  first_name - varchar (30)
  last_name - varchar (30)
```

### Running
- download this repository
- locate your htdocs folder
  - Windows: C:\xampp\htdocs
  - MacOS: Applications/XAMPP/xamppfiles/htdocs
- move the project file inside htdocs
- go to http://localhost/php_db_demo (or your folder name)
