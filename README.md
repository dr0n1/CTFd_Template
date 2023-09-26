# CTFd_Template

适用于CTFd等支持动态flag的平台的Docker部署模板

默认使用`$FLAG`传递flag，如果是其他平台就手动替换下start.sh中的`$FLAG`即可

基础镜像尽量全部使用官方镜像，保证稳定性

## pwn

包含`ubuntu16`，`ubuntu18`，`ubuntu20`，`ubuntu22`四个基础镜像模板

**如何使用**  
1：将bin目录下的test替换成你的附件  
2：修改ctf.xinetd文件中的server_args，将test替换成你的附件名  
3：构建镜像：`docker build -t <镜像名> .`


## web

### apache-php

包含`php7.0`等环境

**如何使用**  
1：src中存放题目代码  
2：修改`start.sh`中flag导入的方式，使用echo或sed（可选，根据题目要求来）


### apache-php-mysql

包含`php5.4`，`php7.4`等环境

**如何使用**  
1：src中存放题目代码，db.sql是需要导入数据库的数据，也需要放在src目录下，导入完成会自动删除  
2：可以根据题目要求来修改flag导入位置，默认更新`update ctf.flag set flag='$FLAG';`







## misc

包含`python2.7-alpine`，`python3.8-alpine`，`python3.9-httpd`三个镜像模板  
利用`http.server`，`SimpleHTTPServer`和`httpd`启动一个web服务用来下载附件


**如何使用**  
1：files\challenges.py修改为出题的脚本，在files\requirements.txt中添加需要安装的模块


**注意事项**  
1：flag值需要从`/flag`读取  
2：出题后生成的附件需要套一层压缩包以便访问自动下载，zip需要命名为`attachment.zip`  
3：目前只支持使用python2/3运行出题脚本

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




