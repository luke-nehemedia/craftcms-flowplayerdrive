<?php
namespace Craft;

/**
 * FlowplayerDrivePlugin class.
 * 
 * This plugin adds a custom field type to craftcms that lists all available 
 * videos stored in flowplayer drive.
 *
 * @author Lucas Bares <luke@nehemedia.de>
 * @last_edit	2016-08-25
 * @extends BasePlugin
 */
class FlowplayerDrivePlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('flowplayerdrive_plugin_name');
    }

    function getVersion()
    {
        return '0.4';
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
	    return Craft::t('flowplayerdrive_plugin_desc');
    }
    
    protected function defineSettings()
    {
        return array(
            'username' => array(AttributeType::String, 'default' => 'Test'),
            'password' => array(AttributeType::String, 'default' => 'Test'),
            'userid' => array(AttributeType::String, 'default' => 'Test'),
            'cache_lifetime' => array(AttributeType::Number, 'default' => 86400),
            'player_adaptiveRatio' => array(AttributeType::Bool, 'default' => true),
            'player_autoplay' => array(AttributeType::Bool, 'default' => false),
            'player_debug' => array(AttributeType::Bool, 'default' => false),
            'player_disabled' => array(AttributeType::Bool, 'default' => false),
            'player_fullscreen' => array(AttributeType::Bool, 'default' => true),
            'player_keyboard' => array(AttributeType::Bool, 'default' => true),
            'player_live' => array(AttributeType::Bool, 'default' => false),
            'player_mouseoutTimeout' => array(AttributeType::Number, 'default' => 5000),
            'player_muted' => array(AttributeType::Bool, 'default' => false),
            'player_native_fullscreen' => array(AttributeType::Bool, 'default' => false),
            'player_ratio' => array(AttributeType::String, 'default' => '0.5625'), // equals 9/16
            'player_splash' => array(AttributeType::Bool, 'default' => false),
            'player_tooltip' => array(AttributeType::Bool, 'default' => true),
            'player_volume' => array(AttributeType::Number, 'default' => 1.0),
        );
    }
    
    public function getSettingsHtml()
    {
        return craft()->templates->render('flowplayerdrive/settings', array(
            'settings' => $this->getSettings()
        ));
    }
    
    public function prepSettings($settings)
    {
        if($settings['clear_cache'] === '1'){
	        craft()->cache->delete('flowplayerdrive-videolist');
	        // Use error message because Notice will be overwritten by CP
	        craft()->userSession->setError(Craft::t('flowplayerdrive_settings_cache_clear_alert'));
        }

        return $settings;
    }
}