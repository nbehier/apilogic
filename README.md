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

Execute the `check.php` script from the command line (if [mamp extension missing][2] or [intl particular missing][3] or [this one][4]):

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

  php app/console fos:user:create
  php app/console fos:user:promote

3) Browsing the Apilogic
--------------------------------

To see a real-live Symfony page in action, access the following page:

    http://apilogic.loc/app_dev.php/demo/hello/Fabien
    http://apilogic.loc/app_dev.php/admin/dashboard (admin::password)

4) Implement
--------------------------------

Begin your [code learning][5] 
Do not forget [this part][6]

[1]:  http://getcomposer.org/
[2]:  http://stackoverflow.com/a/14135950
[3]:  http://thoomtech.com/post/15366294744/mamp-intl-lion
[4]:  http://sunny.chotai.uk.com/?p=2
[5]:  http://symfony.com/doc/master/book/page_creation.html
[6]:  http://sonata-project.org/bundles/admin/2-1/doc/reference/security.html#usage