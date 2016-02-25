<?php

	/**
	 * Helper class for Hello World! module
	 *
	 * @package    Joomla.Tutorials
	 * @subpackage Modules
	 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
	 * @license        GNU/GPL, see LICENSE.php
	 * mod_socialnetworking is free software. This version may have been modified pursuant
	 * to the GNU General Public License, and as distributed it includes or
	 * is derivative of works licensed under the GNU General Public License or
	 * other free or open source software licenses.
	**/

	//no direct access
	defined( '_JEXEC' ) or die;

	class modHomeSocialMedia
	{

		function getData(&$params){

			$SocialMediaParams = array();
			$SocialMediaParams['face_book_link'] = htmlspecialchars($params->get( 'face_book_link' ));
			$SocialMediaParams['twitter_link'] = htmlspecialchars($params->get( 'twitter_link' ));
			$SocialMediaParams['youtube_link'] = htmlspecialchars($params->get( 'youtube_link' ));
			$SocialMediaParams['linkedin_link'] = htmlspecialchars($params->get( 'linkedin_link' ));
			$SocialMediaParams['instagram_link'] = htmlspecialchars($params->get( 'instagram_link' ));
			$SocialMediaParams['pinterest_link'] = htmlspecialchars($params->get( 'pinterest_link' ));
			$SocialMediaParams['google_plus_link'] = htmlspecialchars($params->get( 'google_plus_link' ));
			$SocialMediaParams['tumblr_link'] = htmlspecialchars($params->get( 'tumblr_link' ));
			$SocialMediaParams['flickr_link'] = htmlspecialchars($params->get( 'flickr_link' ));
			$SocialMediaParams['google_map_link'] = htmlspecialchars($params->get( 'google_map_link' ));
			$SocialMediaParams['face_book_like'] = htmlspecialchars($params->get( 'face_book_like' ));

			//display params
			$SocialMediaParams['face_book_link_yes'] = htmlspecialchars($params->get( 'face_book_link_yes' ));
			$SocialMediaParams['twitter_link_yes'] = htmlspecialchars($params->get( 'twitter_link_yes' ));
			$SocialMediaParams['youtube_link_yes'] = htmlspecialchars($params->get( 'youtube_link_yes' ));
			$SocialMediaParams['linkedin_link_yes'] = htmlspecialchars($params->get( 'linkedin_link_yes' ));
			$SocialMediaParams['instagram_link_yes'] = htmlspecialchars($params->get( 'instagram_link_yes' ));
			$SocialMediaParams['pinterest_link_yes'] = htmlspecialchars($params->get( 'pinterest_link_yes' ));
			$SocialMediaParams['google_plus_link_yes'] = htmlspecialchars($params->get( 'google_plus_link_yes' ));
			$SocialMediaParams['tumblr_link_yes'] = htmlspecialchars($params->get( 'tumblr_link_yes' ));
			$SocialMediaParams['flickr_link_yes'] = htmlspecialchars($params->get( 'flickr_link_yes' ));
			$SocialMediaParams['google_map_link_yes'] = htmlspecialchars($params->get( 'google_map_link_yes' ));
			$SocialMediaParams['face_book_like_yes'] = htmlspecialchars($params->get( 'face_book_like_yes' ));

			return $SocialMediaParams;
		}
	}

?>