<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Vacca
#### Video Demo: https://youtu.be/EVDUeadmxVQ
#### Description: About covid19 infos and vaccine form

# Getting Started
## features
- auth
    - login (laravel ui)
    - register (laravel ui)
- news
- covid infections
- vaccination form(user only)
- Admin Dashboard
    - dashboard(chart)
    - view vaccination form data
    - save vaccination form data as pdf format
## Installation
Check the official laravel installation guide for server requirment.<a href="https://laravel.com/docs/9.x/installation">Document<a>
#### Download or Clone the repo
<a href="https://github.com/NyiZinThant/Vacca/archive/refs/heads/main.zip">Download</a> here
or run this command on terminal

``` 
git clone https://github.com/NyiZinThant/Vacca.git 
```

Extract Downloaded Repo(zip)

if you clone the repo you can skip

Swtich to the repo

``` 
cd Vacca
 ```

install all the dependencies using composer and npm

```
composer install 
npm install 
```

Run ` npm run dev `  twice

Copy the example env file and make the required configuration changes in the .env file

```
cp .env.example .env 
```
Generate an app encryption key
```
php artisan key:generate
```

#### Set the database connection in .env before migrating

Migrate and Seed

```
 php artisan migrate --seed 
```
#### Start the local development server
```
 php artisan serve 
```

#### Now you can access the server at http://localhost:8000
## User Guide
if you want to login as normal user 
    
You can register new account
    
or
    
If you want to login as admin
    
I've already added admin account with seeding
    
### Login with this email and password
email: <b>admin@gmail.com</b>
    
password: <b>password</b>
