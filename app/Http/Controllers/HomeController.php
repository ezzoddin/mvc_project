<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        echo "index method in Home Controller";
    }

    public function create()
    {
        echo "create method in Home Controller";
    }

    public function store()
    {
        echo "store method in Home Controller";
    }

    public function edit($id)
    {
        echo "edit method in Home Controller";
    }

    public function update($id)
    {
        echo "update method in Home Controller";
    }

    public function destroy($id)
    {
        echo "update method in Home Controller";
    }
}