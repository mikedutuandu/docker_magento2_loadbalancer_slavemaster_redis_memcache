#!/bin/bash
cd /tmp && tar -xzvf mage2.sql.tar.gz
mysql -u root -proot mage2 < /tmp/mage2.sql

#Config Slave
mysql -u root -proot -e "grant all privileges on *.* to 'root'@'%' identified by 'root';"

MASTER_LOG_FILE=`mysql -u user_slave -puser_slave -h mysql_master -e "show master status\G;" | grep -E "File:\s" | sed 's/.*: //'`
MASTER_LOG_POS=`mysql -u user_slave -puser_slave -h mysql_master -e "show master status\G;" | grep -E "Position:\s" | sed 's/.*: //'`

mysql -u root -proot -e "CHANGE MASTER TO MASTER_HOST='mysql_master',MASTER_USER='user_slave',MASTER_PASSWORD='user_slave',MASTER_LOG_FILE='$MASTER_LOG_FILE',MASTER_LOG_POS=$MASTER_LOG_POS;"
mysql -u root -proot -e "START SLAVE;"
mysql -u root -proot -e "SHOW SLAVE STATUS\G;"
