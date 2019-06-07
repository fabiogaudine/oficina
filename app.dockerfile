FROM php:7.1-fpm

# Get repository and install 
RUN apt-get update && apt-get install -y \
  libaio1 \
  vim \
  unzip \
  curl \
  libmcrypt-dev \
  mysql-client libmagickwand-dev --no-install-recommends \
  && pecl install imagick \
  && docker-php-ext-enable imagick \
  && docker-php-ext-install mcrypt pdo_mysql				

#Config ORACLE

ADD docker/instantclient-basic-linux.x64-12.2.0.1.0.zip /tmp/
ADD docker/instantclient-sdk-linux.x64-12.2.0.1.0.zip /tmp/

# unzip them
RUN unzip /tmp/instantclient-basic-linux.x64-12.2.0.1.0.zip -d /usr/local/ \
  && unzip /tmp/instantclient-sdk-linux.x64-12.2.0.1.0.zip -d /usr/local/

# Prepare oci8
RUN ln -s /usr/local/instantclient_12_2 /usr/local/instantclient \
  && ln -s /usr/local/instantclient/libclntsh.so.12.1 /usr/local/instantclient/libclntsh.so \
  && ln -s /usr/local/instantclient/lib* /usr/lib

# Install the OCI8 PHP extension
RUN  docker-php-ext-configure oci8 --with-oci8=instantclient,/usr/local/instantclient && \
  docker-php-ext-install oci8 && \
  rm -rf /var/lib/apt/lists/* && \
  php -v

# instalacao composer
RUN curl -sS http://getcomposer.org/installer | php && \
  mv composer.phar /usr/local/bin/composer

ADD docker/tnsnames.ora /etc/
ADD docker/sqlnet.ora /etc/

# Clean
RUN apt-get clean -y 
# Remove the unnecessary zips
RUN rm /tmp/*.zip