 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	//functions

	public function index(){

		$this->load->model("main_model");
		$data["fetch_data"] = $this->main_model->fetch_data();
		$this->load->view("main_view",$data);

}
public function form_validation(){
	// echo "Ok";
	$this->load->library('form_validation');
	$this->form_validation->set_rules("firstname","First Name",'required|alpha');
	$this->form_validation->set_rules("lastname","Last Name",'required|alpha');

	if($this->form_validation->run())
	{
		//true
		$this->load->model("main_model");
		$data = array(
			"first_name"  =>$this->input->post("firstname"),
			"last_name"  =>$this->input->post("lastname"),
			"e_type"  =>$this->input->post("e_type"),
			"gender"  =>$this->input->post("gender"),
			"first_name"  =>$this->input->post("firstname")
			);
		$this->main_model->insert_data($data);

		redirect(base_url() . "main/inserted");
	}
	else
	{
		$this->index();
	}

}

public function inserted()

{
	$this->index();
}








	// public function index(){
	// 	// echo 'test index function';
	// 	// $this->load->model("main_model");
	// 	// $data["title"] = "Controllers text";
	// 	// $data["test1"] = "other controller text";
 // $this->load->view("main_view", $data);
	// 	// echo $this->main_model->test_main();
	// }
	// public function test1(){
	// 	echo 'test one function output';
	// }
}