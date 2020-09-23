# How to run
* docker-compose exec php-fpm bash
* composer install
* ///php bin/console doctrine:database:create
* mkdir -p config/jwt
* openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096 ОБЯЗАТЕЛЬНО УКАЗЫВАЕМ ПАРОЛЬ ТАКОЙ ЖЕ КАК ЗНАЧЕНИЕ JWT_PASSPHRASE ИЗ ФАЙЛА .env 
* openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
* //// php bin/console doctrine:migrations:diff
* bin/console doctrine:schema:update --force
* php bin/console doctrine:migrations:migrate
* bin/console acl:init
* bin/console fos:user:create --super-admin
* bin/console sonata:admin:setup-acl
* php bin/console cache:clear / (if mistake) rm -rf var/cache/dev/*