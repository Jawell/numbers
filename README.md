# Numeral converter
## Apache
Configure virtual host DocumentRoot to **public** directory of project, set **AllowOverride all** and **Require all granted**. Set necessary permissions for virtual host directory
# Directories
Project have directory:
- `public`
- `application`

`public` - start point of application, have public and index files
`application` - MVC pattern
In this project Model doesn't have DB connection, so Model in role converter and Model doesn't have abstract core class
