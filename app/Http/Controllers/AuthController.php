<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function register()
	{
		return view('auth/register');
	}

	public function registerSimpan(Request $request)
	{
		Validator::make($request->all(), [
			'nik' => 'required | min:5',
			'nama' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		])->validate();

		User::create([
			'nik'=> $request->nik,
			'dept_id' => '1',
			'brach_id' => '0',
			'name' => $request->nama,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'password2' => Hash::make($request->nama),
			'password3' =>$request->password,
			'team_id' => '1',
			'role' => '1',
			'level' => 'Admin',
			'active' => '1'
		]);

		return redirect()->route('login');
	}

	public function login()
	{
		return view('auth/login');
	}

	public function loginAksi(Request $request)
	{
		Validator::make($request->all(), [
			'email' => 'required|email',
			'password' => 'required'
		])->validate();

		if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
			throw ValidationException::withMessages([
				'email' => trans('auth.failed')
			]);
		}

		$request->session()->regenerate();

		return redirect()->route('dashboard');
	}

	public function logout(Request $request)
	{
		Auth::guard('web')->logout();

		$request->session()->invalidate();

		return redirect('/');
	}
}
