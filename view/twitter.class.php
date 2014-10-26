<?php
namespace view;

class index extends view {
    
    /*
     *@method indexView() - default content for the index route
     */
    public function indexView($data) {
             
        $this->_output .= $this->buildUL($data['list']);
        $this->_output .= "<div id='div-school-data'></div>";
      
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