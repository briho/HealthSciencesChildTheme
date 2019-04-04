<?php

import('lib.pkp.classes.plugins.ThemePlugin');

class healthSciencesChildThemePlugin extends ThemePlugin {

// I may be wrong, but I think that what you're naming here in the 
// setParent function is the name of the _directory_ (rendered in
// lowercase) that the parent theme is located in.
// HealthSciencesPluginTheme is a PHP class, but the directory
// name is just healthSciences

	public function init() {
		$this->setParent('healthsciences');
	}



// My understanding is that the [xyz] in 
// plugins.themes.[xyz].name and
// plugins.themes.[xyz].description 
// are, in fact, based on the directory in which the plugin appears.
// If the path is /plugins/themes/[xyz] then that's exactly what 
// [xyz].name and [xyz].description must be, except in lowercase. 

	function getDisplayName() {
		return __('plugins.themes.healthscienceschildtheme.name');
	}


	function getDescription() {
		return __('plugins.themes.healthscienceschildtheme.description');
	}
}

?>
