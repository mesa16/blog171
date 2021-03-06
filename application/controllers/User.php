l<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  public function register(){
    $this->load->template('form_register');
  }
  public function masuk(){
    $this->load->template('masuk');
  }

  public function regsubmit(){
    $this->user_model->register();
    redirect("user/masuk");
  }


public function signin(){
    $email = $this->input->post('email');
    $pass = $this->input->post('password');

    if ($user = $this->user_model->user( $email ) ) {
      if ( $user['password'] == md5( $pass ) ) {
        $this->session->uid = $user['user_ID'];

        redirect('home');
        # code...
      } else {
        echo "Login Failed";
        redirect('user/masuk');
      }
    }else {
        echo "tidak terdaftar";
      }
      # code...
    }

    public function signout(){
      $this->session->sess_destroy();

      redirect('welcome');
    }

    public function about( $user_ID ) {
    $data['about1'] = $this->user_model->about1( $user_ID );
    $data['about2'] = $this->user_model->about2( $user_ID );
    $this->load->template( 'about', $data );
    }


}

 ?>
