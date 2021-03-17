<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use JD\Cloudder\Facades\Cloudder;
class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void

  *  public function __construct()
  *  {
  *      $this->middleware('auth',['except'=>['project']]);
  *  }
*/


    public function index()
    {


      $posts= Post::orderBy('id','desc')->get();


        return $posts;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
'title'=>'required',
    'url'=>'required',
        ]);


    $post= new Post;
    $post->title= $request->input('title');
    $post->url=$request->input('url');
        $post->save();
    return redirect('/create')->with('success','project snippet created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Post::find($id);
        return view('posts.edit')->with('posts',$posts);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'url'=>'required',

                    ]);



                $post= Post::find($id);
                $post->title= $request->input('title');
                $post->url=$request->input('url');
                    $post->save();
                return redirect('/create')->with('success','project snippet Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts= Post::find($id);
        $posts->delete();
        return redirect('/posts')->with('success','The post is removed sucessfully');
    }
}
