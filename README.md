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
> 1. Run PHP server
```bash
http
or
phpserver
or
phps
```
- Open the browser and type [localhost:8080](http://localhost:8080)
- You can see the login form in the browser

# SQL template
> user list
> |    command    | username | password |         email        |
> |---------------|----------|----------|----------------------|
> | mysql -uroot  | root     |          |                      |
> |               | admin    | admin    | admin@localhost      |
> |               | jack     | minejack | inotgoing@hijack |
> |               | user     | 123456   | user@localhost       |


# build-in package
1. php 8.2.22
2. mariadb 11.4.3