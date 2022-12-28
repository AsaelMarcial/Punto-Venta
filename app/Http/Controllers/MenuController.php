<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{

	public function index(Request $request)
	{
		$data = Product::orderBy('id','DESC')->paginate();
		return view('menu.index', compact('data'))
			->with('i', ($request -> input('page', 1) -1) *5);
	}
}