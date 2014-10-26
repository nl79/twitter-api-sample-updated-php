<?php
namespace controller; 
/*
 *twitter controller class.
 */

class twitter extends controller {
    
    
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    private $_settings = array(
        'oauth_access_token' => "2843175376-uYeSLZkV37SItLCY7NPEMR2QydSPFUZu3LbUIbJ",
        'oauth_access_token_secret' => "KTa3H0zNIybSSfLm7sXzTfGeRoLgt1QIGRQQKDycNaLEE",
        'consumer_key' => "MmMEHhzVlV68tslJZwTtFHNlv",
        'consumer_secret' => "esZ4pvapwncZOxVYdXxzXMaZYI3R6yCocoCw5tdftal3KwhNE7"
    );
    
    
    
    protected function indexAction () {
        
        /*
        #view object data array. 
        $vData = array('list' => $schoolList); 
              
        $view = new \view\index($this->_action, $vData);
        */
        
    }
    
    protected function blockAction() {
    
        /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
        $url = 'https://api.twitter.com/1.1/blocks/create.json';
        $requestMethod = 'POST';
        
        /** POST fields required by the URL above. See relevant docs as above **/
        $postfields = array(
            'screen_name' => 'usernameToBlock', 
            'skip_status' => '1'
        );
        
        /** Perform a POST request and echo the response **/
        $twitter = new TwitterAPIExchange($settings);
        echo $twitter->buildOauth($url, $requestMethod)
                     ->setPostfields($postfields)
                     ->performRequest();
    }
    
    protected function tweetsAction() {
        echo('tweetAction'); 
        
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $requestMethod = 'GET';
        $getfield = '?screen_name=pamosn';
        
        $twitter = new \library\TwitterAPIExchange($this->_settings);
        
        $result = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(true);
        
        echo('<pre>');
        var_dump($result);
        echo('</pre>'); 
        
                     
        
    }
    
    protected function profileAction() {
        
        $url = 'https://api.twitter.com/1.1/users/show.json';
        $requestMethod = 'GET';
        $getfield = '?screen_name=nl79';
        
        $twitter = new \library\TwitterAPIExchange($this->_settings);
        
        $result = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        
        echo('<pre>');
        var_dump($result);
        echo('</pre>'); 
    }
    
    protected function tweetAction() {
        
    }
    
    protected function timelineAction() {
        
    }
    
    
    
    protected function followersAction() {
          
    }
    
    
    
    protected function followersidsAction() {
        
        /** Perform a GET request and echo the response **/
        /** Note: Set the GET field BEFORE calling buildOauth(); **/
        $url = 'https://api.twitter.com/1.1/followers/ids.json';
        $getfield = '?screen_name=J7mbo';
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        echo $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
    }
}
