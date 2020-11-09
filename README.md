# TimThumb-by-TCSE
Кадрирование картинок на сайте для DLE


Доработка плагина http://www.binarymoon.co.uk/projects/timthumb/  для использования в шаблона DLE CMS. Кадрирование изображений в публикациях сайта.
Репозиторий исходного скрипта https://github.com/GabrielGil/TimThumb

**Установка**

Поставить для папки /engine/modules/mod_tcse/timthumb/cache/ права 775 - необходимо для создания миниатюр скадрированных изображений.

В корневом файле /.htaccess
после

	RewriteEngine On


вставить:


	# TimThumb – PHP Image Resizer 
	RewriteRule ^resize$ /engine/modules/mod_tcse/timthumb/timthumb.php [L]



В шаблонах кратких (shortstory.tpl) или полных (fullstory.tpl) новостей для кадрирования использовать код

	<img src="/resize?src={image-1}&w=775q=80&a=c" alt="">


где параметр w=775q=80&a=c

w=775 - ширина картинки

q=80 - качество сжатия

a=c - центрирование изображения


еще пример: 

	<img src="/resize?src={image-1}&w=480&h=240&a=c" alt="">


где 
&w=480&h=240&a=c

w=480 - ширина картинки

h=240 - высота картинки

a=c - центрирование изображения

{image-1} - тег вывода первой картинки в теле публикации.

