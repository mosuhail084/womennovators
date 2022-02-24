@extends('faces.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /breadcrumb -->
   <!-- row -->
   <div class="row">
    @foreach($userDatas as $userData)
    <div class="col-sm-12 col-md-4">
        <div class="card custom-card">
            <div class="card-body text-center">
                <div class="user-lock text-center">
                    <img alt="avatar" class="rounded-circle" src="{{ $userData->picture ??''}}">
                </div>
                <h5 class="mb-1 mt-3 card-title">{{ $userData->name ??''}}</h5>
                <p class="mb-2 mt-1 tx-inverse">{{ $userData->designation ??''}}</p>
               <!-- <p class="mb-1"><i class="fe fe-mail mr-2"></i>{{ $userData->email ??''}}</p>-->
              @if($userData->companyname != NULL)
                <div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
                    <p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>
                    {{ $userData->companyname ??''}}, {{ $userData->country ??''}}</p>
                    <!--<p class="mb-2"><i class="fe fe-phone mr-2"></i>{{ $userData->phone ??''}}</p>-->
                </div>
                @else
                @endif
                <!--<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>-->
                <div class="justify-content-center text-center mt-3 d-flex">
                    <a href="{{ $userData->facebook ??''}}" target="blank" class="btn ripple btn-primary btn-icon mr-3">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a href="{{ $userData->instagram ??''}}" target="blank" class="btn ripple bg-pink btn-icon mr-3 text-white">
                        <i class="fe fe-instagram"></i>
                    </a>
                    <a href="{{ $userData->linkedin ??''}}" target="blank" class="btn ripple btn-info btn-icon mr-3" style="background-color: #0A66C2;">
                        <i class="fe fe-linkedin"></i>
                    </a>
                    <a href="{{ $userData->twitter ??''}}" target="blank" class="btn ripple btn-info btn-icon  mr-3 text-white" style="background-color:#1DA1F2;">
                        <i class="fe fe-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
  @endforeach
  {!! $userDatas->render() !!}
</div>
<!-- row closed -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
@endsection
