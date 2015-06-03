<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Article;
use App\Page;
use App\User;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// returns the admin homepage
//        return "hello";
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
	public function create()
	{
		//
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
        
        return redirect('admin');
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
