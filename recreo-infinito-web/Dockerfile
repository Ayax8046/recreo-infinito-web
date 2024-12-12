# Imagen base para el frontend (Node.js)
FROM node:18 AS builder

# Directorio de trabajo para el frontend
WORKDIR /app

# Copia los archivos de package.json y package-lock.json
COPY package*.json ./

# Instala dependencias y construye el frontend
RUN npm install && npm run build

# Imagen base para el servidor Laravel (PHP)
FROM php:8.0-cli

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && rm -rf /var/lib/apt/lists/*

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /app

# Copia los archivos del proyecto Laravel
COPY . /app

# Copia los archivos generados del frontend
COPY --from=builder /app/dist /app/public

# Instala dependencias de Composer
RUN composer install

# Copia archivo .env
COPY .env.example .env

# Optimiza las vistas y el entorno
RUN php artisan optimize && php artisan config:cache && php artisan route:cache && php artisan view:cache

# Exponer el puerto 8000
EXPOSE 8000

# Comando de inicio
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
