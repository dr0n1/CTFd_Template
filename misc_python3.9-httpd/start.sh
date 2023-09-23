#!/bin/sh

# Dynamic flag
echo $FLAG > /flag
export FLAG=not_flag
FLAG=not_flag

python3 /usr/local/apache2/htdocs/challenges.py

if [ -f /usr/local/apache2/htdocs/requirements.txt ]; then
    rm -rf /usr/local/apache2/htdocs/requirements.txt
fi

if [ -f /usr/local/apache2/htdocs/challenges.py ]; then
    rm -rf /usr/local/apache2/htdocs/challenges.py
fi

python3 -m http.server 80  --directory /usr/local/apache2/htdocs/