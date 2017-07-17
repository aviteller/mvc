<?php

class Note_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function noteList()
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid', 
                array('userid' => $_SESSION['userid']));
    }
    
    public function noteSingleList($id)
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid AND note.id = :id', 
            array('userid' => $_SESSION['userid'], 'id' => $id));
    }
    
    public function create($data)
    {

        $validate = new Validate();
         $validation = $validate->check($data, array(
        'title' => array(
            'name' => 'title',
            'required' => true,
        ),
        'content' => array(
            'name' => 'content',
            'required' => true,
            'min' => 2,
            'max' => 2000
        )
    ));

          if($validation->passed()) {
            
            try {                   


        $this->db->insert('note', array(
            'title' => $data['title'],
            'userid' => $_SESSION['userid'],
            'content' => $data['content'],
        ));
    } catch (Exception $e) {
                die($e->getMessage());
                }
            } else {
            foreach($validation->errors() as $error) {
                echo $error, '<br>';
            }
    }
    }
    public function editSave($data)
    {
        $postData = array(
            'title' => $data['title'],
            'content' => $data['content'],
        );
        
        $this->db->update('note', $postData, 
                "`id` = '{$data['id']}' AND userid = '{$_SESSION['userid']}'");
    }
    
    public function delete($data)
    {
        $this->db->delete('note', "`id` = '{$data['id']}' AND userid = '{$_SESSION['userid']}'");
    }
}