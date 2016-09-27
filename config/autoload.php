<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'SliderGroup' => 'system/modules/z_ContentSliderSwiper/elements/SliderGroup.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_slider_group'    => 'system/modules/z_ContentSliderSwiper/templates',
	'block_searchable'   => 'system/modules/z_ContentSliderSwiper/templates',
	'block_unsearchable' => 'system/modules/z_ContentSliderSwiper/templates',
	'ce_slider_group'    => 'system/modules/z_ContentSliderSwiper/templates',
	'ce_slider_start'    => 'system/modules/z_ContentSliderSwiper/templates',
	'ce_slider_stop'     => 'system/modules/z_ContentSliderSwiper/templates',
));
