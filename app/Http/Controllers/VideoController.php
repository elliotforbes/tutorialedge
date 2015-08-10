<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use App\Video;

class VideoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::orderBy('id', 'DESC')->paginate(15);
        return view('admin/videos/index', compact('articles'));
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
		$input = Request::all();
        
        $video = new Video;
        $input = Request::all();
        $file = Request::file('image');
        
        if($file){
            $imageName = $article->image_url . '.' . Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(base_path() . '/public/uploads/articles/', $imageName);
        }
        
        $article->published_at = Carbon::now();
        $article->fill($input)->save();
        
        return redirect('admin/videos');
	}
    
    public function single()
    {
        return view('static.video');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$video = Video::whereSlug($slug)->get()->first();
        if(is_null($article) || $article->post_status)
        {
            abort(404);
        }
        
        return view('static.video', compact('video'));
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
