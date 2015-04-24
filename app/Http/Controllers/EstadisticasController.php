<?php namespace App\Http\Controllers;

class EstadisticasController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('estadisticas');
	}

	public function ver()
	{
		//$user = DB::table('users')->where('name', 'John')->first();
		//$users = DB::table('users')
        //           ->where('votes', '>', 100)
        //            ->orWhere('name', 'John')
        //           ->get()

        /*$users = DB::table('users')
                    ->orderBy('name', 'desc')
                    ->groupBy('count')
                    ->having('count', '>', 100)
                    ->get();
                    */
		return view('ver');
	}

}
