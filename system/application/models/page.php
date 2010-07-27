<?php

class Page extends Model {
	
	var $name = 'home';
    var $content = '';

    function Page()
    {
        // Call the Model constructor
        parent::Model();
    }
    
    function get_content()
    {
        $query = $this->db->get_where('pages', array('name'=>$this->name));
		$result = $query->result();
		$this->content = $result[0]->content;
        return $this->content;
    }

    function update_content($content)
    {
        $this->content = $content;
        $this->db->update('pages', $this, array('name' => $this->name));
    }

}










