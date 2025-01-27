<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use Hash;

class UserController extends Controller
{
	public function login(JWTAuth $jwt, Request $request)
	{
		// User::first()->update(['password'=>Hash::make('123456')]);

		if ($token = $jwt->attempt($request->only('phone', 'password'))) {
			$user = User::wherePhone($request->phone)
				->first();

			return [
				'user' => $user,
				'token' => $token
			];
		};

		return 'hata';
	}

	public function register(Request $request, JWTAuth $jwt)
	{

		if (User::wherePhone($request->phone)->exists()) {
			return ['msg' => 'Böyle bir kullanıcı kayıtlı.'];
		}
		$request->validate([
			'name'      => 'required',
			'phone'     => 'required',
			'password'	=> 'required',
		]);

		$user = User::create([
			'name' => $request->name,
			'phone' => $request->phone,
			'password' => Hash::make($request->password)
		]);

		$user->token = $jwt->fromUser($user);
		return ['msg' => 'kayit olundu', 'user' => $user];
	}



	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user)
	{
		//
	}
}
