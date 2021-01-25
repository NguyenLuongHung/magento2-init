#Add this two line to setup:install
--elasticsearch-host=127.0.0.1 \
--elasticsearch-port=9200 \

#ex:
php bin/magento setup:install \
    --base-url=http://localhost:8011 \
    --db-host=mysql \
    --db-name=magento_db \
    --db-user=magento \
    --db-password=secret \
    --backend-frontname=admin_mn \
    --admin-firstname=admin \
    --admin-lastname=admin \
    --admin-email=admin@example.com \
    --admin-user=admin \
    --admin-password=admin123 \
    --language=en_US \
    --currency=USD \
    --timezone=America/Chicago \
    --use-rewrites=1 \
    --elasticsearch-host=elasticsearch \
    --elasticsearch-port=9200