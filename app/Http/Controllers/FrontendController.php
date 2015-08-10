<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use App\Page;
use App\Article;

class FrontendController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Page::get();
        $articles = Article::orderBy('id', 'DESC')->get(8);
        return view('index', compact('courses', 'articles'));
	}
    
    public function contact()
    {
        return view('static.contact');   
    }
    
    public function about()
    {
        return view('static.about');   
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
		$article = Article::whereSlug($slug)->get()->first();
        $articles = DB::select(DB::raw('select * from articles where cat_id = ' . $article->cat_id . ' ORDER BY title;'));
        if(is_null($article))
        {
            abort(404);   
        }
        if($article['post_status'] == "published")
        {
            
            $page = Page::where('cat_id', '=', $article->cat_id)->get()->first();
    //        $page = DB::select(DB::raw('select * from pages where cat_id = ' . $article->cat_id . ';'));


            return view('static.single', compact('article', 'articles', 'page', 'nextArt', 'prevArt'));
        }
        else 
        {
         abort(404);   
        }
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
