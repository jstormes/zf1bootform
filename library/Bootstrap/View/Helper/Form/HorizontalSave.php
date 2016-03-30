<?php
class Bootstrap_View_Helper_Form_HorizontalSave extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalSave($field=null,$value=null,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field=null,$value=null,$label=null, $options=null) {
        
        if ($value===null)
            $value='Save';
        
        return $this->renderHTML("savecancel", $field, $value, $label, $options);
    }
    
    protected function buildHTML() {
        // Template for our Horizontal form input.
        $HTML = <<<EOT
        <div class="form-group">
            <label class="{$this->options['labelStyle']} control-label"></label>
                <div class="{$this->options['inputStyle']}">
                    <input class="btn btn-primary" value="{$this->value}" type="submit">
                </div>
        </div>
EOT;
        return $HTML;
    }

}