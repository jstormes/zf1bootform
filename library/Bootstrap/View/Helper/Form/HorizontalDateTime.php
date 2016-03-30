<?php
class Bootstrap_View_Helper_Form_HorizontalDateTime extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalDateTime($field,$value,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field,$value,$label=null, $options=null) {

        $patternOptions = array(
            // This title works with both Chrome built in date picker and our date range picker
            'title'=>'YYYY is the year, MM is the month, DD is day of the month, HH is Hour (0 to 24) and MM is Minutes (0 to 60)'
            // Other options are set in the bootstrap.helper.js
        );
        
        $options = array_merge($patternOptions,(array)$options);
        
        return $this->renderHTML("datetime", $field, $value, $label, $options);
    }

}