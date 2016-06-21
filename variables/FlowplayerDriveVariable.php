<?php
namespace Craft;


/**
 * Function declaration to use in templates
 *
 * @author Lucas Bares <luke@nehemedia.de>
 * @last_edit	2016-06-21
 */
class FlowplayerDriveVariable
{
	
	
	/**
	 * Get the HTML-Code of the flowplayer for the particular video
	 * 
	 * @access public
	 * @param array $entry
	 * @return \Twig_Markup
	 */
	public function getPlayer($entry){
	   
	   // Overwrite template Path
	   $oldPath = craft()->path->getTemplatesPath();
	   $newPath = craft()->path->getPluginsPath().'flowplayerdrive/templates/';
	   craft()->path->setTemplatesPath($newPath);
	   
	   // Render player
	   $html = craft()->templates->render('videofield/render', array(
           'settings' => craft()->plugins->getPlugin('flowplayerdrive')->getSettings(),
           'video' => $entry
       ));

	   // restore template Path
	   craft()->path->setTemplatesPath($oldPath);

	   return new \Twig_Markup($html,craft()->templates->getTwig()->getCharset());
   }
}
