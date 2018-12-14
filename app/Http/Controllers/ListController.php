<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ListEntry;

class ListController extends Controller
{
    public function index(){
        $entries = ListEntry::all();
        return view('lista', compact('entries'));
    }
}
