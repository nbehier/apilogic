ApiLogic 2
==========

1) Installing
-------------

As Symfony uses [Composer][1] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `install` or `update` composer command:
    php composer.phar install

2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `app/config/parameters.yml` file and update your database information.

Update your `/etc/hosts` and add
    127.0.0.1 apilogic.loc

Update your `/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf` with

    #### APILOGIC ####
    <VirtualHost *:80>
      ServerName apilogic.loc
      DocumentRoot "/Applications/MAMP/htdocs/apilogic/web"
      DirectoryIndex index.php
      <Directory "/Applications/MAMP/htdocs/apilogic/web">
        AllowOverride All
        Allow from All
      </Directory>
    </VirtualHost>

Check your folder `app/logs`and `app/cache` permissions

Then, go to `http://apilogic.loc/config.php`

And begin your [code learning][2] 

3) Browsing the Apilogic
--------------------------------

To see a real-live Symfony page in action, access the following page:

    web/app_dev.php/demo/hello/Fabien


[1]:  http://getcomposer.org/
[2]:  http://symfony.com/doc/master/book/page_creation.html