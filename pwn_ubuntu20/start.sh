#!/bin/sh

# whale Dynamic flag
echo $FLAG > /home/ctf/flag
chown root:ctf /home/ctf/flag
chmod 640 /home/ctf/flag
export FLAG=not_flag
FLAG=not_flag

# DO NOT DELETE
/etc/init.d/xinetd start;
sleep infinity;