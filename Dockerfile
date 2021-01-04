FROM prestashop/prestashop:1.7.6.5

ARG DATABASE_HOST=mariadb
ARG DATABASE_PORT=''
ARG DATABASE_NAME=prestashop
ARG DATABASE_USER=root
ARG DATABASE_PASSWORD=root
ARG DATABASE_PREFIX=ps_

COPY src .

RUN sed -i "s|'mariadb'|'${DATABASE_HOST}'|g" ./app/config/parameters.php
RUN sed -i "s|''|'${DATABASE_PORT}'|g" ./app/config/parameters.php
RUN sed -i "s|'prestashop'|'${DATABASE_NAME}'|g" ./app/config/parameters.php
RUN sed -i "s|'root'|'${DATABASE_USER}'|g" ./app/config/parameters.php
RUN sed -i "s|'root'|'${DATABASE_PASSWORD}'|g" ./app/config/parameters.php
RUN sed -i "s|'ps_'|'${DATABASE_PREFIX}'|g" ./app/config/parameters.php

RUN mkdir ssl
COPY ./docker/ssl/000-default.conf /ssl/000-default.conf
COPY ssl.sh .
EXPOSE 80
EXPOSE 443
ENTRYPOINT ["bash", "ssl.sh"]