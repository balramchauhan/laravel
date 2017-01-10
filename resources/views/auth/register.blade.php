@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                    @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Work From Date</label>
                            <div class="col-md-2">
                                <select  class="form-control" name="from_month">
                                    <option value="">Months</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Fab">Fab</option>
                                    <option value="Mar">Mar</option>
                                </select>                               
                            </div>                           
                             <div class="col-md-2">                                 
                                <select  class="form-control" name="from_year">
                                    <option value="">Years</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                    <option>1993</option>
                                </select>                               
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Work To Date</label>
                            <div class="col-md-2">
                                <select  class="form-control" name="to_month">
                                    <option value="">Months</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Fab">Fab</option>
                                    <option value="Mar">Mar</option>
                                </select>                               
                            </div>                           
                             <div class="col-md-2">                                 
                                <select  class="form-control" name="to_year">
                                    <option value="">Years</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                    <option>1993</option>
                                </select>                               
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Work Profile</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="profile">
                            </div>
                        </div>
                        
                        
			<div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Profile Picture</label>
                            <div class="col-md-6">
                                 {!! Form::file('profile_pic') !!}
				@if ($errors->first('profile_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                                @endif                               
                            </div>
                        </div>		
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
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
