# Enable Server Side Includes (SSI) in your local copy


### MAMP > Preferences > Web-Server

**Web Server:** Apache

**Document Root:** _username_ > _Sites_ > _yoursite_



### /Applications/MAMP/conf/apache/httpd.conf

##### Uncomment following lines
```
    #AddType text/html .shtml
    #AddOutputFilter INCLUDES .shtml
```
##### Enable more extensions
```
    AddOutputFilter INCLUDES .shtml .html .htm .inc
```    
    
### Add following lines into *.htaccess* in your local directory

```
AddType text/html .shtml
AddHandler server-parsed .html
AddHandler server-parsed .htm
AddHandler server-parsed .shtml
AddHandler server-parsed .inc
Options Indexes FollowSymLinks Includes

```

### _SSI looks like:_

```html
<!--#include virtual="/path-to-your/file.inc"-->
```


