# CodeIgniter X Deployer

Boilerplate Codeigniter auto deploy use deployer.org

### Getting started

Requires to run.

 - PHP version 7
 - Codeigniter version 3 
 - Composer 
 - Deployer 

### Clone this repository
Open up a terminal in your project directory and run:
```sh
git clone git@github.com:afriex/ci_deployer.git
```
run:
```
composer install
```
and run
```
php vendor/bin/dep init
```
You can edit files

 - **deployer-example.php** *rename* to **deployer.php**
 - **.env-example** *rename* to **.env**
 
and run
```
php vendor/bin/dep deploy [stage]
``` 

after succes deploy you can edit file **.env** on your server 
```
repo/[application-name]/shared/.env
```

### Reference
- [deployer.org](https://deployer.org/docs/installation.html)
- [composer](https://getcomposer.org/)
- [codeigniter](https://codeigniter.com/)
