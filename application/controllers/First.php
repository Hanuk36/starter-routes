<?php

class First extends Application {

    // #1
    public function index()
    {
	      $record = $this->quotes->get('1');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
    
    // #3
    public function zzz() 
    {
        $record = $this->quotes->get('1');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
    
    public function gimme($id){
        // loads justone
        $this->data['pagebody'] = 'justone';	
        
        // gets quote of id
	$source = $this->quotes->get($id);
        
        // merge the records to data array
	$this->data = array_merge($this->data, $source);
	
        $this->render();
    }
}