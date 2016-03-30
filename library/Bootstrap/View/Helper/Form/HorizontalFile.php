<?php
/**
 * http://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3/
 * 
 * @author jstormes
 *
 */
class Bootstrap_View_Helper_Form_HorizontalFile extends Bootstrap_View_Helper_Form_HorizontalAbstract
{
    
    public function HorizontalFile($field,$value,$label=null,$options=null) {
            
        return $this->render($field, $value, $label, $options);
    }
    
    protected function buildHTML() {
        // Template for our Horizontal form input.
        $HTML = <<<EOT
        <div class="form-group">
        
            <label for="{$this->field}" class="{$this->options['labelStyle']} control-label">{$this->options['label']}</label>
            <div class="{$this->options['inputStyle']}">
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-primary btn-file">
                            Browse <input type="file" name="{$this->field}"> 
                        </span>        
                        
                    </span>      
                    <span class="form-control">
                        <a href="#">test</a>
                        </span>   
<!--                     <input type="text" name="{$this->field}_text" id="{$this->field}_text" class="form-control" readonly="" >  
-->                </div>
            </div>
        </div>
EOT;
        return $HTML;
    }
    
    public function render($field,$value,$label=null, $options=null) {
        
        /* Default Options*/
        $defaultOptions = array(
            
        );
        
        $options = array_merge($defaultOptions,(array)$options);
        
        return $this->renderHTML("file", $field, $value, $label, $options);
    }

}