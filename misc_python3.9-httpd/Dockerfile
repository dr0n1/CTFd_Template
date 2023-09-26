FROM httpd:2.4.54

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY files /usr/local/apache2/htdocs/
COPY start.sh /start.sh

WORKDIR /usr/local/apache2/htdocs/

RUN sed -i 's/deb.debian.org/mirrors.ustc.edu.cn/g' /etc/apt/sources.list \
	&& apt update \
	&& apt -y upgrade \
	&& apt install -y python3.9 python3-pip python3-dev make git gcc libssl-dev libxml2-dev libxslt-dev libffi-dev musl-dev tk-dev tcl-dev g++  libtool libev-dev \
	&& pip3 install -U pip -i https://pypi.tuna.tsinghua.edu.cn/simple \
	&& pip3 install --no-cache-dir -r requirements.txt -i https://pypi.tuna.tsinghua.edu.cn/simple \
	&& chmod +x /start.sh

CMD ["/start.sh"]

EXPOSE 80