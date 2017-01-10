@extends('admin_template')

@section('content')

@include('profile_header')
<div class="row">
        <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      <pre>
                    @foreach ($data as $people)
                    {{ print_r($people) }}
                    @if($people->fid!==Auth::user()->id and $people->fid > 0)
                    <li>
                      <img src="{{ asset("profile_pic/".$people->profile_pic)}}" alt="User Image">
                      <a class="users-list-name" href="#">{{ $people->name }}</a>
                      <span class="users-list-date"><a href="/addfriend/{{$people->uid}}">Add Friend</a></span>
                    </li>
                    @endif
                    @endforeach
                   </pre>
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
        </div>
    
         <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      <pre>
                    @foreach ($data as $people)
                    {{ print_r($people) }}
                    @if($people->fid==Auth::user()->id and $people->fid > 0)
                    <li>
                      <img src="{{ asset("profile_pic/".$people->profile_pic)}}" alt="User Image">
                      <a class="users-list-name" href="#">{{ $people->name }}</a>
                      <span class="users-list-date"><a href="/addfriend/{{$people->uid}}">Add Friend</a></span>
                    </li>
                    @endif
                    @endforeach
                   </pre>
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
        </div>
</div>
@endsection