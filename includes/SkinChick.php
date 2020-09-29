<?php
/**
 * SkinTemplate class for the Chick skin
 *
 * @ingroup Skins
 */
class SkinChick extends SkinTemplate {
	public $skinname = 'chick',
		$stylename = 'Chick',
		$template = 'ChickTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.chick'
		] );
		$out->addModules( [
			'skins.chick.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
