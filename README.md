# unittest

These are unit tests for demo purpose.

Week One.
Get Composer:
linux.
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-14-04
OS X:
http://www.abeautifulsite.net/installing-composer-on-os-x/
Windows:
https://getcomposer.org/doc/00-intro.md#installation-windows

Add composer to path.
echo 'export PATH="$PATH:~/.composer/vendor/bin"' >> ~/.bash_profile
source ~/.bash_profile

Install phpunit globally:
composer global require "phpunit/phpunit=5.0.*"

cd /path/to/directory
git clone https://github.com/joshnykamp/unittest.git
composer install

Assertions:
assertEquals()
assertTrue()
assertArrayHasKey()








