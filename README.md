# CTFd_Template

适用于CTFd等支持动态flag的平台的Docker部署模板

默认使用`$FLAG`传递flag，如果是其他平台就手动替换下start.sh中的`$FLAG`即可

基础镜像尽量全部使用官方镜像，保证稳定性

更详细的部署过程可以参考[ctf平台搭建与出题指南](https://www.lewiserii.top/%E7%AB%9E%E8%B5%9B/ctf%E5%B9%B3%E5%8F%B0%E6%90%AD%E5%BB%BA%E4%B8%8E%E5%87%BA%E9%A2%98%E6%8C%87%E5%8D%97.html#%E5%8A%A8%E6%80%81flag%E9%A2%98%E7%9B%AE%E9%83%A8%E7%BD%B2)

## pwn

包含`ubuntu16`，`ubuntu18`，`ubuntu20`，`ubuntu22`四个基础镜像模板

**如何使用**  
1：将bin目录下的test替换成你的附件  
2：修改ctf.xinetd文件中的server_args，将test替换成你的附件名  
3：构建镜像：`docker build -t <镜像名> .`


## web

### apache-php

**如何使用**  
1：src中存放题目代码  
2：修改`start.sh`中flag导入的方式和位置，使用echo或sed（可选，根据题目要求来）


### apache-php-mysql

**如何使用**  
1：src中存放题目代码，db.sql是需要导入数据库的数据，也需要放在src目录下，导入完成会自动删除  
2：可以根据题目要求来修改`start.sh`中flag导入方式和位置，默认更新`update ctf.flag set flag='$FLAG';`







## misc

包含`python2.7-alpine`，`python3.8-alpine`，`python3.9-httpd`三个镜像模板  
利用`http.server`，`SimpleHTTPServer`和`httpd`启动一个web服务用来下载附件


**如何使用**  
1：files\challenges.py修改为出题的脚本，在files\requirements.txt中添加需要安装的模块


**注意事项**  
1：flag值需要从`/flag`读取  
2：出题后生成的附件需要套一层压缩包以便访问自动下载，zip需要命名为`attachment.zip`  
3：尽量在脚本结束时删除无用的文件，以防非预期

```python
flag=open('/flag').read()
....
....
....
....
....
z=zipfile.ZipFile('attachment.zip','w')
z.write('附件')
z.close()
```




