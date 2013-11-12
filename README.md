# wordpress-base

Base deployment for WordPress, Composer and Phing using the WordPress Roots theme.


## Dependencies
* Composer (http://getcomposer.org/)
* Phing (http://www.phing.info/trac/wiki/Users/Download)
* Bower (http://bower.io/)

## Installation
Run composer create project.

    $ composer create-project

This will run composer install, installing any plugins (ex. akimset) or vendor packages and then the roots theme.  Then it runs any post create commands, which in this case will install WordPress.

Once complete, run phing rename to rename your theme directory and project name where applicable.

    $ phing rename

Finally, run a phing build.

    $ phing build

This will run composer install, bower install and compass compile.