FROM mysql:8.0.28
LABEL maintainer="ucan-lab <yes@u-can.pro>"

ENV TZ=UTC \
    MYSQL_DATABASE=lesson \
    MYSQL_USER=lesson \
    MYSQL_PASSWORD=secret \
    MYSQL_ROOT_PASSWORD=secret

COPY ./my.cnf /etc/my.cnf
