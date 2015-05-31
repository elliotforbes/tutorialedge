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
    
    
    
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create');
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
        
        return redirect('Programming_Design_Patterns');
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
        
        if(is_null($article))
        {
            abort(404);   
        }
        
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
        $course = DB::table('courses')->find($id);
        $course->delete();
	}

}
