<?php
namespace view;

class twitter extends view {
    
    /*
     *@method indexView() - default content for the index route
     */
    public function indexView(array $links = array()) {

    }
    
    
    public function tweetView (array $links = array()) {
        
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