# Further Information Soon

## My first touchs in Symfony
This test shows mainly the adaptability to move to any environment in short spaces of time

There's a lot more of things that should have been made here, break the UserController in two class, one with real controller job, and another to manage the display of jsons and exceptions (that would have allowed a better use of unit test)

But given the time being, was a good Job


## The project environment
This test is running in a NGINX + PHP 7.0 + Symfony 2.3 + MYSQL 5.6

The main config files will be placed just for viewing purposes under the root directory

The database schema is:
- from the mysql database
- "schema.sql"

The php-fpm config is:
- from "/etc/php/7.0/fpm/pool.d/www.conf"
- in "php-fpm.www.conf"

The nginx config is in:
- from "/etc/nginx/sites-enabled/default"
- in "nginx.enabled"


## Tests
Like I said above, the unit's test is a bit silly, but at least the functional test can be useful to see the job running

- just run "phpinit" in the project root and it's done


# Use examples

## GET Initial Examples

curl -X "GET" http://localhost/user/1
{"validate":false,"status":"OK","id":"1","name":"Bruno","phone":"11-95287-4246","email":"mbrunocesar@gmail.com"}

curl -X "GET" http://localhost/user/2
{"validate":false,"status":"OK","id":"2","name":"Cesar","phone":"11-95287-4246","email":"bruno.cesar.paula@usp.br"}

curl -X "GET" http://localhost/user/3
{"validate":false,"status":"FAIL","reason":"User not found"}

curl -X "GET" http://localhost/user/123
{"validate":true,"status":"OK","id":"123","name":"Common User","phone":"11 98765-4321","email":"nowhere@noplace.com"}


## POST Examples

curl -X POST -F 'name=Cesar 2' -F 'phone=11-95287-4246' -F 'email=bruno.cesar.paula@usp.br' http://localhost/user/
{"status":"OK","id":124}


## PUT Examples

curl -X "PUT" -d 'phone=11-91234-8765' http://localhost/user/1
{"status":"OK"}


## DELETE Examples

curl -X "DELETE" http://localhost/user/2
{"nome":"Cesar","status":"OK"}

curl -X "DELETE" http://localhost/user/2
{"status":"FAIL","reason":"User not found"}

