<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
class Hello extends Controller
{
    public function index()
    {
        $data['title'] = "Hello Hifzi";
        echo view('hello_view', $data);
    }
 
}