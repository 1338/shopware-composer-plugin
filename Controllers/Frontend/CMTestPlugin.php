<?php

/**
 * Frontend controller
 */
class Shopware_Controllers_Frontend_CMTestPlugin extends Enlight_Controller_Action
{
    public function indexAction()
    {
        // Assign a template variable
        $this->View()->assign('name', 'CMTestPlugin');
    }
}
