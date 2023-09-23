import random
import pyminizip
import os
from PIL import Image,ImageDraw,ImageOps


f=open('/flag')
flag=f.read()

a=Image.new("RGB",(300,20))
w,h=a.size
d=ImageDraw.Draw(a)
d.text((0,0),flag,fill=255)
a = ImageOps.invert(a)
a.save('1.png')


password = ''.join(random.choice('0123456789') for _ in range(8))
pyminizip.compress("1.png", None, "attachment.zip", password, 5)
os.remove("1.png")