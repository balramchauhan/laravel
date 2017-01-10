<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactFormRequest;
use App\User;
use App\Friend;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{        
    function index(Request $request){     
        $data = DB::table('posts')->select('name', 'email','profile_pic','post_pictures','post_discription','posts.id as id')
        ->Join('users', 'users.id', '=', 'posts.created_by')
        //->Join('comments', 'posts.id', '=', 'comments.post_id')
        ->get(); 
        foreach ($data as $post){      
            
            $commentsdata  = DB::table('comments')->select('name', 'profile_pic','comments.id as cid','comment')
        ->Join('users', 'users.id', '=', 'comments.user_id')->where('comments.post_id','=','11')->get();
            $post->comments = $commentsdata; 
            $data_array[] = $post;            
        }       
        return view('admin.home', ['data' => $data_array]);       
    } 
    
    function people(){     
        $data = DB::table('users')->select('users.id as uid','friends.created_at','friends.friend_id as fid','name', 'email','profile_pic')
        ->leftJoin('friends', 'users.id', '=', 'friends.user_id')
        //->where([['users.id','<>',Auth::user()->id]])
        ->get();        
        return view('admin.people', ['data' => $data]);       
    }
    function addfriend($friendid){     
        $data = array(); 
        $data['user_id'] = Auth::user()->id;   
        $data['friend_id']= $friendid;
        $newclient = new Friend($data);                
        $newclient->save();
        return Redirect('people');      
    }
    function editProfile(Request $request){     
        //$data = DB::table('users')->get();  
        $data = array();
        return view('admin.profile', ['data' => $data]);       
    }
    
    function about(){     
        //$data = DB::table('users')->get();  
        $data = array();
        return view('admin.about', ['data' => $data]);       
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    function updateProfile1(Request $data){      
        $this->validate($data, [
            'profile_pic' => 'required',
            'username' => 'required|unique:users',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',       
        ]);        
        $user = User::find(Auth::user()->id);
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->company = $data['company'];
        $user->profile = $data['profile'];
        $user->date_from = $data['from_month'].', '.$data['from_year'];
        $user->date_to = $data['to_month'].', '.$data['to_year'];        
        $user->save();
        Session::flash('success', 'Upload successfully'); 
        return Redirect('admin');
        
    }
       
}
