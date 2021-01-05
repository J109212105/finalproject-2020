<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Headlines;

class MainController extends Controller
{
    public function index() {
    	$titles = Headlines::all();
    	return view("index", compact('titles'));
    }

    public function insert(Request $req) {
    	$title = $req->input('title');
    	$data = new Headlines;
    	$data->title = $title;
    	$data->save();
    	return redirect("/");
	}

	public function remove($id) {
        Headlines::where("id", $id)->delete();
        return redirect("/");
    }

    public function logout() {
    	Auth::logout();
    	return redirect("/");	
	}
	
	public function updateProfile(Authenticatable $user) {
		if ($request->user())
        {
			$loginuser=$user->getId();
            return "loginuser";
		}
	}
}