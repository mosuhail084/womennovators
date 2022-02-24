@extends('we.layouts.layout') @section('front_content')
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 to_animate" data-animation="fadeInUp">
          <img src="images/login.png" class="img-responsive">
        </div>
        <div class="col-sm-6 to_animate" data-animation="fadeInRight">
          <div class="login-section">
            <div class="login-content">
              <h2>Login to Your Account.</h2>
              <p>Login to manage your account and to access the startup page.</p>
              <a href="#" class="just-vote">Just here to vote</a>
            </div>
            <form class="login-form" action="{{ route('we.login23') }}" method="post">
              @csrf

              <div class="form-group">
                @if (Session::has('success'))
                  <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                <input type="text" name="email" placeholder="enter your email address" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="enter a password" class="form-control" required>
              </div>
              <div class="form-group">
                <div class="login">
                  <button class="login-btn" type="submit">Login</button><a href="{{ url('we/get-started') }}">do
                    you have an account yet?</a>
                </div>
                <p><a style="color:#CE199A;" href="{{ url('we/forget-password') }}">Forgot Password</a></p>
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
