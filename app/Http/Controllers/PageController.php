<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Article;
use App\Category;
use App\Course;
use App\Page;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        
        $courses = Page::get();
        return view('index', compact('courses'));
	}
    
    public function designpatternsindex()
    {
        $articles = Article::get();
        
        return view('static.category', compact('articles'));
    }
    
    public function showCat($id)
    {
        $courses = Course::find($id);
        
        return view('index', compact('courses'));
    }
    
    public function single()
    {
        return view('static.single2');   
    }
    
    public function login()
    {
        return view('login');   
    }
    
    
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
        $input = Request::all();
        
        $article = new Article;
        
        $article->title = $input['title'];
        $article->body = $input['body'];
        $article->excerpt = $input['excerpt'];
        $article->published_at = time();
        $article->slug = "slug";
        $article->cat_id = 1;
        
        $article->save();
        
        return redirect('admin.index');
	}
    
    public function contact()
    {
        return view('static.contact');   
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
        
//        if(is_null($article))
//        {
//            abort(404);   
//        }
        $page = Page::where('cat_id', '=', $article->cat_id)->get()->first();
//        $page = DB::select(DB::raw('select * from pages where cat_id = ' . $article->cat_id . ';'));
       
        
        return view('static.single', compact('article', 'articles', 'page'));
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
        $course = DB::table('courses')->find($id);
        $course->delete();
	}

}
