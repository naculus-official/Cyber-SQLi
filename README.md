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