<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $post;
    protected $get;
    protected $request;
    protected $project;
    protected $path;
    protected $db;

    public function __construct(request $request){
        $path = explode('/', $request->getPathInfo());
        $this->post = $request->input();
        $this->get = $request->query();
        $this->request = $request;
        $this->project = $path[1];
        $this->path = $path[2];
        $this->db = DB::connection($this->project);
    }

    protected function view(){
        return view("$this->project.$this->path");
    }
}
