<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author nugrahantoro
 */
class User extends CI_Controller {
    //put your code here
    function index(){
        $this->load->view('pengelola/user');
    }
}
