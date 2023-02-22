First we start by connecting to our AWS ec2-instance using our git bash terminal.
Ensre that port 80 TCP is open on our security group.
Rung the script nginx.sh to installnginx on an ubuntu server.
take the public ip and check if it is properly installed on your web browser like this:
    http://23.56.65.50:80
A certain page will be displayed on your web browser to verify that your nginx is installed. Unlike the Lamp prject where we use onlya single website,in a situation where we will need to manage multiple websites we make use of nginx.
So we create a directory lemp in the /var/www directory.
    sudo mkdir /var/www/lemp
    sudo chown -R $USER:$USER /var/www/lemp
After creating the directory we open a new config file in the "sites-available"
directory. 
    sudo nano /etc/nginx/sites-available/lemp
Add the following into the new file:
   #/etc/nginx/sites-available/lemp

server {
    listen 80;
    server_name projectLEMP www.projectLEMP;
    root /var/www/lemp;

    index index.html index.htm index.php;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
     }

    location ~ /\.ht {
        deny all;
    }

}

Here’s what each of these directives and location blocks do:

listen — Defines what port Nginx will listen on. In this case, it will listen on port 80, the default port for HTTP.
root — Defines the document root where the files served by this website are stored.
index — Defines in which order Nginx will prioritize index files for this website. It is a common practice to list index.html files with a higher precedence than index.php files to allow for quickly setting up a maintenance landing page in PHP applications. You can adjust these settings to better suit your application needs.
server_name — Defines which domain names and/or IP addresses this server block should respond for. Point this directive to your server’s domain name or public IP address.
location / — The first location block includes a try_files directive, which checks for the existence of files or directories matching a URI request. If Nginx cannot find the appropriate resource, it will return a 404 error.
location ~ \.php$ — This location block handles the actual PHP processing by pointing Nginx to the fastcgi-php.conf configuration file and the php7.4-fpm.sock file, which declares what socket is associated with php-fpm.
location ~ /\.ht — The last location block deals with .htaccess files, which Nginx does not process. By adding the deny all directive, if any .htaccess files happen to find their way into the document root ,they will not be served to visitors.

Activate your configuration by linking to the config file from Nginx’s sites-enabled directory:
sudo ln -s /etc/nginx/sites-available/lemp /etc/nginx/sites-enabled/

The above command tells nginx to use this configuration file next time,also we will need to disable the default config file in use.

    sudo unlink /etc/nginx/sites-enabled/default

    sudo systemctl reload nginx

Next,we need to create an index.html filein our /var/www/lemp directory,this will be the page to be displayed on our website.
add the index.php into the /var/www/lemp directory to display our php page.
To view the default page which is our index.html just use http://<ip-addr>:80
but for the php use  http://<ip-addr>/index.php toview the php page.
