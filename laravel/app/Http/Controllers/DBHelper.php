<?php
namespace mytest;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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