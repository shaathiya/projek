<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Project extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('m_project');
		}

		public function index(){
			//query untuk mengaktifkan data
			$data['project']=$this->m_project->get_data()->result();
			$this->load->view('v_header');
			$this->load->view('project/v_project',$data);
			$this->load->view('v_footer');
		}

		public function tambah(){
			$this->load->view('v_header');
			$this->load->view('project/v_tambah_project');
			$this->load->view('v_footer');
		}

		public function tambah_aksi(){
			// $no = $this->input->post('no');
			$judul = $this->input->post('judul');
			$client = $this->input->post('client');
			$ketua = $this->input->post('ketua');
			$start = $this->input->post('start');
			$end = $this->input->post('end');

			$data = array (
				// 'no' => $id_p,
				'judul' => $judul,
				'client' => $client,
				'ketua' => $ketua,
				'start' => $start,
				'end' => $end

			);

			$this->m_project->simpan_data($data);
			redirect('project');
		}

		public function edit($id_p){
			$where = array('id_p'=>$id_p);
			$data['project'] = $this->m_project->edit_data($where)->result();

			$this->load->view('v_header');
			$this->load->view('project/v_update_project',$data);
			$this->load->view('v_footer');
		}

		public function edit_aksi(){
			$id_p = $this->input->post('no');
			$judul = $this->input->post('judul');
			$client = $this->input->post('client');
			$ketua = $this->input->post('ketua');
			$start = $this->input->post('start');
			$end = $this->input->post('end');

			$data = array (
				// 'no' => $id_p,
				'judul' => $judul,
				'client' => $client,
				'ketua' => $ketua,
				'start' => $start,
				'end' => $end

			);

			$where = array('id_p'=> $id_p);

			$this->m_project->update_data($where, $data);
			redirect('project');
		
		}

		public function hapus($id_p){
			$where = array('id_p'=> $id_p);
			$this->m_project->hapus_data($where);
			redirect('project');

		}
	}