<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoriyukaiController extends Controller
{
    private function get_role_data($param){
        return $this->db->table('moriyukai_roles')->where('id', $param)->first();
    }

    protected function index(){
        $arr_return['data'] = $this->db->table('moriyukai_roles')->get();;
        return view("$this->project.$this->path", $arr_return);
    }

    protected function info($param){
        $arr_return['role_data'] = $this->get_role_data($param);
        $arr_return['info_data'] = $this->db->table('moriyukai_info')->where('roles_id', $param)->get();
        return view("$this->project.$this->path", $arr_return);
    }

    protected function qa($param){
        $arr_return['role_data'] = $this->get_role_data($param);
        $question_data = $this->db->table('moriyukai_question')->where('id', $param)->first();
        $arr_return['ans'] = $question_data->ans;
        $question = [];
        foreach($question_data as $k => $v){
            if($k == 'Q1' || $k == 'Q2' || $k == 'Q3'){
                foreach(explode("\n", $v) as $ke => $ve){
                    switch($ke){
                        case '0':
                            $question[$k]['topic'] = $ve;
                        case '2':
                            $question[$k]['Q1'] = $ve;
                        case '3':
                            $question[$k]['Q2'] = $ve;
                        case '4':
                            $question[$k]['Q3'] = $ve;
                    }
                }
            }
        }
        $arr_return['question'] = $question;
        return view("$this->project.$this->path", $arr_return);
    }

    protected function form(){
        return $this->view();
    }

    protected function save_data(){
        $this->db->table('moriyukai_form')->insert($this->post);
    }

    protected function share(){
        return $this->view();
    }
}
