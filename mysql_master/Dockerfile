FROM mysql

RUN apt-get update

RUN apt-get install nano

ENV MYSQL_DATABASE=mage2 \
    MYSQL_ROOT_PASSWORD=root

COPY ./config-file.cnf /etc/mysql/conf.d/config-file.cnf

COPY ./mage2.sql.tar.gz /tmp/mage2.sql.tar.gz

COPY ./setup.sh /tmp/setup.sh

RUN chmod 0644 /etc/mysql/conf.d/config-file.cnf

RUN chmod +x /tmp/setup.sh

EXPOSE 3306

#CMD /tmp/setup.sh

RUN service mysql restart