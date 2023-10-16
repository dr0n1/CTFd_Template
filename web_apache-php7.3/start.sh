#!/bin/bash

echo $FLAG > /flag
export FLAG=not_flag
FLAG=not_flag

chmod 744 /flag

service apache2 start

tail -f /dev/null