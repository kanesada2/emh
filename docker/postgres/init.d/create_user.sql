CREATE DATABASE IF NOT EXISTS emh;
CREATE USER 'emh'@'%' identified by 'emh';
GRANT ALL ON emh.* TO 'emh'@'%' ;