# wordpress-base

Base deployment for WordPress, Composer and Phing using the WordPress Roots theme.

## Dependencies
* Composer (http://getcomposer.org/)
* Phing (http://www.phing.info/trac/wiki/Users/Download)
* Bower (http://bower.io/)

## Installation

This repository has been registered with packagist. To get a base install of the project run the following command:  

    $ composer create-project 76design/wordpress-base <folder_name>

This will run composer install, installing any plugins (ex. akimset) or vendor packages and then the roots theme.  Then it runs any post create commands, which in this case will install WordPress.

Once complete, run phing rename to rename your theme directory and project name where applicable.

    $ phing init-project

Next step is to run a phing build.

    $ phing build

This will run composer install, bower install and compass compile.

Finally, create a mode.php file in the includes directory that looks like the following:

    <?php
    	define ("MODE", "config_name");

config_name will match your configuration name from the includes/config.php file (ex: development), which should also be updated.


    $config['config_name'] = array_merge($config['development'], array(
    		'DB_HOST'   	=> 'localhost',
    		'DB_NAME' 		=> 'db_name',
    		'DB_USER' 		=> 'root',
    		'DB_PASSWORD' 	=> 'root'
    	)
    );
