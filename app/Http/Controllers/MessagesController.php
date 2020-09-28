<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['store']]);

    }

    public function index()
    {

        $message= Message::orderBy('id','desc')->paginate(10);

        return view('pages.messageView')->with('message',$message);

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

            'name'=>'required',
            'email'=>'required',
'title'=>'required',
'body'=>'required'

        ]);
        $message= new Message;
        $message->name= $request->input('name');
        $message->email= $request->input('email');
        $message->title= $request->input('title');
        $message->body= $request->input('body');
        $message->save();
        return redirect('/contact#form')->with('success','message sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message=Message::find($id);
        $message->delete();
        return redirect('/messages')->with('success',
         'this post that was not necessary was deleted succesfully');


    }
}
