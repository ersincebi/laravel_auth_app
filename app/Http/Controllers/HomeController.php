<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index(){
		return view('home');
	}

	public function users(){
		$users = User::all();
		$count = 0; // user count who havent verificate their emails

		foreach ($users as $user) {
			$user->loggingInTime = "Haven't verified yet.";
			// the time between login and after verification
			if($user->email_verified_at){
				$dt1 = $this->toCarbon($user->email_verified_at);
				$dt2 = $this->toCarbon($user->created_at);

				$user->loggingInTime = $dt1->shortAbsoluteDiffForHumans($dt2);
				$diffDays = $dt1->diffInDays($dt2);
				if($diffDays >= 1)
					$count++;
			}
			$user->isOnline = "Offline";
			if($user->isOnline()) $user->isOnline = "Online";
		}

		return view('users', [
			'users' => $users,
			'count' => $count
		]);
	}

	protected function toCarbon(string $date){
		return Carbon::createFromFormat('Y-m-d H:s:i', $date);
	}
}
