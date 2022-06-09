<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_berita;


class Dashboard extends Controller {

    public function index()  {   
        $session = session();
        $data['title'] = 'SEVIMA';
        $berita   = new M_berita();        
        $data['dtberita'] = $berita->getBerita();  
        $data['username'] = $session->get('user_name');
        $data['login'] = $session->get('logged_in');
        // var_dump($data);
        // die();
        echo view('header', $data);
        echo view('welcome', $data);
        echo view('footer');
    }

    public function show()  {
        $session = session();
        //echo "Welcome back, ".$session->get('user_name');
        $data['title'] = 'Tes SEVIMA';
        $data['username'] = $session->get('user_name');
        echo view('welcome', $data);
    }

    

}