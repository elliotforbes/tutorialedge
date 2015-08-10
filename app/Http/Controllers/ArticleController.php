<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use DB;
use App\Article;
use App\Page;
use Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::orderBy('id', 'DESC')->paginate(15);
        return view('admin/articles/index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Page::get();
        return view('admin/articles/create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = Request::all();
        
        $article = new Article;
        $input = Request::all();
        $file = Request::file('image');
        
        if($file){
            $imageName = $article->image_url . '.' . Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(base_path() . '/public/uploads/articles/', $imageName);
        }
        $article->fill($input)->save();
        
        return redirect('admin/articles');
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
        if(is_null($article) || $article->post_status)
        {
            abort(404);   
        }
        $page = Page::where('cat_id', '=', $article->cat_id)->get()->first();       
        return view('static.single', compact('article', 'articles', 'page'));
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$article = Article::whereSlug($slug)->get()->first();
        
        return view('admin/articles/edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		$article = Article::whereSlug($slug)->get()->first();
        $input = Request::all();
        $article->fill($input)->save();
        return redirect('admin/articles/' . $slug . '/edit');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		$article = Article::whereSlug($slug)->get()->first();
        
        if($this->isAdmin()){
            $article->delete();

            return redirect('admin/articles');
        } else {
            return redirect('');   
        }
	}

}
