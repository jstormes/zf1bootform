<?php
class Bootstrap_View_Helper_Form_HorizontalDate extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalDate($field,$value,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field,$value,$label=null, $options=null) {

        $patternOptions = array(
            // This title works with both Chrome built in date picker and our date range picker
            'title'=>'YYYY is the year, MM is the month, and DD is day of the month'
            // Other options are set in the bootstrap.helper.js
        );
        
        $options = array_merge($patternOptions,(array)$options);
        
        return $this->renderHTML("date", $field, $value, $label, $options);
    }

}