<?php

class Hogwarts extends Application {
    
    // #2
    public function index()
    {
	      $record = $this->quotes->get('6');
            $this->data = array_merge($this->data, $record);
            $this->data['pagebody'] = 'justone';
            $this->render();
    }
}

