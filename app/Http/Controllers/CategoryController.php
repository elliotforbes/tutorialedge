<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Page;
use App\Article;
use DB;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
    {
        $page = page::whereSlug($slug)->get();
        if($slug == "LWJGL3"){
            $articles = DB::select(DB::raw('select * from articles where cat_id = 2;'));
        } 
        else if($slug == "programming_design_concepts"){
           $articles = DB::select(DB::raw('select * from articles where cat_id = 1;'));
        }
        return view('page.index', compact('articles', 'page'));
    }

    public function showArticle($slug, $slug2)
    {
        $page = page::whereSlug($slug)->get();
        $article = Article::whereSlug($slug2)->get();
        return view('static.single', compact('article'));
    }
    
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
