FROM harbor.thesanmark.com/framework-base-images/dev/https/laravel:v10.latest AS builder
RUN apk update && apk upgrade --no-cache
COPY --chown=www-data:www-data ./ ./
RUN composer install --no-dev --ignore-platform-reqs --no-scripts && \
 npm ci && npm cache clean --force && \
 npm run build
# RUN composer dump-autoload

FROM harbor.thesanmark.com/framework-base-images/prod/http/laravel:v10.latest AS production
RUN apk update && apk upgrade --no-cache
COPY --chown=www-data:www-data --from=builder /var/www/html/ ./
RUN rm -rf /var/www/html/node_modules