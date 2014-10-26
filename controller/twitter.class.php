<?php
namespace controller; 
/*
 *twitter controller class.
 */

class twitter extends controller {
    
    
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    private $_settings = array(
        'oauth_access_token' => "2843175376-aPRNxijTf2fley9GRmd7jl5d4Rs2e38PImJNEcb",
        'oauth_access_token_secret' => "9yu9rim1VfWg0re8yI2SmF3mOJhrHGNguhn7r8mLyf3x2",
        'consumer_key' => "Q62cPZLXNFBZ0kF0UuGRy8T1s",
        'consumer_secret' => "gidZTOAjCWmZwgQgfFUnrkNMddS068148Q4cXerAmbIN4hd3aU"
    );
    
    
    
    protected function indexAction () {
        
        /*
        #view object data array. 
        $vData = array('list' => $schoolList); 
              
        $view = new \view\index($this->_action, $vData);
        */
        
    }
      
    protected function tweetsAction() {
        echo('tweetAction'); 
        
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $requestMethod = 'GET';
        $getfield = '?screen_name=pamosn';
        
        $twitter = new \library\TwitterAPIExchange($this->_settings);
       
        $result = json_decode($twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(true), true); 
        echo('<pre>');
        var_dump($result);
        echo('</pre>'); 
        
    }
    
    protected function profileAction() {
        
        $url = 'https://api.twitter.com/1.1/users/show.json';
        $requestMethod = 'GET';
        $getfield = '?screen_name=pamosn';
        
        $twitter = new \library\TwitterAPIExchange($this->_settings);
        
        $result = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        
        $result = json_decode($twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(true), true); 
        echo('<pre>');
        var_dump($result);
        echo('</pre>');  
    }
    
    protected function tweetAction() {
        
        #extract the status from the request array.
        $status = isset($_REQUEST['status']) && is_string($_REQUEST['status']) &&
                    !empty($_REQUEST['status']); 
        
         /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
        $url = 'https://api.twitter.com/1.1/statuses/update.json';
        $requestMethod = 'POST';
        
        /** POST fields required by the URL above. See relevant docs as above **/
        $postfields = array('status'=> $status); 
        
        /** Perform a POST request and get the response **/
        $twitter = new \library\TwitterAPIExchange($this->_settings);
       
        $result = json_decode($twitter->setPostfields($postfields)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(true), true); 
        echo('<pre>');
        var_dump($result);
        echo('</pre>');
    }
    
    protected function timelineAction() {
        echo('timelineAction'); 
        
        $url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';
        $requestMethod = 'GET';
        $getfield = '?screen_name=pamosn';
        
        $twitter = new \library\TwitterAPIExchange($this->_settings);
       
        $result = json_decode($twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(true), true); 
        echo('<pre>');
        var_dump($result);
        echo('</pre>');
    }
    
    protected function followersAction() {
         echo('followersAction'); 
        
        $url = 'https://api.twitter.com/1.1/followers/list.json';
        $requestMethod = 'GET';
        $getfield = '?screen_name=pamosn';
        
        $twitter = new \library\TwitterAPIExchange($this->_settings);
       
        $result = json_decode($twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest(true), true);
        
        echo('<pre>');
        var_dump($result);
        echo('</pre>'); 
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
