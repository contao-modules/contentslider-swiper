<?php 
/**
* @file SliderGroup.php
* @author Katrin Beutler
* @version 3.5.6
* @package kb.contao.extensions.ce
* @copyright Katrin Beutler
*/

class SliderGroup extends \ContentElement {
	protected $strTemplate = 'ce_slider_group';
	
		/**
		 * @return string
		 */
		public function generate()
		{
			return parent::generate();
		}
	
	
		/**
		 * Generate content element
		 */
		protected function compile() {
			if (TL_MODE == 'BE') {
				$this->strTemplate = 'be_wildcard';

				/** @var \BackendTemplate|object $objTemplate */
				$objTemplate = new \BackendTemplate($this->strTemplate);

				$this->Template = $objTemplate;
				$this->Template->title = $this->mooHeadline;
			}
		}
}