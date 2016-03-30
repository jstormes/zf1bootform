<?php
class Bootstrap_View_Helper_Form_HorizontalTel extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalTel($field,$value,$label=null,$options=null) {
        
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field,$value,$label=null, $options=null) {
        
        /* We do all of this server side, as there is no standard 
         * tel control for browsers as there is no standard 
         * international format that is convenient.
         */
        $patternOptions = array(
            'data-format'=>'({{999}}) {{999}}-{{9999}}',
            'pattern'=>'(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}',
            'placeholder'=>'(555) 555-5555',
            'title'=>'(555) 555-5555'
        );
        
        $options = array_merge($patternOptions,(array)$options);
        
        return $this->renderHTML("tel", $field, $value, $label, $options);
    }

}