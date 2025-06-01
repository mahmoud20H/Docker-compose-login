# Docker-compose-login
Create Docker compose LEMP-stack using PHP, nginx, mariadb 
# Docker LAMP Compose Login Project

This project is a Docker Compose setup for a LAMP stack with a login system.


## Setup Instructions

### 1. Environment Variables

Before running the project, you **must create and configure a `.env` file** in the root directory.

Example `.env` content:
MYSQL_ROOT_PASSWORD=your_root_password
MYSQL_USER=your_database_user
MYSQL_PASSWORD=your_database_user_password
MYSQL_DATABASE=your_database_name

###2. Configuration in PHP Files
Some configuration variables, such as the database username, password, and database name, need to be updated in the following PHP files inside the html directory:

login.php

register.php

welcome.php

Make sure to update the database connection parameters in these files to match the values set in your .env file.

