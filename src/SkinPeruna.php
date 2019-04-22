<?php
/**
 * Skin file for skin Peruna.
 *
 * @file
 * @ingroup Skins
 */


/**
 * SkinTemplate class for Peruna skin
 * @ingroup Skins
 */
class SkinPeruna extends SkinTemplate {
	var $skinname = 'peruna', $stylename = 'Peruna',
		$template = 'PerunaTemplate', $useHeadElement = true;

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
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1' );
		$out->addBodyClasses( 'text-gray-200 bg-black' );
		$out->addModules( 'skins.peruna.js' );
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
            // 'mediawiki.skinning.interface',
            'skins.peruna'
		) );
	}
}
