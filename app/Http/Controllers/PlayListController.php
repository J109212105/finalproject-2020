<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PlayListController extends Controller
{
    public function index() {
        $data = \App\Models\PlayList::all();
        return view("PlayList", compact('data'));
    }

    public function remove($id) {
        PlayList::where("id", $id)->delete();
        return redirect("/playlist/");
    }

    public function append(Request $req) {
        $title = $req->input('title');
        $playlist = new PlayList;
        $playlist->name = $title;
        $playlist->save();
        return redirect('/playlist/');
    }
}
