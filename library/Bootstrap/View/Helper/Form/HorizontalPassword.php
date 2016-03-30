<?php
class Bootstrap_View_Helper_Form_HorizontalPassword extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalPassword($field,$value,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field,$value,$label=null, $options=null) {
        
        return $this->renderHTML("password", $field, $value, $label, $options);
    }

}