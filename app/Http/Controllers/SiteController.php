<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index() {

        $name = "Lucas";
        $habits = ["Ler, correr, estudar, academia"];

        return view("home", ["name" => $name, "habits" => $habits]);
    }

}
