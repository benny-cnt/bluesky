<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\HttpController;

class UserController extends Controller
{
	public function index(){
		$users = DB::table('YRT')->paginate(15);
		foreach ($$users as $item) {
			# code...
			echo $item;
		}
		//return view('index.table')
	}
}

?>