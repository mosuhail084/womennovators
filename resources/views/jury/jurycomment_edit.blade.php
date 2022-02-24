@extends('jury.layouts.layout') @section('admin_content')
<style>
    .example:hover {
        overflow-y: scroll;
        /* Add the ability to scroll */

    }


    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
        height: 60px;
        margin: 0 auto;
        overflow: hidden;
    }

</style>
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi Jury, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Dashboard</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
    <div class="main-content-body">
        <!-- row -->
        <div class="row row-sm" >
            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4" >
                <div class="card custom-card">
                    <div class="">
                        <div class="main-content-app main-content-contacts pt-0">
                            <div class="main-content-left main-content-left-contacts">
                                <nav class="nav main-nav-line main-nav-line-chat  pl-3">
                                    <a class="nav-link active" data-toggle="tab"> Event User List</a>
                                </nav>
                                <div class="main-contacts-list scroll" id="mainContactList">
                                    @foreach($eventuserList as $eventuserlistData)

                                    <div class="main-contact-item selected example">
                                        <div class="main-img-user online"><img alt="avatar"
                                                src="{{ url('backEnd/img/active.png')}}"></div>
                                        <div class="main-contact-body">
                                            <h6>{{ $eventuserlistData->name}}</h6>
                                            {{-- <span class="phone">{{ $eventuserlistData->phone }}</span> --}}
                                        </div>
                                        <a class="main-contact-star"
                                        href="{{url('/jury/jurycomment?'.'eventid='.$id.'&&'.'userid='.$eventuserlistData->id)}}">

                                            <?php
                                            //echo "hello";die;
                                            $sum =
                                            App\Models\Eventcomment::where('user_id',$eventuserlistData->id)->where('jury_id',auth()->user()->id)->where('event_id',$id)->first();
                                             //dd($sum);die;
                                          ?>
                                          
                                            @if($sum)
                                            <span class="badge badge-success-gradient">Comment done</span>
                                            
                                            @else
                                            <span class="badge badge-primary-gradient"> Comment pending</span>
                                            @endif

                                            <i class="fe fe-edit-2 mr-1"></i>

                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-7 col-xl-8">
                <div class="">
                    <a class="main-header-arrow" href="#" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
                    <div class="main-content-body main-content-body-contacts card custom-card" style="display: block !important">
                        @component('backEnd.components.alert')

                        @endcomponent
                        <div class="main-contact-info-header pt-3">

                            <div class="media">
                                <div class="main-img-user">
                                    <img alt="avatar" src="{{ url('backEnd/img/active.png')}}"> <a href="#"><i
                                            class="fe fe-camera"></i></a>
                                </div>
                                <div class="media-body">
                                    <h5>{{ $userList->name ??''}}</h5>
                                    <h5>{{ $eventuserLists->name ??''}}</h5>
                                    <p>{{ $userList->categoryname ??''}}</p>
                                   {{--} <nav class="contact-info">
                                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                            title="Call"><i class="fe fe-phone"></i></a>
                                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                            title="Video"><i class="fe fe-video"></i></a>
                                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                            title="message"><i class="fe fe-message-square"></i></a>
                                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                            title="Add to Group"><i class="fe fe-user-plus"></i></a>
                                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                            title="Block"><i class="fe fe-slash"></i></a>
                                    </nav>--}}
                                </div>
                            </div>
                            <div class="main-contact-action btn-list pt-3 pr-3">
                                <a href="#" class="btn ripple btn-primary text-white btn-icon" data-target="#modaldemo1"
                                    data-toggle="modal" href="#" data-toggle="tooltip" title="You Tube Link"><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="main-contact-info-body p-4">
                            <form method="post" action="{{ url('jury/jurycomment/save')}}"
                                enctype="multipart/form-data">
                                @csrf
                               
                            
                                <div>
                                   
                                    <p>
                                        <input type="hidden" value="{{$eventuserLists->id ??''}}" name="user_id">
                                        <input type="hidden" value="{{$id ??''}}" name="event_id">
                                        <input type="text" hidden name="mrk_upt[]" value=" {{ $mrk->marks??''}}">
                                        <div class="rating-stars block" id="more-rating" >
                                            
                                                <div class="row row-sm">
                                                   
                                                    <div class="col-11">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label"> About Us: <span class="tx-danger">*</span></label>
                                                           <p>{{$eventuserLists->about_us}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-11">
                                                        <div class="form-group mg-b-0">
                                                            <label class="form-label"> Comment: <span class="tx-danger">*</span></label>
                                                            <textarea class="form-control summernote" name="comment" rows="3" placeholder="">{!!$comment[0]->comment ?? ''!!}</textarea>
                                                
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </p>
                                </div>
                               
                                <hr>
                               
                                @php
                                $sums =
                                App\Models\Markingevent::where('user_id',$eventuserLists->id ??'')->where('jury_id',auth()->user()->id)->sum('marks')
                             // dd($value);
                              @endphp
                                @if($sums)
                                <div class="row row-sm">
                                    <div class="d-flex pagination wd-100p">
                                 <span  class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Marking done</span>
                                    </div>
                                </div>
                                @else
                                <div class="row row-sm">
                                    <div class="d-flex pagination wd-100p">
                                        <button type="submit"
                                            class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Submit</button>
                                    </div>
                                </div>
                                @endif
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
<!-- Basic modal -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            {{-- <div class="modal-header">
<h6 class="modal-title">Add Excel</h6><button aria-label="Close" class="close" data-dismiss="modal"
type="button"><span aria-hidden="true">&times;</span></button>
</div> --}}

            <div class="modal-body">
                <iframe width="440" height="315" src="{{ $userList->youtubelink ??''}}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            {{-- <div class="modal-footer">
<button class="btn ripple btn-primary" type="submit">Save</button>
<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
</div> --}}

        </div>
    </div>
</div>
<!-- End Basic modal -->
@endsection
