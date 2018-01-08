FROM php:7.2.0-cli-alpine3.7 as builder

RUN apk --no-cache add $PHPIZE_DEPS zip unzip git zlib-dev
  
RUN pecl install grpc
RUN docker-php-ext-enable grpc

WORKDIR /
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');"

COPY . /app

WORKDIR /app

RUN php /composer.phar install

FROM php:7.2.0-cli-alpine3.7

COPY --from=builder /app /app
COPY --from=builder /app/config/config.php.dist /app/config/config.php
COPY --from=builder /usr/local/lib/php/extensions/no-debug-non-zts-20170718/grpc.so /usr/local/lib/php/extensions/no-debug-non-zts-20170718/grpc.so

RUN docker-php-ext-enable grpc

ENV GOOGLE_APPLICATION_CREDENTIALS=/cred.json

ENTRYPOINT ["/app/firestore.php"]