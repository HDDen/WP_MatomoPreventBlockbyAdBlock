1) Устанавливаем
2) Matomo Analytics - Настройки - Добавить код отслеживания - Вручную
3) Matomo Analytics - Настройки - Код отслеживания JavaScript. Копируем, заменяем пути в строках, вставляем итог выше в "Отслеживающий код" и "Код Noscript"
```
_paq.push(['setTrackerUrl', "\/\/domain.com\/wp-content\/plugins\/matomo\/app\/matomo.php"]);
_paq.push(['setTrackerUrl', "\/\/domain.com\/wp-content\/plugins\/hdden_mtmDeblock\/inc\/mtm_backendHelper.php"]);

g.src="\/\/domain.com\/wp-content\/uploads\/matomo\/matomo.js";
g.src="\/\/domain.com\/wp-content\/plugins\/hdden_mtmDeblock\/inc\/mtm_getJs.php";
```
Для Noscript:
```
src="//domain.com/wp-content/plugins/matomo/app/matomo.php?idsite=1&rec=1"
src="//domain.com/wp-content/plugins/hdden_mtmDeblock/inc/mtm_backendHelper.php?idsite=1&rec=1"
```
