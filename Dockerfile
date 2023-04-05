FROM httpd:alpine

ADD www.italinteriors.ca /usr/local/apache2/htdocs/
RUN chown -R www-data:www-data /usr/local/apache2/htdocs/*