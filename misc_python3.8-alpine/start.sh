#!/bin/sh

# Dynamic flag
echo $FLAG > /flag
export FLAG=not_flag
FLAG=not_flag

python3 /tmp/challenges.py


if [ -f /tmp/requirements.txt ]; then
    rm -rf /tmp/requirements.txt
fi

if [ -f /tmp/challenges.py ]; then
    rm -rf /tmp/challenges.py
fi

if [ -f /tmp/tmpmz8ogtue ]; then
    rm -rf /tmp/tmpmz8ogtue
fi

python3 -m http.server 80  --directory /tmp/