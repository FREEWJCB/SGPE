@echo off
title=SGPE SERVER
cls
echo Si cierra esta ventana, no podra hacer uso de SGPE, por favor, minimicela.
start chrome 127.0.0.1:8000
php artisan serve
exit