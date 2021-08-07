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
		// Consider replacing with "responsive": true argument in skin.json
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1' );
		$out->addBodyClasses( 'text-gray-200 bg-black' );
	}
}
