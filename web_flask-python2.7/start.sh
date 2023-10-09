#!/bin/bash 

echo $FLAG > /flag
chmod 744 /flag
export FLAG=not_flag
FLAG=not_flag

cd /app
flask run -h 0.0.0.0 -p 80
#flask --debug run -h 0.0.0.0 -p 80
