<?php

Class user extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("muser");
	}
	public function form (){
		$this->load->view('vuser');
	}
	public function add (){
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$fnam = $this->input->post('fname');
		$lvl = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $pass,
			'fullname' => $fnam,
			'level' => $lvl
		);
		$this->muser->add($data);
		redirect('user/show');
	}
	public function show()
	{
		$data['username'] = $this->muser->gets()->result();
		$this->load->view('tampiluser', $data);
	}
	public function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->muser->get($where,'user')->result();
		$this->load->view('edituser',$data);
	}
	public function hapus($id){
		$where = array('id' => $id);
		$this->muser->del($where,'user');
		redirect('user/show');
	}
	public function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$fnam = $this->input->post('fname');
		$lvl = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $pass,
			'fullname' => $fnam,
			'level' => $lvl
		);
		$where = array(
		'id' => $id
		);
		$this->muser->edit($where,$data,'user');
		redirect('user/show');
	}
}

?>