<?php
/**
 * Skin file for skin Veles.
 *
 * @file
 * @ingroup Skins
 */

/**
 * SkinTemplate class for Veles skin
 * @ingroup Skins
 */
class SkinVeles extends SkinTemplate {
	var $skinname = 'veles', $stylename = 'Veles',
		$template = 'VelesTemplate', $useHeadElement = true;

	/**
	 * This function adds JavaScript via ResourceLoader
	 *
	 * Use this function if your skin has a JS file(s).
	 * Otherwise you won't need this function and you can safely delete it.
	 *
	 * @param OutputPage $out
	 */

	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no' );
		$out->addModules( 'skins.veles.js' );
		/* 'skins.veles.js' is the name you used in your skin.json file */
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
			/* mediawiki.skinning.interface is the default interface theme*/
			// 'mediawiki.skinning.interface',
			/* 'skins.veles' is the name you used in your skin.json file */
			'skins.veles'
		) );
	}
}

