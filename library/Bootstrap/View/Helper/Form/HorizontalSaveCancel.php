<?php
class Bootstrap_View_Helper_Form_HorizontalSaveCancel extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalSaveCancel($field=null,$value=null,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    public function render($field=null,$value=null,$label=null, $options=null) {
        
        if ($value===null)
            $value='Save';
        
        $patternOptions = array(
            'cancelText'=>'Cancel'
        );
        
        $options = array_merge($patternOptions,(array)$options);
        
        return $this->renderHTML("savecancel", $field, $value, $label, $options);
    }
    
    protected function buildHTML() {
        // Template for our Horizontal form input.
        $HTML = <<<EOT
        <div class="form-group">
            <label class="{$this->options['labelStyle']} control-label"></label>
                <div class="{$this->options['inputStyle']}">
                    <input class="btn btn-primary" value="{$this->value}" type="submit">
                    <span></span>
                    <input class="btn btn-default" value="{$this->options['cancelText']}" type="reset">
                </div>
        </div>
EOT;
        return $HTML;
    }

}