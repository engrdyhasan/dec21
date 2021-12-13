<?php
sudo apt update && upgrade
php -v
sudo apt-get install php8.0

which apache2
sudo service apache2 status
sudo service apache2 start
systemctl status apache2.service
code /etc/hosts
sudo mkdir -p /var/www/test
sudo chown -R $USER:$USER /var/www/test
sudo chmod -R 755 /var/www/test
touch /var/www/test/index.php
code /var/www/test/index.php

<?php
echo phpinfo();
?>

sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/test.dev.conf
code /etc/apache2/sites-available/test.dev.conf
sudo a2ensite test.dev.conf
systemctl reload apache2

ln -s /var/www /home/engrdy/Sites/www
****************************************************
cat /etc/*release*/
sudo su
apt update
ip -a
ip a
apt-get install lamp-server^
// ********
cd Desktop/
apt install vim
php -S localhost:4000





MYSQL:-
sudo apt update
sudo apt install mysql-server
sudo mysql_secure_installation

sudo mysql_secure_installation

PASWRD = *963.0258/aA
mysql -u sammy -p
CREATE USER 'sammy'@'localhost' IDENTIFIED BY 'password';
systemctl status mysql.service
sudo mysqladmin -p -u sammy version
FLUSH PRIVILEGES;
