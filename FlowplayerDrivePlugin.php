<?php
namespace Craft;

/**
 * FlowplayerDrivePlugin class.
 * 
 * This plugin adds a custom field type to craftcms that lists all available 
 * videos stored in flowplayer drive.
 *
 * @author Lucas Bares <luke@nehemedia.de>
 * @last_edit	2016-06-20
 * @extends BasePlugin
 */
class FlowplayerDrivePlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('FlowplayerDrive Integration');
    }

    function getVersion()
    {
        return '0.2';
    }

    function getDeveloper()
    {
        return 'Lucas Bares';
    }

    function getDeveloperUrl()
    {
        return 'https://luke.nehemedia.de';
    }

    function getDescription()
    {
	    return Craft::t('Adds a custom field type for videos stored on flowplayer drive');
    }
    
    protected function defineSettings()
    {
        return array(
            'username' => array(AttributeType::String, 'default' => 'Test'),
            'password' => array(AttributeType::String, 'default' => 'Test'),
            'userid' => array(AttributeType::String, 'default' => 'Test'),
        );
    }
    
    public function getSettingsHtml()
    {
        return craft()->templates->render('flowplayerdrive/settings', array(
            'settings' => $this->getSettings()
        ));
    }
}