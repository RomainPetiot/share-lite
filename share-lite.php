<?php
/**
 * Plugin name: share-lite
 * Plugin URI: https://github.com/RomainPetiot/
 * Description: Share
 * Author : Romain Petiot
 * Author URI: https://www.romainpetiot.com
 * Contributors:Romain Petiot
 * Version: 1.0
 * Stable tag: 1.0
 */

/**
 * Bloquer les accès directs
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require plugin_dir_path( __FILE__ ) . 'front.php';
