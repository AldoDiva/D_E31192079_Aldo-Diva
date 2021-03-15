<?php 
class Hello extends CI_Controller {

	public function index(){
		//echo "<h2>Hello World CI!3</h2>"

		$this->load->model('hello');
		$model = $this->Hello;

		$a = $model->txt;
		$data['teks'] =$a;
$this->load->view('Hello',$data);
			
	}
}
?>