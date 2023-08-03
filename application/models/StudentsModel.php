<?php
 class StudentsModel extends CI_Model
 {
 	public function getstudents(){
		$query = $this->db->get('tbl_student');  // Produces: SELECT * FROM mytable
		return $query->result();
	 	}

 	public function insertStudent($data){
 		return $this->db->insert('tbl_student',$data);
 	}
 	public function editstudent($id){
 		$query = $this->db->get_where('tbl_student', ['id'=>$id]);  // Produces: Recupere et modifier 
 		return $query->row();
	}
	public function updatestudent($data,$id){
		return $this->db->update('tbl_student', $data, ['id' =>$id]);
	}
	public function deletestudents($id){
		return $this->db->delete('tbl_student',  ['id' =>$id]);  // Produces: // DELETE FROM mytable// WHERE id = $id

	}

 }




?>