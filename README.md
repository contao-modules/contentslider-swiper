#README contentslider-swiper

## install module via composer

add to file *composer/composer.json*

- add to repositories block:   
```
{   
	"type": "vcs",   
	"url": "http://github.com/contao-modules/contentslider-swiper.git"   
},   
```   

- add to required block:
```"kb/contentslider-swiper": "0.1.*"```

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

## update DB in Contao
## generate autoload.php for module in Contao
