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
        echo("profile"); 
    }
    
    public function tweetsView ($data = array()) {
        echo("tweets"); 
    }
    
    public function followersView ($data = array()) {
        echo("followers"); 
    }
    
    public function timelineView ($data = array()) {
        echo("timeline"); 
    }
    
    
    /*
     *@method infoView() - html for the info action.
     */
    public function infoView($data) {
        
        if(isset($data['record']) && is_array($data['record'])) {
            
            
            $this->_output .= \library\html::table(array('id'=>'table-school-data',
                                           'border' => '1',
                                           'data' => $data['record']), true, true);
        }
        
    }   
}