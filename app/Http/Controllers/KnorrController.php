<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KnorrController extends Controller
{
    protected function index(){
        return $this->view();
    }

    protected function questions(){
        return $this->view();
    }

    protected function result($param = ''){
        if($param == ''){
            return redirect('/knorr/index');
        }
        extract(json_decode($param, 1));
        $arr_return =  [];
        $data = $this->db->table('knorr_list_picture')->get();
        $arr_return['resultImgWeb'] = "/knorr/images/result/result_img$Q1-$Q2.jpg";
        $arr_return['resultImgMobile'] = "/knorr/images/result/result_img$Q1-$Q2"."m.jpg";
        foreach($data as $k => $v){
            if($v->Q1 == $Q1){
                if($v->Q2 == $Q2){
                    $arr_return['resultUri'] = $v->sno;
                    continue;
                }
                $arr_return['recommendList'][] = $v;
                continue;
            }
            $arr_return['moreFood'][] = $v;
        }
        return view("$this->project.$this->path", ['data' => $arr_return]);
    }

    protected function teach(){
        return $this->view();
    }

    protected function recipelist(){
        $type = [
            1 => 'meat',
            2 => 'seafood',
            3 => 'vegetables'
        ];
        $data = $this->db->table('knorr_list_picture')->get();
        foreach($data as $k => $v){
            $data[$k]->type = $type[$v->type];
        }
        return view("$this->project.$this->path", ['data' => $data, 'type' => $type]);
    }

    protected function recipe($param = ''){
        if($param == ''){
            return redirect('/knorr/recipelist');
        }
        $data = $this->db->table('knorr_list_picture')->where('sno', $param)->first();
        $recipeData = $this->db->table('knorr_list')->where('pic_sno', $param)->first();
        if($data->img_url == 1){
            // die(dd($recipeData));
            return view("$this->project.recipe1", ['data' => $recipeData]);
        }
        return view("$this->project.recipe2", ['data' => $recipeData]);
    }

    protected function sales(){
        $data = $this->db->table('knorr_product_description')->get();
        return view("$this->project.$this->path", ['data' => $data]);
    }

    protected function form(){
        return $this->view();
    }

    protected function saveFormData(){
        unset($this->post['ipt_detail']);
        $this->post['ipt_type'] = json_encode($this->post['ipt_type']);
        $this->db->table('knorr_form')->insert($this->post);
    }

    protected function congratulations(){
        return $this->view();
    }

    protected function event(){
        return $this->view();
    }
}
