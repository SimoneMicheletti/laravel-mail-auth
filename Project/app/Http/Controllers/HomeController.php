<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\TestMail;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }

	public function sendMail(Request $request) {

		$request -> validate([
			"text" => "required|min:2|max:255"
		]);
		
		$text = $request -> text;

		Mail::to(Auth::user()->email) -> send(new TestMail($text));

		return redirect() -> back();

	}
}
