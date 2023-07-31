<?php
class Todo extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model("todo_model");
		$itemsDump = $this->todo_model->get_all();
		$viewItemData = array(
			"todoList" => $itemsDump 
		);

		$this->load->view('todo_list', $viewItemData);
	}

	public function insert()
	{
		$data = array('title' => $this->input->post("title"));
		$this->load->model("todo_model");
		$insertId = $this->todo_model->insert($data);

		redirect(base_url());
	}

	public function delete($id)
	{


		$deleteTaskId = $this->db->where("id", $id)->delete("task");
		redirect(base_url());
	}

	public function status()
	{
		echo "Durum";
	}
}
