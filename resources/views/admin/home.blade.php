@extends('admin_template')

@section('content')

@include('profile_header')
       <div class="row">
        
          <!-- Box Comment -->
          {{ $i = 1 }}
          @foreach ($data as $post)
          
            <div class="col-md-6">
                
                <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block">
                  <img alt="User Image" src="{{ asset("/profile_pic/$post->profile_pic")}}" class="img-circle">
                  <span class="username"><a href="#">{{$post->name}}</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                  <button title="Mark as read" data-toggle="tooltip" class="btn btn-box-tool" type="button">
                    <i class="fa fa-circle-o"></i></button>
                  <button data-widget="collapse" class="btn btn-box-tool" type="button"><i class="fa fa-minus"></i>
                  </button>
                  <button data-widget="remove" class="btn btn-box-tool" type="button"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <img alt="Photo" src="{{ asset("/post_pictures/$post->post_pictures")}}" class="img-responsive pad">

                <p>{{ $post->post_discription }}</p>
                <button class="btn btn-default btn-xs" type="button"><i class="fa fa-share"></i> Share</button>
                <button class="btn btn-default btn-xs" type="button"><i class="fa fa-thumbs-o-up"></i> Like</button>
                <span class="pull-right text-muted">127 likes - {{ count($post->comments) }} comments</span>
              </div>
              <!-- /.box-body -->
             
             
              <div class="box-footer box-comments">
                @foreach ($post->comments as $comment)
                <div class="box-comment">
                  <!-- User image -->
                  <img alt="User Image" src="{{ asset("profile_pic/".$comment->profile_pic)}}" class="img-circle img-sm">

                  <div class="comment-text">
                        <span class="username">
                        {{$comment->name}}
                          <span class="text-muted pull-right">8:03 PM Today</span>
                        </span><!-- /.username -->
                        {{ $comment->comment }}
                  </div>
                  <!-- /.comment-text -->
                </div>
                @endforeach
                <!-- /.box-comment -->
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                  <form method="post" name="form{{ $i}}" id="form{{ $i}}" enctype="multipart/form-data" role="form" action="addcomment">
                  <img alt="Alt Text" src="{{ asset("profile_pic/".Auth::user()->profile_pic)}}" class="img-responsive img-circle img-sm">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input type="text" name="comment" placeholder="Press enter to post comment" class="form-control input-sm">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                </form>
              </div>
              <!-- /.box-footer -->
            </div>
                
            <!-- /.box -->
             </div>
          @endforeach
       
      
      </div>

@endsection