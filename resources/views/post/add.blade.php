@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/post/add') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('post_discription') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Discription</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="post_discription" value="{{ old('title') }}">

                                @if ($errors->has('post_discription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_discription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
			<div class="form-group{{ $errors->has('post_pictures') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                 {!! Form::file('post_pictures') !!}
								@if ($errors->first('post_pictures'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_pictures') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>
				
						
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Publish
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
