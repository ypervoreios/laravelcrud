<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        $users = People::with("school")->orderBy("created_at","desc")->paginate(10);

        return view('users.index', ["users" => $users]);
    }

    public function show($id){
        $user = People::with("school")->findOrFail($id);
        return view('users.show', ['user' => $user]);
        }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        }
}


