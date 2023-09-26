#!/bin/sh

# Dynamic flag
echo $FLAG > /flag
export FLAG=not_flag
FLAG=not_flag

python2 /tmp/challenges.py


if [ -f /tmp/requirements.txt ]; then
    rm -rf /tmp/requirements.txt
fi

if [ -f /tmp/challenges.py ]; then
    rm -rf /tmp/challenges.py
fi

python2 -m SimpleHTTPServer 80 --directory /tmp/