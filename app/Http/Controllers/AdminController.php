<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin_dashboard()
    {
      return view('admin.index');
    }

    public function menu()
    {
      $menus = menu::orderBy('created_at', 'DESC')->paginate(5); //this line of code will go to our menu table and get everything that is there and save it in the menus variable
      return view('admin.menu', compact('menus'));
      //as you are returning this view compact (merge) it with menus
    }
}
