<?php // no direct access

	/**
	 * Hello World! Module Entry Point
	 *
	 * @package    Joomla.Tutorials
	 * @subpackage Modules
	 * @license    GNU/GPL, see LICENSE.php
	 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
	 * mod_socialmedia is free software. This version may have been modified pursuant
	 * to the GNU General Public License, and as distributed it includes or
	 * is derivative of works licensed under the GNU General Public License or
	 * other free or open source software licenses.
	**/

	//no direct access
	defined( '_JEXEC' ) or die;

	$document = JFactory::getDocument();
	$document->addStyleSheet(JURI::root()."modules/mod_socialmedia/assets/css/mod_socialmedia.css");
?>

	<table cellpadding="4">
		<tbody>
			<tr>
				<?php if($SocialMediaParams['face_book_link_yes']==1): ?>
				<td><img alt="Facebook" src="modules/mod_socialmedia/assets/images/02_facebook.png" height="32" width="32" /></td>
				<td><a href="<?php echo $SocialMediaParams['face_book_link']; ?>" target="_blank">Facebook</a></td>
				<?php endif; ?>
			<tr>
				<?php if($SocialMediaParams['twitter_link_yes']==1): ?>
				<td><img alt="Twitter" src="modules/mod_socialmedia/assets/images/01_twitter.png" height="32" width="32" /></td>
				<td><a href="<?php echo $SocialMediaParams['twitter_link']; ?>" target="_blank">Twitter</a></td>
				<?php endif; ?>
			</tr>
			<tr>
				<?php if($SocialMediaParams['youtube_link_yes']==1):?>
				<td><img alt="YouTube" src="modules/mod_socialmedia/assets/images/03_youtube.png" height="32" width="32" /></td>
				<td><a href="<?php echo $SocialMediaParams['youtube_link']; ?>" target="_blank">Youtube</a></td>
				<?php endif; ?>
			</tr>
			<tr>
				<?php if($SocialMediaParams['linkedin_link_yes']==1): ?>
				<td><img alt="Linked In" src="modules/mod_socialmedia/assets/images/07_linkedin.png" height="32" width="32" /></td>
				<td><a href="<?php echo $SocialMediaParams['linkedin_link']; ?>" target="_blank">Linked In</a></td>
				<?php endif; ?>
			</tr>
			<tr>
				<?php if($SocialMediaParams['pinrest_link_yes']==1): ?>
				<td><img alt="Pinterest" src="modules/mod_socialmedia/assets/images/13_pinterest.png" height="32" width="32" /></td>
				<td><a href="<?php echo $SocialMediaParams['pinrest_link'];?>" target="_blank">Pinterest</a></td>
				<?php endif; ?>
			</tr>
			<tr>
				<?php if($SocialMediaParams['google_map_link_yes']==1): ?>
				<td><img alt="Google Maps" src="modules/mod_socialmedia/assets/images/14_googlemaps.png" height="32" width="32" /></td>
				<td><a href="<?php echo $SocialMediaParams['google_map_link']; ?>" target="_blank">Google Maps</a></td>
				<?php endif; ?>
			</tr>
		</tbody>
	</table>

	<?php if ($SocialMediaParams['face_book_like_yes']==1) { ?>
	<div class="like_us">
		<h6 class="font10">LIKE US</h6>
			<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $SocialMediaParams['face_book_like'];?>e&amp;width=75&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=165519893567731" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:21px;" allowTransparency="true"></iframe>
	</div>
	<?php } ?>