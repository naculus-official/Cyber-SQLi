# Cyber-SQLi

No Database(SQL) injection protection and Database(SQL) injection protection example walkthrough

# Requirements

> # You need to install these on your computer in order to proceed with this installation repository.

- [Git](https://git-scm.com/downloads)
- [Vscode](https://code.visualstudio.com/download)

# How to run
- Clone the repository
- Open Vscode
```bash
git clone https://github.com/naculus-official/Cyber-SQLi
cd Cyber-SQLi
code .
```
- Open the terminal in Vscode
- Run the following command
> 1. Run SQL server
```bash
docker-compose up -d
```
> 1. For SQL-injection
```bash
# For SQL-injection
cd SQL-injection
php -S localhost:8080
```
> 2. For SQL-injection-protection
```
cd Prevent-SQL-injection
php -S localhost:8043
```
- Open the browser and type `localhost:8080` for SQL-injection and `localhost:8081` for SQL-injection-protection
> [Prevent SQL injection](http://127.0.0.1:8081)  
> [None prevent SQL injection](http://127.0.0.1:8043)  
- You can see the output in the browser

# SQL template
> user
> | id | username | password |
> |----|----------|----------|
> | 1  | root     | toor     |
<!-- > | 2  | user     | user     |
> | 3  | test     | test     |
> | 4  | test1    | test1    | -->


# build-in package
1. php 8.2.22
2. mariadb 11.4.3