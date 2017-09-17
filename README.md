
# Magazine's Production Managament System(magmanage)
This software is a magazine production management system. Ease the exchange between publisher and production company.I wrote it in PHP.

## Install
Please install for Ubuntu as follows:
~~~
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
~~~
Push Ctrl key & D key
~~~
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
$ git clone https://github.com/namiheisan/magmanage.git
$ cd magmanage
$ sudo cp -a * /var/www/html/.
$ cd /var/www/html
$ sudo git clone https://github.com/Synchro/PHPMailer.git
~~~
using [PHPMailer](https://github.com/Synchro/PHPMailer.git) for sending mails.

## How to use
Rewrite `username` `password` `editor_address` `production_address` `magazine_name` `gmail_address` `gmail_password` in /var/www/html/config.php. Please access `http://installed machine's IP address/admin/issue_ctrl.php` with a web browser. The UI for article name management is displayed. When accessing `http://installed machine's IP address/issue_manage.php`, UI for displaying production company and publisher is displayed.
