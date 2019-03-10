<?php
class Test extends CI_Model{

	function form_insert($data){
		if($this->db->insert('users', $data)) {
			$data = $this->fetch();
			return $data;
		} else {
			return false;
		}

		}

	function fetch($id = 0){
		if ($id == 0) {
			        $row = $this->db->select('*')
						->get('users')->result();
						return $row;
		} else {
			        $row = $this->db->select('*')
                        ->where('id',$id)
						->get('users')->row();
						return $row;
		}
	}
	function delete($id){
		$this->db->where('id',$id)
		            ->delete('users');}

	function update($update){
		
		 $this->db->where('id',$update['id'])
		                 ->update('users',$update);

	}
}
?>
