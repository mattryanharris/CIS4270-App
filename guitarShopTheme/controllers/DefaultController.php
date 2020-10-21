<?php

/**
 * Default controller class provides the run method to all subclasses in the
 * GuitarShopTheme application.
 * The index method provides the default action of the application and can be
 * overridden in subclasses.
 *
 * @author JAM
 * @version 201012
 */
class DefaultController {

    public function __construct() {
        
    }

    public final function run($action = 'index', $vm = null) {

        if (!method_exists($this, $action)) {
            $action = 'index';
        }

        // The value retuned to the caller is not used in this application.
        return $this->$action($vm);
    }

    /**
     * Displays the default view for the application.
     */
    public function index($vm = null) {

        // Set page tab title
        Page::$title = 'My Guitar Shop';
        
        // Create view model
        if ($vm === null) {
            $vm = ProductsVM::getFeaturedInstance();
        }

        // Go to the default view of the application.
        require(APP_NON_WEB_BASE_DIR . 'views/index-home.php');
    }

}
