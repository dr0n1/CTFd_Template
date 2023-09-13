1：将bin目录下的test替换成你的附件
2：修改ctf.xinetd中的port和server_args


构建镜像：docker build -t <镜像名> .
运行镜像（本地）：docker run -itd -p <暴露端口>:9999 <镜像名> /start.sh


eg.
docker build -t testpwn .
docker run -itd -p 4567:9999 testpwn /start.sh
nc xxxx 4567