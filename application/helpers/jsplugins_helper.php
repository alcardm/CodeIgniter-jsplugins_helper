<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * JavaScript Plugins Helper
 *
 * @package HTML
 * @category Helper
 * @author Alberto Cardenas
 * @link http://albertocardenas.co
 * @version 1.0
 */

if ( ! function_exists('plugin_js'))
{
	
	function plugin_js($library = 'jquery')
	{
		static $js;

		if ( ! is_array($js))
		{
			if (file_exists(APPPATH.'config/jsplugins.php'))
			{
				include(APPPATH.'config/jsplugins.php');
			}

			if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/jsplugins.php'))
			{
				include(APPPATH.'config/'.ENVIRONMENT.'/jsplugins.php');
			}
			if (empty($_js) OR ! is_array($_js))
			{
				$js = array();
				return FALSE;
			}

			$js = $_js;
		}
		return isset($js[$library]) ? '<script src="' . $js[$library] . '"></script>' : FALSE;
	}
}

if ( ! function_exists('plugin_css'))
{
	
	function plugin_css($style = 'style')
	{
		static $css;

		if ( ! is_array($css))
		{
			if (file_exists(APPPATH.'config/jsplugins.php'))
			{
				include(APPPATH.'config/jsplugins.php');
			}

			if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/jsplugins.php'))
			{
				include(APPPATH.'config/'.ENVIRONMENT.'/jsplugins.php');
			}
			if (empty($_js) OR ! is_array($_js))
			{
				$js = array();
				return FALSE;
			}

			$css = $_css;
		}
		return isset($css[$style]) ? '<link rel="stylesheet" href="' . $css[$style] . '">' : FALSE;
	}
}