<?php defined('SYSPATH') OR die('No direct access allowed.');
// Model List							
$config['models']			= array('User','UserLevel','UserProfile','History','ModulePermission','UserDashboard','Setting');
// Module Menu List
$config['module_menu']		= array('userdashboard/index'	=> 'Dashboard Panel',
									'user/index'			=> 'User Listings',
									/*'userlevel/index'		=> 'User Levels Listings',*/
									/*'history/index'		=> 'User History Listings',*/
									);
/* MODULE FUNCTION
 * 
 * Currently is only set to user and and setting
 * Accessed by administrators only
 */
$config['module_function']	= array(
									'userdashboard/add'		=> 'Add New Dashboard',
									'userdashboard/view'	=> 'View Dashboard Details',
									'userdashboard/edit'	=> 'Edit Dashboard Details',
									'userdashboard/delete'	=> 'Delete Dashboard',
									'user/edit'  => 'Edit User Details',
									'user/view'  => 'View User Details',
									'setting/view'	  => 'View Setting Details',
									'setting/edit'    => 'Edit Setting Details',
									'setting/delete'  => 'Delete Setting Details',
                                    );
// Loading CSS
$config['css']				= array(
									/*'ui-lightness/jquery-ui.custom.css' => 'screen',*/
									'tipsy.css'=>'screen',
									'jquery.jqplot.min.css' => 'screen', 
									'jquery.superfish.css' => 'screen',
									'jquery.alerts.css' => 'screen',
									'shadowbox/shadowbox.css' => 'screen',
									'jquery/jquery-ui-1.9.1/jquery.ui.all.css'=>'screen',									
									/*'bootstrap/css/bootstrap.custom.css' =>'screen', */
									'admin.css' => 'screen',
									'helper.css' => 'screen',
									/*'reset.css' => 'screen'*/
									);
// Loading Javascript
$config['js']				= array(
									'jquery.tipsy.js',
									'uploadify/swfobject.js',
									'extend/jquery.alphanumeric.js',
									'extend/jquery.autonumeric.js',
									'extend/jquery.char.counter.js',
									'extend/jquery.shadowbox.js',
									/*'extend/jquery.combo.js',*/
									'jquery.jqplot.1.0.4/plugins/jqplot.donutRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.pieRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.barRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.canvasTextRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.canvasAxisTickRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.categoryAxisRenderer.min.js',
									'jquery.jqplot.1.0.4/plugins/jqplot.pointLabels.min.js',
									'jquery.jqplot.1.0.4/jquery.jqplot.min.js',
									'ckeditor/adapters/jquery.js',
									'ckeditor/ckeditor.js',
									/*'tiny_mce/jquery.tinymce.js',*/
									/*'extend/jquery.form.js',*/
									/*'extend/jquery.cookie.js',*/
									/*'tiny_mce/plugins/tinybrowser/tb_tinymce.js.php',*/
									/*'jquery.hoverintent-min.js',*/
									/*'bootstrap/bootstrap-button.js',*/
									/*'bootstrap/bootstrap-alert.js',*/
									/*'bootstrap/bootstrap.min.js',*/	
									/*'uploadify/jquery.uploadify.v2.1.4.min.js',*/	
									/*'fabric/jquery-ui-1.9.1/jquery.ui.datepicker.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.effects.bounce.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.effects.core.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.ui.autocomplete.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.ui.position.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.ui.button.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.ui.draggable.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.ui.droppable.min.js',*/
									/*'fabric/jquery-ui-1.9.1/jquery.ui.widget.min.js',*/	
									'fabric/jquery-ui-1.9.1/jquery-ui.custom.min.js',
									/*'fabric/jquery-ui-1.9.1/jquery.ui.core.min.js',*/
                                    'jwplayer/jwplayer.js',
									'jquery.fancyzoom-min.js',
									'jquery.pngFix.js',
									'jquery.superfish-min.js',
									'jquery.alerts.js',
									'jquery.validate.min.js',
									/*'jquery.color.js',*/
									'admin.js',
									'jquery-1.8.2.min.js',
                                    );
// This is supposed to be redirection to edit profile view 
/*$config['default_page']   = 'admin-cp/user/view/{admin_id}';*/
// Insted we redirect user that have access to their dashboard panel
$config['default_page']   = 'admin-cp/userdashboard/index';
// Default title for the admin-cp title page
$config['title']		  = 'Administration Control Panel';
$config['show_developed'] = TRUE;
$config['item_per_page']  = 25;
/** Text Formats **/
$config['date_format']		= 'd M Y H:i:s';
$config['date_hours']		= 'd/m/Y H:i:s';
/** Error Fields **/
$config['error_field_open']	 = '<div class="form_row error">';
$config['error_field_close'] = '</div>';
$config['default'] = array ('view' => 'admin/default');
 return array_merge_recursive (
	$config 
 );
