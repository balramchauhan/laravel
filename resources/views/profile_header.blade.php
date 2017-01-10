<div class="row">
    <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">{{ ucfirst(Auth::user()->username)}}</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img alt="User Avatar" src="{{ asset("profile_pic/".Auth::user()->profile_pic)}}" class="img-circle">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-2 border-right">
                  <div class="description-block">
                    <h5 class="description-header">
                        @if (count($data) > 0)
                           {{ count($data) }} Posts
                        @else
                            No Post
                        @endif
                    </h5>
                    <span class="description-text"><a href="post/add">Add posts</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">Friends</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2 border-right">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text"><a href="about">About</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-2 border-right">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PROJECTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-2 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3</h5>
                    <span class="description-text">PREVIOUS COMPANIES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-2">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
    </div>
</div>