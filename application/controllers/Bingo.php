<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get('5');
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['href'] = $record['where'];
        $this->data['what'] = $record['what'];
        $this->render();
    }

}
