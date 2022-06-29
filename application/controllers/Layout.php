<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Layout extends CI_Controller {
		public function is_user_login(){
			
			if (isset($_SESSION['id']) && $_SESSION['id'] != '') {
				return true;
			}else{
				unset($_SESSION['id']);
				return false;
			}
		}

		public function redirect_to_login(){
			redirect('Login', 'auto');
			exit;
		}
		
	}
?>
