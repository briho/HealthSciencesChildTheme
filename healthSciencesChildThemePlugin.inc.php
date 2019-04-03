<?php

import('lib.pkp.classes.plugins.ThemePlugin');

class healthSciencesChildThemePlugin extends ThemePlugin {

	public function init() {
		$this->setParent('healthsciencesthemeplugin');
	}


	function getDisplayName() {
		return __('plugins.themes.healthsciences-child.name');
	}


	function getDescription() {
		return __('plugins.themes.healthsciences-child.description');
	}
}

?>
