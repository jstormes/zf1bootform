<?php

class ProfileController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {   
        // action body
    }
    
    public function editAction()
    {
        // edit a profile
        // Formatter and helper for bootstrap library
        $this->view->inlineScript()->appendFile('/js/bootstrap/jquery.formatter.min.js');
        $this->view->inlineScript()->appendFile('/js/bootstrap/bootstrap.helper.js');
        //$this->view->inlineScript()->appendFile('/js/bootstrap/upload.helper.js');
        $this->view->inlineScript()->appendFile('/js/bootstrap/tinymce/tinymce.min.js');
        
        // Moment and daterangepicker
        $this->view->inlineScript()->appendFile('/js/bootstrap/moment.min.js');
        $this->view->inlineScript()->appendFile('/js/bootstrap/daterangepicker.js');
        $this->view->headLink()->appendStylesheet('/js/bootstrap/daterangepicker-bs3.css');
    }


}

