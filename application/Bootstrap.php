<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected $layout;
    
    /**
     * View of our layout template.
     *
     * @var Zend_View
     */
    protected $view;
    
    /***********************************************************************
     * Populate the layout with some defaults.
     **********************************************************************/
    protected function _initPopulateLayout() {
    
        // Bootstrap the layout
        $this->bootstrap('layout');
        $this->layout = $this->getResource('layout');
        $this->view = $this->layout->getView();
    
        // Set a starting title
        $this->view->headTitle('Zend 1 App');
    
        // CSS Files
        $this->view->headLink()->appendStylesheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css');
    
        // JavaScript Files top of page
        //$this->view->headScript()->appendFile('/js/filename.js');
    
        // JavaScript Files bottom of page
        $this->view->inlineScript()->appendFile('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
        $this->view->inlineScript()->appendFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');
    }
    
}

