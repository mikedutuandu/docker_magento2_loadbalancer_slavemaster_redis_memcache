#!/bin/bash
cd /tmp && tar -xzvf mage2.sql.tar.gz
mysql -u root -proot mage2 < /tmp/mage2.sql

#Config Master
mysql -u root -proot -e "grant all privileges on *.* to 'root'@'%' identified by 'root';"
mysql -u root -proot -e "CREATE USER 'user_slave'@'%' IDENTIFIED BY 'user_slave';"
mysql -u root -proot -e "GRANT REPLICATION SLAVE ON *.* TO 'user_slave'@'%' IDENTIFIED BY 'user_slave';"
