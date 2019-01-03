# From https://stackoverflow.com/questions/49809748/add-mod-rewrite-to-docker-image-httpdalpine
FROM httpd:alpine

RUN mkdir /usr/local/apache2/conf.d

# Copy .htaccess into DocumentRoot
# COPY ./.htaccess /var/www/html/

# RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf
# RUN sed -i '/LoadModule proxy_module/s/^#//g' /usr/local/apache2/conf/httpd.conf
# RUN sed -i '/LoadModule proxy_http_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

# RUN { \
#   echo 'IncludeOptional conf.d/*.conf'; \
# } >> /usr/local/apache2/conf/httpd.conf \
#   && mkdir /usr/local/apache2/conf.d

