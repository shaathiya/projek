<?php

	class M_project extends CI_Model
	{
		//fungsi tampil data
		function get_data(){
			return $this->db->get('project');
		}

		function simpan_data($data){
			$this->db->insert('project',$data);
		}

		function edit_data($where){
			return $this->db->get_where('project', $where);
		}

		function update_data($where, $data){
			$this->db->where($where);
			$this->db->update('project', $data);
		}

		function hapus_data($where){
			$this->db->delete('project',$where);
		}

	}
?>