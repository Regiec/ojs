<?php

/**
 * @file plugins/generic/addThis/AddThisStatisticsGridRow.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2000-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AddThisStatisticsGridRow
 * @ingroup plugins_generic_addThis
 *
 * @brief AddThis statistics grid row definition
 */

import('lib.pkp.classes.controllers.grid.GridRow');

class AddThisStatisticsGridRow extends GridRow {
	//
	// Overridden methods from GridRow
	//
	/**
	 * @copydoc GridRow::initialize()
	 */
	function initialize($request, $template = null) {
		// Do the default initialization
		parent::initialize($request, $template);

		// Is this a new row or an existing row?
		$statsRow = $this->_data;
		if ($statsRow != null) {
			// no grid actions for this.
			$this->setTemplate('controllers/grid/gridRow.tpl');
		}
	}
}

