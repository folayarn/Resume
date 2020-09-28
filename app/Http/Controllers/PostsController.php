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


      $posts= Post::orderBy('id','desc')->paginate(6);
        return view('pages.project')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
'cover_image'=>'image|nullable|max:3999',
    'type'=>'required',
'description'=>'required'
        ]);
if($request->hasFile('cover_image')){
    $image_name = $request->file('cover_image')->getRealPath();
    Cloudder::upload($image_name, null);
    list($width, $height) = getimagesize($image_name);
$filenameTostore= Cloudder::show(Cloudder::getPublicId(),
["width" => $width, "height"=>$height]);

}else{

    $filenameTostore='back.jpg';
}



    $post= new Post;
    $post->title= $request->input('title');
    $post->user_id= auth()->user()->id;
    $post->image=$filenameTostore;
    $post->description=$request->input('description');
    $post->type=$request->input('type');
        $post->save();
    return redirect('/works')->with('success','project snippet created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Post::find($id);
        return view('posts.show')->with('posts',$posts);
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
            'cover_image'=>'image|nullable|max:3999',
                'type'=>'required',
            'description'=>'required'
                    ]);
            if($request->hasFile('cover_image')){
            $image_name = $request->file('cover_image')->getRealPath();
            Cloudder::upload($image_name, null);
            list($width, $height) = getimagesize($image_name);
       $filenameTostore= Cloudder::show(Cloudder::getPublicId(),
        ["width" => $width, "height"=>$height]);
            }else{

                $filenameTostore='back.jpg';
            }



                $post= Post::find($id);
                $post->title= $request->input('title');
                $post->user_id= auth()->user()->id;
                $post->image=$filenameTostore;
                $post->description=$request->input('description');
                $post->type=$request->input('type');
                    $post->save();
                return redirect('/works')->with('success','project snippet Updated');

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
