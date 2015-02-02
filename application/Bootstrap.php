<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    
    /**
     * View of our layout template.
     *
     * @var Zend_View
     */
    protected $view;
    
    /**
     * 
     * @var Zend_Config
     */
    protected $config;
    
    /***********************************************************************
     * Get a copy of our configuration environment.
     **********************************************************************/
    protected function _initConfig()
    {
        $this->config = new Zend_Config($this->getOptions(), true);
    }
    
    /***********************************************************************
     * Populate the layout with some defaults.
     **********************************************************************/
    protected function _initPopulateLayout() {
    
        // Bootstrap the layout
        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $this->view = $layout->getView();
    
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
    

    
    /***********************************************************************
     * Build the menu.
     **********************************************************************/
    protected function _initNavigation()
    {
        
        // Bind our menu into the view
        $menu = new Zend_Navigation($this->config->menu);
        $this->view->navigation($menu);
        
        $this->view->registerHelper(new Bootstrap_View_Helper_Navigation_Menu(), 'menu');
        
    }
    
    
}

