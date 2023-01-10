<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
	public $products = array();

	public function index(Request $request)
	{
		$data = Product::orderBy('id','DESC')->paginate();
		return view('menu.index', compact('data'));
	}

	public function addToCart($product) {
		echo $product;
		$data = Product::orderBy('id','DESC');
		return view('menu.index', compact('data'));
	}
}