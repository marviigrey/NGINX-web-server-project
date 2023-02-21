On this project we will be completing an nginx high performance server using:
Linux
nginx
MySQL
and PHP,php processor.

Our first task is to set up a web server which is nginx on an AWS Ec2-instance.
After this we install a database management system which is MySQL and proceed with all the necessary configurations needed. After that we proceed to installing and configuring the php software.
While Apache embeds the PHP interpreter in each request, Nginx requires an external program to handle PHP processing and act as a bridge between the PHP interpreter itself and the web server. This allows for a better overall performance in most PHP-based websites, but it requires additional configuration. You’ll need to install php-fpm, which stands for “PHP fastCGI process manager”, and tell Nginx to pass PHP requests to this software for processing. Additionally, you’ll need php-mysql, a PHP module that allows PHP to communicate with MySQL-based databases. Core PHP packages will automatically be installed as dependencies.
Unlike the Lamp prject where we use onlya single website,in a situation where wewill need to manage multiple websites we make use of nginx.
