# PHP Parsing Domain Or Subdomain
Simple PHP code for parsing domains, automatically fetching the TLD of the domain or subdomain.
```php
function get_domain($url) {
  $str = '/^(?:https?.\/\/)?(?:[^@\/\n]+@)?(?:)?([^:\/?\n]+).*/m';
  preg_match_all($str, $url, $matches, PREG_SET_ORDER, 0);
  foreach ($matches as $key => $value) {
    //var_dump($value);
    return $value[1];
  }
}
```
# Usage: result of parsing domain
> Use the following function: ``get_domain``
```php
get_domain("https://www.domain.com/login/admin.php?login&username=admin&password=admin&submit=login");
```
Results of parsing domains, extracting domains and subdomains.
```php
echo get_domain("https://www.domain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // www.domain.com
echo get_domain("https://domain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // domain.com
echo get_domain("http://www.domain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // www.domain.com
echo get_domain("http://domain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // domain.com
echo get_domain("www.domain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // www.domain.com
echo get_domain("domain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // domain.com
echo get_domain("www.dom-ain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // www.dom-ain.com
echo get_domain("dom-ain.com/login/admin.php?login&username=admin&password=admin&submit=login"); // dom-ain.com

echo get_domain("https://www.domain.com/demo/assets/css/"); // www.domain.com
echo get_domain("https://domain.com/demo/assets/css/"); // domain.com
echo get_domain("http://www.domain.com/demo/assets/css/"); // www.domain.com
echo get_domain("http://domain.com/demo/assets/css/"); // domain.com
echo get_domain("www.domain.com/demo/assets/css/"); // www.domain.com
echo get_domain("domain.com/demo/assets/css/"); // domain.com
echo get_domain("www.dom-ain.com/demo/assets/css/"); // www.dom-ain.com
echo get_domain("dom-ain.com/demo/assets/css/"); // dom-ain.com

echo get_domain("https://www.domain.com"); // www.domain.com
echo get_domain("https://domain.com"); // domain.com
echo get_domain("http://www.domain.com"); // www.domain.com
echo get_domain("http://domain.com"); // domain.com
```
# Donations for developers: https://paypal.me/zidansec
