# Further Information Soon


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

curl -X POST -F 'name=Cesar' -F 'phone=11-95287-4246' -F 'email=bruno.cesar.paula@usp.br' http://localhost/user/
{"status":"OK","id":124}


## PUT Examples

curl -X PUT -F 'phone=11-91234-8765' http://localhost/user/123
{"status":"OK","id":123}


## DELETE Examples

curl -X "DELETE" http://localhost/user/2
{"nome":"Cesar","status":"OK"}

curl -X "DELETE" http://localhost/user/2
{"status":"FAIL","reason":"User not found"}

