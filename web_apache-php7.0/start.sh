#!/bin/bash 

#echo $FLAG > /flag
sed -i "s/flag_here/$(echo $FLAG|base64)/g" /var/www/html/js/script.js
export FLAG=not_flag
FLAG=not_flag

#chmod 744 /flag

service apache2 start

tail -f /dev/null