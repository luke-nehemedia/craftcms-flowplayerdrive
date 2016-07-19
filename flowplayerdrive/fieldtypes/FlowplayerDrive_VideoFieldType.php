<?php
namespace Craft;
use Guzzle\Http;


/**
 *  Flowplayer_VideoFieldType class
 *
 * Definition of a craftcms field type
 * 
 * @author Lucas Bares <luke@nehemedia.de>
 * @last_edit	2016-06-20
 * @extends BaseFieldType
 */
class FlowplayerDrive_VideoFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Flowplayer Drive Video');
    }

	/**
     * Definition of the content type of the field
     *
     * The content of the field is stored as an array
     * 
     * @access public
     * @return string
     */
    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }
	
    /**
     * Return html for the input field of the field type
     * 
     * @access public
     * @param string $name
     * @param array $value
     * @return string
     */
    public function getInputHtml($name, $value)
    {   
        return craft()->templates->render('flowplayerdrive/videofield/input', array(
            'name'  => $name,
            'value' => $value['id'],
            'videos' => craft()->flowplayerDrive_aPI->getSelectArray(),
        ));
    }
    
    
    /**
     * Preparation of post data after submitting changes
     *
     * Given the id of the video, an array with extended video information is stored
     * into the database.
     * 
     * @access public
     * @param string $value
     * @return array
     */
    public function prepValueFromPost($value)
    {
	    // Return an empty array if no video was selected
	    if($value == '0'){
		    return ['id' => 0];
	    }
	    // Store additional information in the database
	    return craft()->flowplayerDrive_aPI->getVideoInfo($value);
    }
    
}
