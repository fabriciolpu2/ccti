<?php namespace ccti\Http\Controllers;

use ccti\Http\Requests;
use ccti\Http\Controllers\Controller;

use Request;
use Auth;
class LoginController extends Controller {

	public function form(){
		return view('auth.login');
	}

	public function login(){
		$credenciais = Request::only('email','password');

		if (Auth::attempt($credenciais)){
			return redirect('/alunos');
		}
		return 'usuário não existe';

	}
}
