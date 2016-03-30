<?php
class Bootstrap_View_Helper_Form_HorizontalTinyMCE extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalTinyMCE($field,$value,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    protected function buildHTML() {
        // Template for our Horizontal form input.
        $HTML = <<<EOT
        <div class="form-group">
            <label for="{$this->field}" class="{$this->options['labelStyle']} control-label">{$this->options['label']}</label>
            <div class="{$this->options['inputStyle']}">
                <textarea class="form-control form-tinymce" id="{$this->field}" name="{$this->field}" {$this->attributesString} rows="3">{$this->value}</textarea>
            </div>
        </div>
EOT;
        return $HTML;
    }
    
    public function render($field,$value,$label=null, $options=null) {
        
        /* Default Options
         */
        $defaultOptions = array(
            'rows'=>'3',
        );
        
        $options = array_merge($defaultOptions,(array)$options);
        
        return $this->renderHTML("textarea", $field, $value, $label, $options);
    }

}