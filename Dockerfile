FROM kovey/cron-client:1.0
MAINTAINER kovey "koveysha@vip.qq.com"
COPY ./src /home/cron/src
COPY ./vendor /home/cron/vendor
COPY ./start.php /home/cron/start.php
WORKDIR /home/cron
RUN mkdir conf
CMD [""]
