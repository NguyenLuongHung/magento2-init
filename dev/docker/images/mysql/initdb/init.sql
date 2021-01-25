# Create Databases
CREATE DATABASE IF NOT EXISTS `magento_db`;

# Create user and grant rights
FLUSH PRIVILEGES;
CREATE USER 'bidd'@'%' IDENTIFIED BY 'bivip123';
GRANT ALL ON magento_db.* TO 'bidd'@'%';