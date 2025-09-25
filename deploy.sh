#!/bin/bash
# Laravel deploy script for Sitebunker (cPanel shared hosting)

set -e

# Szerver adatok
USER="wpjstxyf"            # cPanel felhasználó
HOST="217.197.98.240"      # szerver IP
DIR="~/laravel_app"        # ahova feltöltöd a projektet (pl. home könyvtárban)

echo ">>> Connecting to server..."
ssh $USER@$HOST << 'ENDSSH'
    cd ~/laravel_app || exit 1

    echo ">>> Pulling latest code (feltételezve git clone már van)"
    git pull origin main

    echo ">>> Installing dependencies..."
    composer install --optimize-autoloader --no-dev

    echo ">>> Running Laravel optimizations..."
    php artisan config:clear
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache

    echo ">>> Setting permissions..."
    chmod -R 755 storage bootstrap/cache
ENDSSH

echo ">>> Deploy finished!"
