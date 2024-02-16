<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FukushimaController extends Controller
{
    protected function index(){
        return $this->view();
    }

    protected function qa(){
        $data = $this->db->table('questions')->get();
        $total = count($data);
        return view("$this->project.$this->path", ['data' => $data, 'total' => $total]);
    }

    protected function result($param){
        return view("$this->project.$this->path-$param");
    }

    protected function form(){
        return $this->view();
    }

    protected function saveFormData(){
        $this->db->table('form')->insert($this->post);
    }
}
