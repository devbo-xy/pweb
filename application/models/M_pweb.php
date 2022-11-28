<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pweb extends CI_Model {
    function read(){
        $this->db->order_by('nama_karyawan', 'desc');
        return $this->db->get('tbl_pegawai')->result_array();
    }
    function create() {
        // $nilai1 = $this->input->post('n_pert1');
		// $nilai2 = $this->input->post('n_pert2');
		// $nilai3 = $this->input->post('n_pert3');
		$kontrak = $this->input->post('n_kontrak');
		$jabatan = $this->input->post('n_jabatan');
		// $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;
		// if ($rata <= 75) {
		// 	$keterangan = "Tidak Lulus";
		// } elseif ($rata >= 75){
		// 	$keterangan = "Lulus";
		// } else{
		// 	$keterangan = "Nilai Tidak Valid";
		// }

		$data = [
			'nama_karyawan' => $this->input->post('nama_mhs'),
			// 'nilai1' => $nilai1,
			// 'nilai2' => $nilai2,
			// 'nilai3' => $nilai3,
			// 'nilai4' => $nilai4,
			'kontrak' => $kontrak,
			'jabatan' => $jabatan
		];

		$this->db->insert('tbl_pegawai', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', 'Ditambah');
			redirect('pweb','refresh');
        }
    }

	function get_row($id) {
		return $this->db->get_where('tbl_pegawai', ['id_nilai' => $id])->row_array();
	}
	function update() {
		$kontrak = $this->input->post('n_kontrak');
		// $nilai2 = $this->input->post('n_pert2');
		// $nilai3 = $this->input->post('n_pert3');
		// $nilai4 = $this->input->post('n_pert4');
		// $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;
		// if ($rata <= 75) {
		// 	$keterangan = "Tidak Lulus";
		// } elseif ($rata >= 75){
		// 	$keterangan = "Lulus";
		// } else{
		// 	$keterangan = "Nilai Tidak Valid";
		// }

		$data = [
			'nama_karyawan' => $this->input->post('nama_mhs'),
			// 'nilai1' => $nilai1,
			// 'nilai2' => $nilai2,
			// 'nilai3' => $nilai3,
			// 'nilai4' => $nilai4,
			// 'rata' => $rata,
			// 'keterangan' => $keterangan
			'kontrak' => $kontrak,
			'jabatan' => $jabatan

		];

		$this->db->where('id_nilai', $this->input->post('id_nilai'));
		$this->db->update('tbl_pegawai', $data);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', 'Diubah');
			redirect('pweb','refresh');
	}
}

	function delete($id){
		$this->db->where('id_nilai', $id);
		$this->db->delete('tbl_pegawai');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', 'Dihapus');
			redirect('pweb','refresh');
	}
}
}