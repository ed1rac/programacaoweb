# Usar uma imagem base com Apache e PHP
FROM php:7.4-apache

# Instalar dependências, incluindo MariaDB client e SSH
RUN apt-get update && apt-get install -y \
    mariadb-client \
    openssh-server \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Expor a porta 8088 para o Apache
EXPOSE 8088

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Adicionar um volume para armazenamento de dados
VOLUME /var/www/html/data

# Configurar o Apache para rodar na porta 8088
RUN sed -i 's/80/8088/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf

# Habilitar o mod_rewrite do Apache
RUN a2enmod rewrite

# Configurar o SSH
RUN mkdir /var/run/sshd && \
    echo 'root:root' | chpasswd && \
    sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config && \
    sed -i 's/Port 22/2222/' /etc/ssh/sshd_config && \
    mkdir /root/.ssh

# Expor a porta 2222 para o SSH
EXPOSE 2222

# Comando para iniciar o Apache e o SSH no contêiner
CMD service ssh start && apache2-foreground
