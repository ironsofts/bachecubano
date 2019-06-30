# Web de Bachecubano.com - Clasificados y Compra Venta en Cuba


## Variables globales desde AppServiceProvider

`$total_ads` = Cantidad de anuncios total, sin duplicados, activos y aprobados.

Some creation tips:

1. php artisan make:controller AdController --resource --model=Ad
2. php artisan make:model Store --migration --controller --resource
3. php artisan make:model Alert -mcr
4. php artisan make:model Rating -mcr
5. php artisan make:request StoreBlogPost
6. php artisan make:event OrderShipped
7. php artisan make:job SendReminderEmail --sync
8. php artisan make:mail OrderShipped