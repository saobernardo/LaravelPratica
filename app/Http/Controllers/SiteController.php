<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SiteController extends Controller
{
    public function index(){
        $data = ['nombre' => 'Laravral'];
        
        return view('new', $data);
    }

    public function users(Request $req, Response $res){
        $data = [
            'quantidade' => $req->qte
        ];

        return view('users', $data);
    }
}
