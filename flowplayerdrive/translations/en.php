<?php
return array(
    
    // Plugin
    'flowplayerdrive_plugin_name' => 'FlowPlayerDrive Video',
    'flowplayerdrive_plugin_desc' => 'Adds a custom field type for videos stored on flowplayer drive.',
    
    // Account Settings
	'flowplayerdrive_settings_account_heading' => 'Account settings',
	'flowplayerdrive_settings_account_username_label' => 'Username',
	'flowplayerdrive_settings_account_password_label' => 'Password',
	'flowplayerdrive_settings_account_password_placeholder' => 'Enter your password',
	'flowplayerdrive_settings_account_userid_label' => 'User-ID',
	'flowplayerdrive_settings_account_userid_placeholder' => 'Please enter your user-id.',
	
	// Cache Settings
	'flowplayerdrive_settings_cache_heading' => 'Cache settings',
	'flowplayerdrive_settings_cache_desc' => 'To minimize waiting time and API calls, this plugin caches the list of uploaded videos. You can specify the time interval the cache will be renewed or flush the cache manually.',
	'flowplayerdrive_settings_cache_lifetime_label' => 'Cache Lifetime',
	'flowplayerdrive_settings_cache_lifetime_desc' => 'Enter the cache lifetime in seconds. The default value is 86400 which equals one day.',
	'flowplayerdrive_settings_cache_clear_label' => 'Clear cache',
	'flowplayerdrive_settings_cache_clear_desc' => 'Turn this on to clear (one time) the cached videolist. This can be useful if recently uploaded videos are not yet displayed.',
	'flowplayerdrive_settings_cache_clear_alert' => 'Cache cleared',
	
	// Player Settings - https://flowplayer.org/docs/setup.html#player-options
	'flowplayerdrive_settings_player_heading' => 'Player Settings',
	
	'flowplayerdrive_settings_player_adaptiveRatio_name' => 'Adaptive Ratio',
	'flowplayerdrive_settings_player_adaptiveRatio_desc' => 'Whether the player\'s ratio adapts vertically to the video\'s aspect ratio. Do not apply in conjunction with the ratio option.',
	
	'flowplayerdrive_settings_player_autoplay_name' => 'Autoplay',
	'flowplayerdrive_settings_player_autoplay_desc' => 'If true, playback will start automatically once the player is loaded. <br>Contradicts a splash setup by definition and must not be used with it.<br>Has no effect on mobile devices which do not allow automatic playback.',

	'flowplayerdrive_settings_player_debug_name' => 'Debug mode',
	'flowplayerdrive_settings_player_debug_desc' => 'Whether to show debug messages in the browser console. Causes errors if window.console is not available.',
	
    'flowplayerdrive_settings_player_disabled_name' => 'Disabled',
    'flowplayerdrive_settings_player_disabled_desc' => 'Whether playback should be forced by disabling the UI. Seeking, pausing etc. is impossible. API still works. Typically used in ads.',

    'flowplayerdrive_settings_player_fullscreen_name' => 'Fullscreen',
    'flowplayerdrive_settings_player_fullscreen_desc' => 'Whether fullscreen is enabled. Defaults to false when the player is viewed in an IFRAME.',

    'flowplayerdrive_settings_player_keyboard_name' => 'Keyboard shortcuts',
    'flowplayerdrive_settings_player_keyboard_desc' => 'Whether keyboard shortcuts are enabled.',
    
    'flowplayerdrive_settings_player_live_name' => 'Live mode',
    'flowplayerdrive_settings_player_live_desc' => 'Whether the player is set up for live streaming. CSS alternative: the is-live state class.',
    
    'flowplayerdrive_settings_player_mouseoutTimeout_name' => 'Mouse timeout',
    'flowplayerdrive_settings_player_mouseoutTimeout_desc' => 'How long the full controlbar stays visible in fullscreen after a mouse movement (in milliseconds). Has no effect in conjunction with the fixed-controls and no-toggle skin modifier classes.',
    
    'flowplayerdrive_settings_player_muted_name' => 'Muted',
    'flowplayerdrive_settings_player_muted_desc' => 'Whether the player should start in muted state.',
    
    'flowplayerdrive_settings_player_native_fullscreen_name' => 'Native fullscreen',
    'flowplayerdrive_settings_player_native_fullscreen_desc' => 'Whether to use native fullscreen in mobile browsers instead of the full browser window. The screen will be bigger but native video controls will be in use instead of customizable Flowplayer controls.',
    
    'flowplayerdrive_settings_player_ratio_name' => 'Ratio',
    'flowplayerdrive_settings_player_ratio_desc' => 'A fraction or decimal number representing the height of the player in proportion to its width. Refer to the section on player size for details. Set this to false if you want to set the ratio via CSS only or set the player dimensions to a fixed size via CSS. Default value is: 0.5625.',
    
    'flowplayerdrive_settings_player_splash_name' => 'Splash',
    'flowplayerdrive_settings_player_splash_desc' => 'As boolean: enables a splash setup. If a splash image is desired, it can be set as CSS background-image for the container element. CSS alternative: the is-splash state class.',
    
    'flowplayerdrive_settings_player_tooltip_name' => 'Tooltip',
    'flowplayerdrive_settings_player_tooltip_desc' => 'Whether the "Hit ? for help" tooltip is shown when hovering initially over the player.',
    
    'flowplayerdrive_settings_player_volume_name' => 'Volume',
    'flowplayerdrive_settings_player_volume_desc' => 'The initial volume level.',


    // Anweisungen
    'flowplayerdrive_settings_instructions_heading' => 'Instructions',
    'flowplayerdrive_settings_instructions_desc1' => 'After you have filled out the settings you can use the new field type "Flowplayer Drive Video". Define a field and used it on your page.',
    'flowplayerdrive_settings_instructions_desc2' => 'In your template, you can use {{ craft.flowplayerdrive.getPlayer(element) }} to display the video player.',
    
    
    // Entry 
	'flowplayerdrive_field_option1' => 'Choose a video from flowplayer drive',
);
