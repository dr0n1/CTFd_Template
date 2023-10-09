FROM python:3.8-alpine

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY files /tmp/

WORKDIR /tmp

RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories \
	&& apk update \
	&& apk upgrade \
	&& apk add libxml2-dev libxslt-dev libffi-dev musl-dev libgcc openssl-dev jpeg-dev zlib-dev freetype-dev lcms2-dev openjpeg-dev tiff-dev tk-dev tcl-dev gcc g++ make libtool libev-dev \
	&& pip3 install -U pip -i https://pypi.tuna.tsinghua.edu.cn/simple \
	&& pip3 install -r requirements.txt -i https://pypi.tuna.tsinghua.edu.cn/simple

COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]

EXPOSE 80