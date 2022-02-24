@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid" >
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Support</a></li>
                    <li style="display:none;"  class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
     
    </div>
    
    
    <!-- /breadcrumb -->
  <!-- row opened -->
  <div class="row row-sm" id="printableArea">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0 mt-2"> Details</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                </div>
                <div class="card-body">
                    {{-- <div class="card-header">
<div class="media">
<div class="media-user mr-2">
<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{ url('backEnd/img/faces/6.jpg')}}">
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0 mg-t-9">Petey Cruiser Pechon</h6><span class="text-primary">just
                    now</span>
            </div>
            <div class="ml-auto">
                <div class="dropdown show">
                    <a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i
                            class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                       
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <fieldset class="form-group" style="float:center;">
 @if(!empty($trophy->vedio))

        <video width="600" height="240" controls>
      <source src=" {{ Storage::disk('s3')->temporaryUrl('asiaawardvideo/'.$trophy->vedio, now()->addMinutes(2)) }}" type="video/mp4">
     
    Your browser does not support the video tag.
</video>
<br/>
  <center><a href="{{ Storage::disk('s3')->temporaryUrl('asiaawardvideo/'.$trophy->vedio, now()->addMinutes(2)) }}" download>Download video</a> </center>
@endif
    </fieldset>
    <fieldset class="form-group">

        <table class="table display table-bordered table-striped table-hover">

            <tbody>

                
                <tr>
                    <td><b>Name : </b></td>
                    <td>{{$trophy->name ??''}}</td>
                    <td><b>Email  :</b></td>
                    <td>{{$trophy->email ??''}}</td>
                     
                </tr>
                <tr>
                    <td><b>Contact : </b></td>
                     <td>{{$trophy->phone ??''}}</td>
                    <td><b>Designation : </b></td>
                    <td>{{$trophy->designation ??''}}</td>
                   
                </tr>
                <tr>
                     <td><b>Company Name : </b></td>
                     <td>{{$trophy->company_name ??''}}</td>
                    <td><b>Category :</b></td>
                    <td> {{$trophy->category ??''}}</td>
                    
                </tr>
                <tr>
                    <td><b>Date: </b></td>
                    <td>{{ date('F jS', strtotime($trophy->created_at ??'')) }}</td>
                     <td><b>Url : </b></td>
                     <td><p id="div1"></p><button id="button1" {{url($trophy->video ??'')}}   onclick="CopyToClipboard('div1')">copy awardee url</button></td>
                </tr>

            </tbody>
           
        </table>
    </fieldset>
    <form method="post" action="{{ url('/admin/upload/awardee/' .$trophy->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @component('backEnd.components.alert')

                                @endcomponent
    <div class="row row-sm">
     <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Name: </label>
            <input class="form-control" name="name" value="{{ $trophy->name ?? ''}}"
                placeholder="Enter Your Name" type="name">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Email: </label>
            <input class="form-control" name="email" value="{{ $trophy->email ?? ''}}"
                placeholder="Enter Your email" type="email">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Contact: </label>
            <input class="form-control" name="phone" value="{{ $trophy->phone ?? ''}}"
                placeholder="Enter Your contact" type="number">
        </div>
    </div>
    </div>
    <br>
    <div class="row row-sm">
     <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Designation: </label>
            <input class="form-control" name="designation" value="{{ $trophy->designation ?? ''}}"
                placeholder="Enter Your Designation" type="text">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mg-b-0">
            <label class="form-label">Company Name: </label>
            <input class="form-control" name="company_name" value="{{ $trophy->company_name ?? ''}}"
                placeholder="Enter Company Name" type="text">
        </div>
    </div>
    <div class="col-md-4">
                           <div class="form-group">
                               <label>Category</label>
                              <select class="form-control form-control-subject"  name="category" id="category" value="{{ $trophy->category ?? ''}}">  
                                  <option value="Jury" {{ $trophy->category == "Jury" ? 'selected' : '' }}>Jury </option>
                                  <option value="Incubatee" {{ $trophy->category == "Incubatee" ? 'selected' : '' }}>Incubatee  </option>
                                  <option value="Influencer" {{ $trophy->category == "Influencer" ? 'selected' : '' }}>Influencer  </option>
                                  <option value="Community Leader" {{ $trophy->category == "Community Leader" ? 'selected' : '' }}>Community Leader </option>
                                  <option value="Partner" {{ $trophy->category == "Partner" ? 'selected' : '' }}>Partner  </option>
                                  <option value="Women Faces" {{ $trophy->category == "Women Faces" ? 'selected' : '' }}>Women Faces </option>
                              </select>
                           </div>
                        </div>
    </div>
    <br>
    <div class="row row-sm">
    <div class="col-md-4">
                           <div class="form-group">
                               <label>Upload Video </label>
                              <input type="file" class="form-control form-control-subject"   id="file"  onchange="Filevalidation()"  name="video">
                              
                            </div>
                        </div>
    <div class="col-4">
        <div class="form-group">
            <label class="font-weight-600">Status</label>
            <select name="Status" id="exampleFormControlSelect1" class="form-control">
                <!--placeholder-->
                @if(Request::is('reimbursementclaim/*/edit')) >
                @if($reimbursementclaim->Status=='0')
                <option value="0">Checked </option>
                <option value="1">Revied </option>
                <option value="2">Uploded</option>
                @elseif($reimbursementclaim->Status=='1')
                <option value="1">Revied</option>
                <option value="0">Checked</option>
                <option value="2">Uploded</option>

                @else
                <option value="2">Uploded</option>
                <option value="1">Revied</option>
                <option value="0">Checked</option>
                

                @endif
                @else

                <option value="0">Checked</option>
                <option value="1">Revied</option>
                <option value="2">Uploded</option>
                
                @endif
            </select>
        </div>
    </div>
    </div>
   
    
<div class="row row-sm">
    <div class="d-flex pagination wd-100p">
        <a href="{{url('admin/awardee')}}"
            class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
        <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
    </div>
</div>
</form>
</div>
            
        </div>
    </div>
    <!--/div-->

   
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<script>
        function CopyToClipboard(containerid) {
      if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");
      } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        alert("Link has been copied")
      }
    }
    </script>
@endsection