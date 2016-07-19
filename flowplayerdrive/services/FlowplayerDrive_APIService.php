<?php
namespace Craft;


/**
 * Flowplayer Drive API Service
 *
 * This service class hosts all connectivity to the API of the flowplayer drive
 * 
 * @author Lucas Bares <luke@nehemedia.de>
 * @last_edit	2016-06-21
 * @uses \Guzzle\Http\Client
 * @extends BaseApplicationComponent
 */
class FlowplayerDrive_APIService extends BaseApplicationComponent
{
 	
	/**
	 * Authorisation code during API connection
	 * 
	 * @var mixed
	 * @access protected
	 */
	protected $authcode;
	
	/**
	 * Instance of the http client
	 * 
	 * @var \Guzzle\Http\Client
	 * @access protected
	 */
	protected $client;
	
	/**
	 * Plugins Settings
	 * 
	 * @var mixed
	 * @access protected
	 */
	protected $settings;
	
	/**
	 * Flowplayer Drive API Url
	 * 
	 * (default value: 'https://drive.api.flowplayer.org/')
	 * 
	 * @var string
	 * @access protected
	 */
	protected $uri = 'https://drive.api.flowplayer.org/';

	
	/**
	 * Toggle whether a connection is established and the user logged in
	 * 
	 * (default value: false)
	 * 
	 * @var bool
	 * @access protected
	 */
	protected $logged_in = false;

	/**
	 * __construct functio
	 *
	 * Initialising the http client and login
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		$this->client = new \Guzzle\Http\Client;
		$this->settings = craft()->plugins->getPlugin('flowplayerdrive')->getSettings();
	}
	
	/**
	 * Login to the API
	 * 
	 * @access protected
	 * @return bool
	 */
	protected function login()
	{
		if($this->logged_in){
			return true;
		}else{
			$response = $this->client->post($this->uri.'login',[],['username' => $this->settings->username, 'password' => $this->settings->password])->send();

			if($response->getStatusCode() != '200'){
				throw new Exception("Error loggin in to flowplayer API");
				return false;
			}else{
				$auth_info = $response->json();
				$this->authcode = $auth_info['user']['authcode'];
				$this->logged_in = true;
				return true;
			}
		}
		
	}

	/**
	 * A list of all uploaded videos as array
	 * 
	 * @access public
	 * @return void
	 */
	public function getVideos()
	{	
		$this->login();
		
		$cached_result = craft()->cache->get('flowplayerdrive-videolist');
		
		if($cached_result !== false){
			return $cached_result;		
		}else{
			$response = $this->client->get($this->uri.'videos?authcode='.$this->authcode)->send();
			
			if($response->getStatusCode() != '200'){
				throw new Exception("Error getting Video list", $response->getStatusCode());
				return false;
			}else{
				craft()->cache->set('flowplayerdrive-videolist',$response->json(),$this->settings->cache_lifetime);
				return $response->json();
			}	
		}
	}

	/**
	 * Returns an array to populate a select input field
	 *
	 * Format: array[video_id] = video_title
	 * 
	 * @access public
	 * @return void
	 */
	public function getSelectArray()
	{
		$videos = $this->getVideos();

		foreach ($videos['videos'] as $video) {
			$select[$video['id']] = $video['title'];
		}

		return $select;
	}
	
	/**
	 * Get detailed information about a particular video
	 *
	 * This information is stored within the field content.
	 * 
	 * @access public
	 * @param integer $video_id
	 * @return array
	 */
	public function getVideoInfo($video_id)
	{
		$this->login();
		
		$response = $this->client->get($this->uri.'videos/'.$video_id.'?authcode='.$this->authcode)->send();

		$result = $response->json();
		
		return $result['video'];
	}

}
