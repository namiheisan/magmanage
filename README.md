# magmanage
Magazine's Production Managament System

This software is a magazine production management system. 
Ease the exchange between publisher and production company.
I wrote it in PHP. 

admin / issue_ctrl.php is the article name registration screen.
Use issue_manage.php to exchange production company and publisher.

Please install for Ubuntu as follows:

$ sudo apt update
$ sudo apt upgrade
$ sudo apt install apache2 php php-pgsql libapache2-mod-php postgresql php-dev git php-mbstring
$ sudo phpenmod pdo_pgsql
$ sudo systemctl restart apache2
$ sudo su - postgres
$ adduser username
$ createuser username -s
$ createdb magdb
$ psql magdb
# alter user username with password 'password';
# \q
Push Ctrl key & D key
$ sudo su - username
$ psql magdb
# create table article (
> valid int,
> number int not null,
> issue text,
> status int,
> charge int,
> place int,
> page int,
> pkey serial primary key
> );
# \q
$ exit

$ sudo git clone https://github.com/Synchro/PHPMailer.git
