<?php
namespace view;

class twitter extends view {
    
    /*
     *@method indexView() - default content for the index route
     */
    public function indexView($data = array()) {

    }
    
    
    public function tweetView ($data = array()) {
       
        if(!is_null($data) && is_array($data) && !empty($data)) {
            $this->_output .= '<table border=\'1\'><thead><tr><th>Key</th><th>Value</th></tr></thead>'; 
            foreach($data as $key => $value) {
                if(!is_scalar($value)) { continue; }
                
                $this->_output .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>'; 
            }
            
            $this->_output .= '</table><tfoot><tr><th><th></tr></tfoot>';
            
        } else {
            $this->_output .= "<h3>Invalid Message Supplied</h3>"; 
        }
    }
    
    public function profileView ($data = array()) {
         
        if(!is_null($data) && is_array($data) && !empty($data)) {
            $this->_output .= '<table border=\'1\'><thead><tr><th>Key</th><th>Value</th></tr></thead>'; 
            foreach($data as $key => $value) {
                if(!is_scalar($value)) { continue; }
                
                $this->_output .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>'; 
            }
            
            $this->_output .= '</table><tfoot><tr><th><th></tr></tfoot>';
            
        }
        
    }
    
    public function tweetsView ($data = array()) {
       
        if(!is_null($data) && is_array($data) && !empty($data)) {
            $this->_output .= \library\html::table(array('id'=>'table-tweets',
                                           'border' => '1',
                                           'data' => $data), true, false);
        }
    }
    
    public function followersView ($data = array()) { 
        
        if(!is_null($data) && is_array($data) && !empty($data) && isset($data['users'])) {
            $this->_output .= \library\html::table(array('id'=>'table-followers',
                                           'border' => '1',
                                           'data' => $data['users']), true, false);
        }
        
    }
    
    public function timelineView ($data = array()) {
         if(!is_null($data) && is_array($data) && !empty($data)) {
            $this->_output .= \library\html::table(array('id'=>'table-timeline',
                                           'border' => '1',
                                           'data' => $data), true, false);
        }
    }  
}