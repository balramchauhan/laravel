<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Auth;
class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('post.add');
    }
	
	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
         Auth::user()->id;
        return view('post.add');
    }
    
    public function like(Request $request)
    {
        $data = $request->all(); 
        $data['user_id'] = Auth::user()->id;        
        $newclient = new Like($data);                
        $newclient->save();
        return Redirect('admin');
    }
    
    public function savePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_discription' => 'required|unique:posts|max:255',
            'post_pictures' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/add')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            
            $data = $request->all(); 
            if ($request->file('post_pictures')->isValid()) {
                $destinationPath = 'post_pictures'; // upload path
                $extension = $request->file('post_pictures')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $request->file('post_pictures')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                
                $data['post_pictures'] = $fileName;    
            }                           
               
            $data['created_by'] = Auth::user()->id;

            $newclient = new Post($data);                
            $newclient->save();

            Session::flash('success', 'Upload successfully'); 
            return Redirect('admin');
            
        }

        // Store the blog post...
    }
    
    public function addComment(Request $request)
    {        
        $data = $request->all(); 
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = time();
        $newclient = new Comment($data);                
        $newclient->save();
        return Redirect('admin');
    }
    
    
}
