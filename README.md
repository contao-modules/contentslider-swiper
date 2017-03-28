#README contentslider-swiper

## install module via composer

add to file *composer/composer.json*

- add to repositories block:   
```
{"type": "composer", "url": "https://php.fury.io/f_zMw5dGUyUYzpxn_gDc/pwcsexperiencecenter/"} 
```   

- add to required block:
```"kb/contentslider-swiper": "^1.0@alpha"```

## install npm module

- install npm module "swiper" ```npm install swiper```
- restart npm ```npm run go```

## Load JS files
Add to resources/scripts/app.js

```
// Slider - Swiper
import 'swiper/dist/css/swiper.min.css';
import 'swiper/dist/js/swiper.min.js';
import '../../system/modules/KbContentSliderSwiper/assets/slider-swiper.js';
```

## Inside Contao
- update DB goto page **Package management** and hit **update database**
- regenerate **autoload.php** for module in Contao
	- goto page Developer tools > Autoload creator
	- check your module **KbContentSliderSwiper**
	- check **Override existing files**
	- hit button **create the autoload files**
