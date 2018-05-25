<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		// return 'category...';
		$catalogs = Category::where('parent_id', '=', 0)->get();
		$childcatas = Category::where('parent_id', '=', 1)->get();
		$categories = Category::paginate(3);
		return view('admins.categorylist', compact('categories', 'catalogs', 'childcatas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//where('parent_id', '=', 0)->get()
		$catalogs = Category::all();
		$parents = $catalogs->pluck('title', 'id');
		$categories = Category::paginate(3);
		return view('admins.createcategory', compact('categories', 'catalogs', 'parents'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Requests\CreateCategoryRequest $request) {
		//

		dd($request->all());
		return redirect('/admins/categories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		return 'show category';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		// $catalogs = array();
		// $catalogs = Category::pluck('title', 'id');
		$catalogs = Category::where('parent_id', '=', 0)->get();
		// foreach ($catalogs as $cata) {
		// 	echo $cata->title . ':' . $cata->id . '<br>';
		// 	$children = Category::where('parent_id', '=', $cata->id)->get();
		// 	foreach ($children as $child) {
		// 		echo '　|-' . $child->title . ':' . $child->id . '<br>';
		// 	}
		// }
		// $catalogs = Category::with('allChildrenCategories')->first();
		// $catalogs = $catas->allChildrenCategories;
		// dd($catalogs);
		$category = Category::findOrFail($id);
		return view('admins.editcategory', compact('category', 'catalogs'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Requests\CreateCategoryRequest $request, $id) {
		//
		//
		return 'update';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//

	}
}
