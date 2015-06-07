<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Auth;
use App\Article;
use App\Page;
use App\User;
use App\Category;
use Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('admin.index');
	}
    
    public function articles()
    {
        $articles = Article::get();
        return view('admin.articles', compact('articles'));   
    }
    
    public function login()
    {
        return view('admin.login');   
    }
    
    public function pages()
    {
        $pages = Page::get();
        return view('admin.pages', compact('pages'));
    }
    
    public function users()
    {
        $users = User::get();
        return view('admin.users', compact('users'));
    }
    
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function addArticle()
	{
		$categories = Page::get();
        return view('admin.create', compact('categories'));
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
        $article->image_url = $input["img_url"];
        $article->slug = $input["slug"];
        $article->cat_id = 1;
        
        $article->save();
        
        return redirect('admin/articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editArticle($slug)
	{
		//
        $article = Article::whereSlug($slug)->get()->first();
        
        return view('admin/edit', compact('article'));
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
        
        return redirect('admin/articles');
        
	}
    
    public function destroy($slug)
    {
        $article = Article::whereSlug($slug)->get()->first();
        
        $article->delete();
        
        return redirect('admin/articles');
    }


}
