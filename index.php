<?php
/**
 * Plugin Name: Inuvik Commerce
 * Plugin URI: https://github.com/forthrobot/inuvik
 * Description: Experimental commerce toolkit for WordPress.
 * Version: 1.4.0dev
 * Author: Forthrobot Software
 * Author URI: http://forthrobot.net
 * Requires at least: 4.4
 * Tested up to: 4.4
 *
 *    Code devised by Forthrobot Software copyright (c) 2015 Forthrobot Software.
 *    Portions created by Ingenesis Limited are Copyright © 2008-2014 by Ingenesis Limited.
 *
 *    This file is part of Inuvik Commerce.
 *
 *    Inuvik Commerce is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    Inuvik Commerce is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Inuvik Commerce.  If not, see <http://www.gnu.org/licenses/>.
 *
 **/

defined( 'WPINC' ) or exit();

// Start the bootloader
require 'core/library/Loader.php';

// Prevent loading the plugin in special circumstances
if ( Shopp::services() || Shopp::unsupported() ) return;

/* Start the core */
Shopp::plugin();