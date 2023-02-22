To have a web server we also need a database server,we can either create a new instance and install mySQL on it or we can just go ahead to install it on the nginx server. In this case we will carry out the installation on the nginx server to manage cost,but in real life scenerios its safer to install the database software on a different server.
Setup the mysql server and carry out all necessary configuration.
We are going to create a simple test database "to do list" snd configure access to it.The Nginx service will be allowed to fetch data from the db and display it.
We will create a database named "simple-database",we will also create a new userand grant him access to this db and set the user's password too.
 The whole procedure on how we created a database is in the https://github.com/marviigrey/NGINX-web-server-project/tree/main/MYsql/cmd.mysql 
 


