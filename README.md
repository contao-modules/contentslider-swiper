#README contentslider-swiper

## install module via composer

add to file *composer/composer.json*

- add to repositories block:   
<code>
{   
	"type": "vcs",   
	"url": "http://github.com/contao-modules/contentslider-swiper.git"   
},   
</code>   

- add to required block:
<code>"kb/contentslider-swiper": "0.1.*"</code>

## install npm module

- install npm module "swiper" <code>npm install swiper</code>
- restart npm <code>npm run go</code>

## Load JS files
Add to resources/scripts/app.js

<code>
// Slider - Swiper   
import 'swiper/dist/css/swiper.min.css';<br/>
import 'swiper/dist/js/swiper.min.js';<br/>
import '../../system/modules/KbContentSliderSwiper/assets/slider-swiper.js';
</code>

## update DB in Contao
## generate autoload.php for module in Contao