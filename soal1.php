<?php
class kelas{
	public $guru,$siswa,$kelas;
	public function __construct($guru,$siswa,$kelas){
		$this->guru=$guru;
		$this->siswa=$siswa;
		$this->kelas=$kelas;
	}
	public function get_guru(){
		return $this->guru;
	}
	public function get_siswa(){
		return $this->siswa;
	}
	public function get_kelas(){
		return $this->kelas;
	}
	
}
?>