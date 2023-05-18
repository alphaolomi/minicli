FROM php:8.2-cli-alpine

# Metadata
LABEL maintainer="Alpha Olomi <hello@alphaolomi.com>"
LABEL description="Minicli template app Docker image"


ARG user=sammy
ARG uid=1000

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    libxml2-dev \
    zip \
    unzip \
    bash

# Install a specific version of Composer
COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN addgroup -g $uid -S $user && \
    adduser -u $uid -S $user -G $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user


WORKDIR /home/$user

COPY .. /home/$user

RUN chmod +x /home/$user/runner.sh

USER $user

# Install dependencies
RUN composer install --optimize-autoloader --no-dev

ENTRYPOINT ["sh", "/home/sammy/runner.sh"]