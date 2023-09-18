# CTFd_Template

适用于CTFd等支持动态flag的平台的Docker部署模板

默认使用`$FLAG`传递flag，如果是其他平台就手动替换下start.sh中的`$FLAG`即可

## pwn

包含`ubuntu16`，`ubuntu18`，`ubuntu20`，`ubuntu22`四个基础镜像模板

**如何使用**

1：将bin目录下的test替换成你的附件
2：修改ctf.xinetd中的server_args


构建镜像：docker build -t <镜像名> .
本地运行镜像测试：docker run -itd -p <暴露端口>:9999 <镜像名> /start.sh


**eg.**

docker build -t testpwn .
docker run -itd -p 4567:9999 testpwn /start.sh
nc xxxx 4567


## web




## misc

包含`python2.7-alpine`，`python3.8-alpine`，`python3.9-httpd`三个基础镜像模板

利用`http.server`，`SimpleHTTPServer`和`httpd`启动一个web服务用来下载附件


**如何使用**

1：files\challenges.py修改为出题的脚本，在files\requirements.txt中添加需要安装的模块
2：出题后生成的附件最好在最外面套一层正常的zip以便下载



