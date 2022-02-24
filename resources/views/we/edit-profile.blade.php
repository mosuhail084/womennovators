@extends('we.layouts.layout') @section('front_content')
    <div class="main-wraper">
        <div class="container">
            <div class="back"><a href="{{ route('we.profile') }}" class="back-btn"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> back</a></div>
            <div class="edit-banner">
                <div class="edit-update-photo">
                    <div id="profile" class="edit-photo">
                        <div class="dashes"></div>
                        <!--<img src="images/femail-img.png">-->
                    </div>
                    <!--<input class="input-file" type="file">-->
                    <div class="edit-btn">
                        <div style="position: relative">
                            <input type="file" id="mediaFile" />
                            <span class="file-custom"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Update</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="update">
                <div class="btn-posi">
                    <span class="file-custom"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</span>
                </div>
            </div>
            <form class="login-form" action="{{ route('update.profile') }}" method="post"
              enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name*</label>
                    
                    <input type="text" name="name" placeholder="" class="form-control" >
                  </div>
                </div>
                {{-- <div class="col-sm-4">
                    <div class="form-group">
                        <label>Username</label>
                        
                        <input type="text" name="username" placeholder="" class="form-control">
                      </div>

                </div> --}}
                {{-- <div class="col-sm-4">
                    <div class="form-group">
                        <label>Date of birth</label>
                        
                        <input type="date" name="dob" placeholder="" class="form-control">
                      </div>

                </div> --}}

              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="about">Bio</label>
                      
                      <textarea name="about_us" id="about" style="height: 100px;" class="form-control"></textarea>
                    </div>
                  </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Location</label>
                    
                    <input type="text" name="address" placeholder="" class="form-control">
                  </div>
                </div>
                
              </div>
              
              
              <div class="profile-img-rt">
                <button class="edit-profile" type="submit"> SAVE</button>
              </div>


            </form>
        </div>

    </div>
@endsection

<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
