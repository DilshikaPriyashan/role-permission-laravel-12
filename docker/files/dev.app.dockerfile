FROM harbor.thesanmark.com/framework-base-images/dev/http/laravel:v10.latest
# RUN chown -R www-data:www-data /etc/nginx/ssl
COPY --chown=www-data:www-data ./ ./