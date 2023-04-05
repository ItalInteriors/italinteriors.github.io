FROM httpd:alpine


RUN a2enmod rewrite
ADD htdocs /usr/local/apache2/htdocs/
RUN chown -R www-data:www-data /usr/local/apache2/htdocs/*
