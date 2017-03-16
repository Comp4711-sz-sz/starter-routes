<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wisdom extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * The default page for the current first quote.
     */
    public function index() {
        
    }

    public function bingo() {
        // build the author we want to pass on to our view
        $Author = $this->quotes->get(6);
        $this->data['who'] = $Author['who'];
        $this->data['mug'] = $Author['mug'];
        $this->data['what'] = $Author['what'];
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        $this->render();
    }

}
