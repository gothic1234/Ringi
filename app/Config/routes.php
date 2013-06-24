<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
	Router::connect('/setup', array('controller' => 'Ringi', 'action' => 'setup', 'setup'));
	Router::connect('/main_menu', array('controller' => 'Ringi', 'action' => 'main_menu', 'main_menu'));
	Router::connect('/upload_layout', array('controller' => 'Ringi', 'action' => 'upload_layout', 'upload_layout'));
	Router::connect('/change_privileges', array('controller' => 'Ringi', 'action' => 'change_privileges', 'change_privileges'));
	Router::connect('/processed', array('controller' => 'Ringi', 'action' => 'processed', 'processed'));
	Router::connect('/confirm_applications', array('controller' => 'Ringi', 'action' => 'confirm_applications', 'confirm_applications'));
	Router::connect('/pending', array('controller' => 'Ringi', 'action' => 'pending', 'pending'));
	Router::connect('/passed_back', array('controller' => 'Ringi', 'action' => 'passed_back', 'passed_back'));
	Router::connect('/accepted', array('controller' => 'Ringi', 'action' => 'accepted', 'accepted'));
	Router::connect('/rejected', array('controller' => 'Ringi', 'action' => 'rejected', 'rejected'));
	Router::connect('/database_log', array('controller' => 'Ringi', 'action' => 'database_log', 'database_log'));
	Router::connect('/support', array('controller' => 'Ringi', 'action' => 'support', 'support'));
	Router::connect('/credit', array('controller' => 'Ringi', 'action' => 'credit', 'credit'));
	
	
	Router::connect('/index', array('controller' => 'Ringi', 'action' => 'index', 'index'));
	Router::connect('/logout', array('controller' => 'Users', 'action' => 'logout', 'logout'));
	Router::connect('/login/**', array('controller' => 'Users', 'action' => 'login', 'login'));
	Router::connect('/apply', array('controller' => 'Ringi', 'action' => 'apply', 'apply'));
	Router::connect('/confirm', array('controller' => 'Ringi', 'action' => 'confirm', 'confirm'));
	Router::connect('/apply_check', array('controller' => 'Ringi', 'action' => 'apply_check', 'apply_check'));
	Router::connect('/confirm_check', array('controller' => 'Ringi', 'action' => 'confirm_check', 'confirm_check'));
	Router::connect('/pass_back_check', array('controller' => 'Ringi', 'action' => 'pass_back_check', 'pass_back_check'));
	Router::connect('/reject', array('controller' => 'Ringi', 'action' => 'reject', 'reject'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/Ringi/*', array('controller' => 'Ringi', 'action' => 'login', 'logout', 'apply','index'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
