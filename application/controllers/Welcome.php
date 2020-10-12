<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
       $this->load->helper(array('html','url'));
    }


	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('user/home');
		$this->load->view('header/footer.php');
	}
	public function shop()
	{
		$this->load->view('header/header');
		$this->load->view('user/shop');
		$this->load->view('header/footer.php');
	}
	public function blog()
	{
		$this->load->view('header/header');
		$this->load->view('user/blog');
		$this->load->view('header/footer.php');
	}
	public function contact()
	{
		$this->load->view('header/header');
		$this->load->view('user/contact');
		$this->load->view('header/footer.php');
	}
	public function blog_details()
	{
		$this->load->view('header/header');
		$this->load->view('user/blog_details');
		$this->load->view('header/footer.php');
	}
	public function shopping_cart()
	{
		$this->load->view('header/header');
		$this->load->view('user/shopping_cart');
		$this->load->view('header/footer.php');
	}
	public function checkout()
	{
		$this->load->view('header/header');
		$this->load->view('user/checkout');
		$this->load->view('header/footer.php');
	}
	public function faq()
	{
		$this->load->view('header/header');
		$this->load->view('user/faq');
		$this->load->view('header/footer.php');
	}
	public function register()
	{
		$this->load->view('header/header');
		$this->load->view('user/register');
		$this->load->view('header/footer.php');
	}
	public function login()
	{
		$this->load->view('header/header');
		$this->load->view('user/login');
		$this->load->view('header/footer.php');
	}
}
