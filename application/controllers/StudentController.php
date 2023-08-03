<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->model("StudentsModel");
		$data['studentes']=$this->StudentsModel->getstudents();
		$this->load->view('frontend/student_view',$data);
		$this->load->view('templates/footer');

	}
	public function addstudents(){
		$this->load->view('templates/header');
		$this->load->view('frontend/addstudent_view');
		$this->load->view('templates/footer');
	}
	public function store(){
		$this->form_validation->set_rules('first_name', 'firstname', 'required');
		$this->form_validation->set_rules('last_name', 'lastname', 'required');
		$this->form_validation->set_rules('phone_stu', 'phonestu', 'required');
		$this->form_validation->set_rules('email_stud', 'emailstud', 'required');
		if($this->form_validation->run()){

		$data=[
			'first_name' =>$this->input->post('first_name'),
			'last_name' =>$this->input->post('last_name'),
			'phone_stu' =>$this->input->post('phone_stu'),
			'email_stud' =>$this->input->post('email_stud'),
		];
		$this->load->model('StudentsModel','stu');
		$this->stu->insertStudent($data);
		redirect(base_url(student));
		}
		else{
			$this->addstudents();
		}
	}
	public function edit($id){
		$this->load->view('templates/header');
		$this->load->model("StudentsModel");
		$data['studentes']=$this->StudentsModel->editstudent($id);
		$this->load->view('frontend/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update($id){
		$this->form_validation->set_rules('first_name', 'firstname', 'required');
		$this->form_validation->set_rules('last_name', 'lastname', 'required');
		$this->form_validation->set_rules('email_stud', 'emailstud', 'required');
			if($this->form_validation->run()) :
		$data=[
			'first_name' =>$this->input->post('first_name'),
			'last_name' =>$this->input->post('last_name'),
			'phone_stu' =>$this->input->post('phone_stu'),
			'email_stud' =>$this->input->post('email_stud')
		];
			$this->load->model("StudentsModel");
			$data['studentes']=$this->StudentsModel->updatestudent($data, $id);
			redirect(base_url(student));

			else:
				$this->edit($id);
			endif;
	}
	public function delete($id){
			$this->load->model("StudentsModel");
			$this->StudentsModel->deletestudents($id);
			redirect(base_url(student));

	}
}
?>
