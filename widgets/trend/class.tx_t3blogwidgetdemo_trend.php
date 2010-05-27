<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Dmitry Dulepov (dmitry.dulepov@gmail.com)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * $Id$
 *
 */

/**
  * This class is a demo widget for t3blog. It embeds Google trends to the page.
  *
  * @author Dmitry Dulepov <dmitry.dulepov@gmail.com>
  * @package TYPO3
  * @subpackage tx_t3blogwidgetdemo
  */

class tx_t3blogwidgetdemo_trend {

	/**
	 * Produces the output.
	 *
	 * @param string $unused
	 * @param array $conf
	 * @param array $piVars
	 * @param tslib_cObj $cObj
	 */
	public function main($unused, array $conf, $piVars, tslib_cObj $cObj) {
		$html = '<iframe src="http://www.gmodules.com/ig/ifr?url=' .
			'http://www.google.com/ig/modules/trends_gadget.xml&amp;' .
			'source=imag&amp;up_is_init=true&amp;up_cur_term=' .
			htmlspecialchars(rawurlencode($conf['terms'])) .
			'&amp;up_date=all&amp;up_region=all" ' .
			'style="border:1px solid #ccc; padding:10px;" ' .
			'width="' . htmlspecialchars($conf['width']) .
			'" height="' . htmlspecialchars($conf['height']) .
			'" frameborder="0" scrolling="no"></iframe>';

		return $html;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/t3blog_widgetdemo/class.tx_t3blogwidgetdemo_trend.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/t3blog_widgetdemo/class.tx_t3blogwidgetdemo_trend.php']);
}

?>