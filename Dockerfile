FROM httpd:alpine

ADD htdocs /usr/local/apache2/htdocs/
ADD httpd.conf /usr/local/apache2/conf/httpd.conf
RUN chown -R www-data:www-data /usr/local/apache2/*
