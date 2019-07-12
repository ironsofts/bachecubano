# Web de Bachecubano.com - Clasificados y Compra Venta en Cuba

![Bachecubano Web de Clasificados, negocios Compra Venta en Cuba](https://raw.githubusercontent.com/n3omaster/bachecubano/master/public/img/coming-soon-bachecubano.jpg)

## Variables globales desde AppServiceProvider

`$total_ads` = Cantidad de anuncios total, sin duplicados, activos y aprobados.

## Visual Style

`.dark-primary-color    { background: #1976D2; }`  
`.default-primary-color { background: #2196F3; }`  
`.light-primary-color   { background: #BBDEFB; }`  
`.text-primary-color    { color: #FFFFFF; }`  
`.accent-color          { background: #FFC107; }`  
`.primary-text-color    { color: #212121; }`  
`.secondary-text-color  { color: #757575; }`

Some creation tips:

1. php artisan make:controller AdController --resource --model=Ad
2. php artisan make:model Store --migration --controller --resource
3. php artisan make:model Alert -mcr
4. php artisan make:model Rating -mcr
5. php artisan make:request StoreBlogPost
6. php artisan make:event OrderShipped
7. php artisan make:job SendReminderEmail --sync
8. php artisan make:mail OrderShipped

## Create AMP Pages & Facebook Instant Pages
https://github.com/wearejust/laravel-amp  
https://amp.dev/documentation/examples/e-commerce/amp_for_e-commerce_getting_started/?format=websites  


## Create Schema.org Structired Data
https://github.com/spatie/schema-org  
https://freek.dev/642-a-package-to-fluently-generate-schemaorg-markup  
https://instantarticles.fb.com/

## Referal System
https://brudtkuhl.com/blog/building-referral-system-laravel/  
https://willbrowning.me/building-a-simple-referral-system-in-laravel/

## View Hints
JS auto hashtag

## SubDomain Mapping for Stores
ArmamePC  
HolaCubaShop  
PCPlus  
ApyTec  

## SEO Requirements
robots.txt  
sitemap.xml  
feed <- Parametrized
SEO laravel library Package

## Lazy Images Load  
https://github.com/aFarkas/lazysizes  

## Some Google API´s
Google Base  
Google Sitemap  
OpenBay Pro  

## IDE Tips & Install
IntelliSense for CSS class names in HTML

### Development History
https://github.com/barryvdh/laravel-debugbar -> composer require barryvdh/laravel-debugbar --dev
