<?php
return array(
    
    // Plugin
    'flowplayerdrive_plugin_name' => 'FlowPlayerDrive Video',
    'flowplayerdrive_plugin_desc' => 'Fügt ein Feld hinzu um FlowPlayerDrive-Videos anzuzeigen.',
    
    // Account Einstellungen
	'flowplayerdrive_settings_account_heading' => 'Benutzerkonto Einstellungen',
	'flowplayerdrive_settings_account_username_label' => 'Benutzername',
	'flowplayerdrive_settings_account_password_label' => 'Passwort',
	'flowplayerdrive_settings_account_password_placeholder' => 'Passwort eingeben',
	'flowplayerdrive_settings_account_userid_label' => 'Benutzer-ID',
	'flowplayerdrive_settings_account_userid_placeholder' => 'Tragen Sie ihre Benutzer-ID ein.',
	
	
	// Cache Settings
	'flowplayerdrive_settings_cache_heading' => 'Cache Einstellungen',
	'flowplayerdrive_settings_cache_desc' => 'Um die Ladezeiten und API-Aufrufe zu reduzieren speichert dieses Plugin die Liste der Videos. Sie können das Intervall ändern, wann der Cache erneuert werden soll, oder diesen auch manuell leeren.',
	
	'flowplayerdrive_settings_cache_lifetime_label' => 'Cache Lebensdauer',
	'flowplayerdrive_settings_cache_lifetime_desc' => 'Geben sie die Cache Lebensdauer in Sekunden an. Die Standardeinstellung ist 86400, was einem Tag entspricht.',
	
	'flowplayerdrive_settings_cache_clear_label' => 'Cache leeren',
	'flowplayerdrive_settings_cache_clear_desc' => 'Aktivieren sie diesen Schalter (er setzt sich automatisch zurück) um die Videoliste zu leeren, so dass sie neu generiert wird. Dies ist hilfreich, wenn neue Videos noch  nicht aufgelistet werden.',
	'flowplayerdrive_settings_cache_clear_alert' => 'Cache wurde geleert',
	
	// Player Settings - https://flowplayer.org/docs/setup.html#player-options
	'flowplayerdrive_settings_player_heading' => 'Player Einstellungen',
	
	'flowplayerdrive_settings_player_adaptiveRatio_name' => 'Angepasstes Seitenverhältnis (Adaptive Ratio)',
	'flowplayerdrive_settings_player_adaptiveRatio_desc' => 'Ob der Player sich vertical dem Seitenverhältnis des Videos anpassen soll. Diese Option sollte nicht in Verbindung mit einem eigenen Ratio-Wert verwendet werden. Standard: An.',
	
	'flowplayerdrive_settings_player_autoplay_name' => 'Automatisches Abspielen (Autoplay)',
	'flowplayerdrive_settings_player_autoplay_desc' => 'Wenn aktiviert spielt das Video automatisch ab, sobald der Player geladen wurde. Widerspricht der Cover-Option und sollte nicht im Zusammenhang mit ihr verwendet werden. Diese Option hat keinen Effekt auf Mobilgeräte, da diese die automatische Wiedergabe unterdrücken. Standard: Aus.',

	'flowplayerdrive_settings_player_debug_name' => 'Wartungs-Modus (Debug mode)',
	'flowplayerdrive_settings_player_debug_desc' => 'Wenn aktiviert werden Wartungsnachrichten in der Browser-Console angezeigt. Kann zu Fehlern führen, wenn window.console im Browser nicht verfügbar ist. Standard: Aus.',
	
    'flowplayerdrive_settings_player_disabled_name' => 'Steuerung deaktiviert',
    'flowplayerdrive_settings_player_disabled_desc' => 'Playback wird forciert. Pausieren oder durch das Video navigieren ist deaktiviert durch die UI. Die API ist weiterhin funktionsfähig. Wird normalerweise für Werbung verwendet. Standard: Aus.',

    'flowplayerdrive_settings_player_fullscreen_name' => 'Vollbild',
    'flowplayerdrive_settings_player_fullscreen_desc' => 'Ob die Vollbild-Option verfügbar ist. Standard: An.',

    'flowplayerdrive_settings_player_keyboard_name' => 'Tastatur Kurzbefehle',
    'flowplayerdrive_settings_player_keyboard_desc' => 'Ermöglicht es das Video über Tastaturkurzbefehle zu steuern. Standard: An.',
    
    'flowplayerdrive_settings_player_live_name' => 'Live-Modus',
    'flowplayerdrive_settings_player_live_desc' => 'Konfiguriert den Player für Livestreaming. Standard: Aus.',
    
    
    'flowplayerdrive_settings_player_mouseoutTimeout_name' => 'Mouse Timeout',
    'flowplayerdrive_settings_player_mouseoutTimeout_desc' => 'Legt fest wie lange die Kontrollleiste im Vollbildmodus nach einer Mausbewegung sichtbar bleibt (in Millisekunden). Standard: 5000.',
    
    
    'flowplayerdrive_settings_player_muted_name' => 'Stummgeschalten',
    'flowplayerdrive_settings_player_muted_desc' => 'Startet den Player ohne Ton. Standard: Aus.',
    
    'flowplayerdrive_settings_player_native_fullscreen_name' => 'Nativer Vollbildmodus',
    'flowplayerdrive_settings_player_native_fullscreen_desc' => 'Verwendet den nativen Vollbildmodus in mobilen Browsern anstatt eines füllenden Fensters. Die Anzeige ist größer, allerdings können nur native Bedienelemente verwendet werden. Standard: Aus.',
    
    'flowplayerdrive_settings_player_ratio_name' => 'Seitenverhältnis (Ratio)',
    'flowplayerdrive_settings_player_ratio_desc' => 'Eine Dezimalnummer welche die Höhe in Relation zur Breite angibt. Standard ist 0.5625 was 9/16 entspricht. (Punkt als Dezimaltrennzeichen verwenden!).',
    
    'flowplayerdrive_settings_player_splash_name' => 'Startbild (Splash / Cover)',
    'flowplayerdrive_settings_player_splash_desc' => 'Verwendet ein Startbild. Erst nach einem Klick auf dieses Bild wird der Player geladen. Standard: Aus.',
    
    'flowplayerdrive_settings_player_tooltip_name' => 'Hilfetexte (Tooltip)',
    'flowplayerdrive_settings_player_tooltip_desc' => 'Aktiviert die Anzeige "Drücke ? für Hilfe" wenn man das erste Mal mit der Maus über den Player fährt. Standard: An.',
    
    'flowplayerdrive_settings_player_volume_name' => 'Lautstärke',
    'flowplayerdrive_settings_player_volume_desc' => 'Der initiale Lautstärkepegel (Dezimalzahl zwischen 0.1 und 1.0). Standard: 1.0',

    // Anweisungen
    'flowplayerdrive_settings_instructions_heading' => 'Verwendungshinweise',
    'flowplayerdrive_settings_instructions_desc1' => 'Nachdem Sie die Einstellungen ausgefüllt haben, erhalten Sie Zugriff auf einen neuen Feld-Typ namens: "FlowplayerDrive Video." Diesen können Sie als Feld auf ihrer Seite verwenden. Im Admin-Bereich erscheint eine Auswahl der Videos.',
    'flowplayerdrive_settings_instructions_desc2' => 'In Ihrem Template können sie den Code "{{ craft.flowplayerdrive.getPlayer(element) }}" verwenden, um ein Video anzeigen zu lassen.',
    
    // Feld 
    'flowplayerdrive_field_option1' => 'Wähle ein Video von Flowplayer Drive',
);
