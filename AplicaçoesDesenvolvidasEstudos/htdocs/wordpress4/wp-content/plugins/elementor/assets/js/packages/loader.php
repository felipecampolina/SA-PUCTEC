<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * This file is generated by Webpack, do not edit it directly.
 */
add_filter( 'elementor/editor-v2/packages/config', function( $data ) {

	$data['elementor-packages-editor'] = require __DIR__ . '/editor.asset.php';

	$data['elementor-packages-editor-app-bar'] = require __DIR__ . '/editor-app-bar.asset.php';

	$data['elementor-packages-editor-documents'] = require __DIR__ . '/editor-documents.asset.php';

	$data['elementor-packages-editor-panels'] = require __DIR__ . '/editor-panels.asset.php';

	$data['elementor-packages-editor-responsive'] = require __DIR__ . '/editor-responsive.asset.php';

	$data['elementor-packages-editor-site-navigation'] = require __DIR__ . '/editor-site-navigation.asset.php';

	$data['elementor-packages-editor-v1-adapters'] = require __DIR__ . '/editor-v1-adapters.asset.php';

	$data['elementor-packages-env'] = require __DIR__ . '/env.asset.php';

	$data['elementor-packages-icons'] = require __DIR__ . '/icons.asset.php';

	$data['elementor-packages-locations'] = require __DIR__ . '/locations.asset.php';

	$data['elementor-packages-query'] = require __DIR__ . '/query.asset.php';

	$data['elementor-packages-store'] = require __DIR__ . '/store.asset.php';

	$data['elementor-packages-ui'] = require __DIR__ . '/ui.asset.php';
	return $data;
} );
