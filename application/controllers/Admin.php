<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $data = array(
			'title' => "Dashboard"
		);
		$this->load->view('admin/dashboard', $data);
	}

    public function login()
	{
        $data = array(
			'title' => "Login"
		);
		$this->load->view('admin/login', $data);
	}

    public function menusatu()
	{
        $data = array(
			'title' => "Menu 1"
		);
		$this->load->view('admin/menusatu', $data);
	}
    public function tabel()
	{
		$data = array(
			'title' => "Tabel"
		);
		$this->load->view('admin/tabel', $data);
	}

    public function akun()
	{
		$data = array(
			'title' => "Akun"
		);
		$this->load->view('admin/akun', $data);
	}
}
