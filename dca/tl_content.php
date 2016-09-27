<?php 
/**
* @file tl_content.php
* @author Katrin Beutler
* @version 3.5.6
* @package kb.contao.extensions.ce
* @copyright Katrin Beutler
*/



$GLOBALS['TL_DCA']['tl_content']['palettes']['slider_group'] = '{type_legend},type;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';



/* @group Slider - Swiper */
/* ------------------------- */

//change slider backend for fitting the swiper slider
$GLOBALS['TL_DCA']['tl_content']['palettes']['sliderStart'] = '{type_legend},type,headline;{slider_legend},slider_effect,slider_autoHeight,sliderDelay,slider_autoplayDisableOnInteraction,sliderSpeed,sliderStartSlide,sliderContinuous,slider_spaceBetween;{slider_menu_legend},slider_menuButton,slider_menuPagination,slider_menuScrollbar;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

//new slider fields
$GLOBALS['TL_DCA']['tl_content']['fields']['slider_effect'] = array (
	'label'						=> &$GLOBALS['TL_LANG']['tl_content']['slider_effect'],
	'exclude'					=> true,
	'inputType'					=> 'radio',
	'default'					=> 'slide',
	'options'					=> array(
		'fade' => $GLOBALS['TL_LANG']['tl_content']['slider_effect']['fade'],
		'slide' => $GLOBALS['TL_LANG']['tl_content']['slider_effect']['slide'],
		'cube' => $GLOBALS['TL_LANG']['tl_content']['slider_effect']['cube'],
		'coverflow' => $GLOBALS['TL_LANG']['tl_content']['slider_effect']['coverflow'],
		'flip' => $GLOBALS['TL_LANG']['tl_content']['slider_effect']['flip'],
	),
	'eval'						=> array('submitOnChange'=>false,'mandatory'=>true, 'tl_class'=>'w50 clr',),
	'sql'						=> "varchar(50) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_content']['fields']['slider_autoHeight'] = array (
	'label'						=> &$GLOBALS['TL_LANG']['tl_content']['slider_autoHeight'],
	'exclude'					=> true,
	'inputType'					=> 'checkbox',
	'eval'						=> array('tl_class' => 'm12 clr', 'helpwizard'=>true,),
	'sql'						=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['slider_autoplayDisableOnInteraction'] = array (
	'label'						=> &$GLOBALS['TL_LANG']['tl_content']['slider_autoplayDisableOnInteraction'],
	'exclude'					=> true,
	'inputType'					=> 'checkbox',
	'default'					=> 1,
	'eval'						=> array('tl_class' => 'm12 w50',),
	'sql'						=> "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['slider_spaceBetween'] = array (
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['slider_spaceBetween'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
	'sql'                     => "varchar(6) NOT NULL default ''"
);


// slider menu
$GLOBALS['TL_DCA']['tl_content']['fields']['slider_menuButton'] = array (
	'label'						=> &$GLOBALS['TL_LANG']['tl_content']['slider_menuButton'],
	'exclude'					=> true,
	'inputType'					=> 'checkbox',
	'eval'						=> array('tl_class' => 'm12',),
	'sql'						=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['slider_menuPagination'] = array (
	'label'						=> &$GLOBALS['TL_LANG']['tl_content']['slider_menuPagination'],
	'exclude'					=> true,
	'inputType'					=> 'checkbox',
	'eval'						=> array('tl_class' => 'm12',),
	'sql'						=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['slider_menuScrollbar'] = array (
	'label'						=> &$GLOBALS['TL_LANG']['tl_content']['slider_menuScrollbar'],
	'exclude'					=> true,
	'inputType'					=> 'checkbox',
	'eval'						=> array('tl_class' => 'm12',),
	'sql'						=> "char(1) NOT NULL default ''"
);


//changes in standard slider fields
$GLOBALS['TL_DCA']['tl_content']['fields']['sliderSpeed']['eval']['tl_class'] .= ' clr';
$GLOBALS['TL_DCA']['tl_content']['fields']['sliderStartSlide']['eval']['tl_class'] .= ' clr';


/* @end Slider - Swiper */

