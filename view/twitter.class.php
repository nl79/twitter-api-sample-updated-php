<?php
namespace view;

class twitter extends view {
    
    /*
     *@method indexView() - default content for the index route
     */
    public function indexView($data = array()) {

    }
    
    
    public function tweetView ($data = array()) {
        
    }
    
    public function profileView ($data = array()) {
        var_dump($data); 
    }
    
    public function tweetsView ($data = array()) {
        var_dump($data); 
    }
    
    public function followersView ($data = array()) {
        var_dump($data); 
    }
    
    public function timelineView ($data = array()) {
        var_dump($data);
    }  
}