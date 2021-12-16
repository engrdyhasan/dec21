
<?php
sudo -i
sudo su
ip a
ip -a
apt update && upgrade
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
systemctl status apache2
apache2 -v
apachectl -M
// **********
ssh root@45.33.111.137
// **********
cat /etc/ *release*
apt install vagrant
vagrant init
vagrant global-status
vagranty ssh
ufw status
apt full-upgrade


MYSQL:-
mysql_secure_installation 

 apt update
sudo apt install lamp-server^ 
sudo apt install php apache2 php-mysql mysql-server lipapache2-mod-php phpmyadmin lamp-server^ 
sudo mysql_secure_installation

sudo mysql_secure_installation

PASWRD = *963.0258/aA
mysql -u sammy -p
CREATE USER 'sammy'@'localhost' IDENTIFIED BY 'password';
systemctl status mysql.service
sudo mysqladmin -p -u sammy version
FLUSH PRIVILEGES;
