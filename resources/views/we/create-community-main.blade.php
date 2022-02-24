@extends('we.layouts.layout') @section('front_content')

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 to_animate" data-animation="fadeInUp">

        </div>
        <div class="col-sm-8 to_animate" data-animation="fadeInRight">
          <div class="mommunity-main">
            <div class="">
              <h2>Create a Community</h2>
            </div>
            <form class="login-form" action="{{ route('community.insert') }}" method="post"
              enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name*</label>
                    <p>Name of the community. This can’t be changed later.</p>
                    <input type="text" name="name" placeholder="" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6"></div>

              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>City*</label>
                    <p>Name of the city where will you will conduct any physical events for your community</p>
                    <input type="text" name="city" placeholder="" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Country*</label>
                    <p>Name of the city where will you will conduct any physical events for your community</p>
                    <select name="country" value="{{ old('country') }}" class="select-icon">
                      @foreach ($countries as $country)
                        <option value="{{ $country->country_name }}">{{ $country->country_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Industry*</label>
                    <p>Which industry/sector does this community belong to</p>

                    <select name="industry" class="select-icon">
                      @foreach ($industries as $industry)
                        <option value="{{ $industry->name }}">{{ $industry->name }}</option>
                      @endforeach
                    </select>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="about">About*</label>
                    <p>Write about this community</p>
                    <textarea name="about" id="about" style="height: 100px;" class="form-control" required></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Logo</label>
                    <p>Logo of the community</p>
                    <div class="cam">
                      <div id="profile" class="edit-photo2">

                        <div class="dashes"><img src="{{ url('we/images/cam-icon.png') }}"></div>
                        <!--<img src="images/femail-img.png">-->
                        <input type="file" class="form-control" name="image" />
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="space-t-30 text-center">
                <button class="go-to-me" type="submit" name="submit"> next</button>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection

<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
