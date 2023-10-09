FROM python:2.7.18-buster

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY src/ /app/
COPY start.sh /start.sh

WORKDIR /app

RUN sed -i 's/deb.debian.org/mirrors.ustc.edu.cn/g' /etc/apt/sources.list \
	&& sed -i 's/security.debian.org/mirrors.ustc.edu.cn/g' /etc/apt/sources.list \
	&& apt update \
	&& apt install -y libxml2-dev libxslt-dev libffi-dev musl-dev tk-dev tcl-dev gcc g++ make libtool libev-dev \
	&& python -m pip install -U pip -i https://pypi.tuna.tsinghua.edu.cn/simple \
	&& python -m pip install -i https://pypi.tuna.tsinghua.edu.cn/simple flask \
	&& python -m pip install -r requirements.txt -i https://pypi.tuna.tsinghua.edu.cn/simple \
	&& rm -rf /app/requirements.txt \
	&& chmod +x /start.sh

CMD ["/start.sh"]