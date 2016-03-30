<?php
class Bootstrap_View_Helper_Form_HorizontalEmail extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalEmail($field,$value,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field,$value,$label=null, $options=null) {
        
        $patternOptions = array(
            'placeholder'=>'name@someplace.com',
            'title'=>'name@domain.net',
            'pattern'=>'\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b'
        );
        
        $options = array_merge($patternOptions,(array)$options);
        
        return $this->renderHTML("email", $field, $value, $label, $options);
    }

}