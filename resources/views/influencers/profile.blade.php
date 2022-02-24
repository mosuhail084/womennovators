@extends('influencers.layouts.layout') @section('admin_content')
<!-- container -->
<style>
    button#add, button#add3, button#add4, button#add5, button#add6, button#add7, button#add8,button#add10{
    margin-top: -20px;
          z-index: 2;
    float: right;
    font-size: 12px;
    position: relative;
    right: -92px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
    cursor: pointer;
} 
    button.remove, button.remove3, button.remove4, button.remove5, button.remove6, button.remove7, button.remove8 {
        font-size: 12px;
    position: absolute;
    right: -83px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
     padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
        cursor: pointer;
}
    button#add2 {
            margin-top: -24px;
       font-size: 12px;
    position: absolute;
    right: -77px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
    cursor: pointer;
} 
    button.remove2 {
        font-size: 12px;
    position: absolute;
    right: -83px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
     padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: center;
        cursor: pointer;
}
    .new-text-div {
    position: relative;
}
    @media (max-width:767px){
        button#add2 {
    font-size: 12px;
    position: relative;
    text-align: right;
    right: 0px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 76px;
    text-align: right;
    cursor: pointer;
    z-index: 2;
    width: 100%;
}
        button.remove2 {
    font-size: 12px;
    position: relative;
    right: 0px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 100%;
    text-align: right;
    cursor: pointer;
}
        button#add {
    z-index: 2;
    float: right;
    font-size: 12px;
    position: relative;
    right: 0px;
    background-color: #fff;
    color: #ce199a;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 100%;
    text-align: right;
    cursor: pointer;
}
        button.remove {
    font-size: 12px;
    position: relative;
    right: 0px;
    top: 0px;
    background-color: #fff;
    color: #009688;
    border: none;
    padding: 8px 5px;
    border-radius: 4px;
    width: 100%;
    text-align: right;
    cursor: pointer;
}
        button#add, button#add3, button#add4, button#add5, button#add6, button#add7, button#add8 {
            margin-top: 0px;right: 0px;}
       button.remove, button.remove3, button.remove4, button.remove5, button.remove6, button.remove7, button.remove8 {
           right: 0px;
    position: relative;
    width: 100%;
    text-align: right;
}
    }
    button:focus {
    border: none;
    outline: none;
}
  .table {
    border: 1px solid #ddd;
    width: 100%;
}
 .table tr th {
    background-color: #ddd;
}
 .table tr td {
    padding: 4px 10px;
    border-bottom: 1px solid #dddddd59;
} 
    
  .table  tr th {
    background-color: #ddd;
    padding: 4px 10px;
}
    
    
    
 
</style>
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi {{$influencer->name}}, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('influencers/home')); ?>">Dashboard</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- main-content-body -->
    <div class="main-content-body">
      <!-- row -->
	  <div class="row row-sm">
		
		
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card overflow-hidden project-card">
				<div class="card-header">
				<h4>Build your Profile </h4>
				</div>
				
			</div>
		</div>
		<div class="col-lg-12 col-md-612 col-sm-12">
			<!-- row -->
			<div class="row row-sm">
			     <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-2">
								<a data-target="#modaldemo20" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/pr.jpg')}}" style="height: 100px;"></a>
							</div>
							<h6 class="mb-1 text-muted">Personal Details</h6>
							
						</div>
					</div>
				</div>
			    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-2">
								<a data-target="#modaldemo5" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/5.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">Your Journey</h6>
							
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-2">
								<a data-target="#modaldemo1" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/1.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">Important Position</h6>
							
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a data-target="#modaldemo2" data-toggle="modal" style="margin-left:5%; height:200%;"><img src="{{url('influencers/image/2.png')}}" height="95"></a>
							</div>
							<h6 class="mb-1 text-muted">Award Received</h6>
							
						</div>
					</div>
				</div>
			
				
			</div>
			<!-- /row -->

		</div>
	  <div class="col-lg-12 col-md-612 col-sm-12">
			<!-- row -->
			<div class="row row-sm">
			    
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a data-target="#modaldemo4" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/4.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">NGO & Social Initiative </h6>
							
						</div>
					</div>
				</div>
			<!--	<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a data-target="#modaldemo6" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/6.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">Jury detail</h6>
							
						</div>
					</div>
				</div>-->
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a data-target="#modaldemo7" data-toggle="modal"  style="margin-left:5%;"><img src="{{url('influencers/image/7.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">Academic Partner</h6>
							
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a data-target="#modaldemo8" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/8.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">Association Partner</h6>
							
						</div>
					</div>
				</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a  data-target="#modaldemo3" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/33.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted">Value Partner</h6>
							
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->
			
		</div>
		<div class="col-lg-12 col-md-612 col-sm-12">
			<!-- row -->
			<div class="row row-sm">
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-2">
								<a data-target="#modaldemo9" data-toggle="modal" style="margin-left:5%;"><img src="{{url('influencers/image/10.png')}}"></a>
							</div>
							<h6 class="mb-1 text-muted"> Your Referrals</h6>
							
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
					<div class="card text-center">
						<div class="card-body ">
							<div class="feature widget-2 text-center mt-0 mb-3">
								<a data-target="#modaldemo10" data-toggle="modal" style="margin-left:5%; "><img src="{{url('influencers/image/14.jpg')}}"  height="70"></a>
							</div>
							<h6 class="mb-1 text-muted">Social Media Links</h6>
							
						</div>
					</div>
				</div>
			
				
			</div>
			<!-- /row -->
			
		</div>
		
		
	
		
		
		
	</div>

				<!-- /row -->
	  
    </div>
    <!-- /row -->
</div>
<!-- /container -->
           
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- /main-content -->
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header" >
                <h6 class="modal-title">Important Position(s) </h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??''  )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Do you hold an important position(s) with the government or any association(s)?  </label>
                        <br>
						<div class="col-sm-10" >
                            <input style="margin-bottom: 12px;" id="name" class="form-control" value="{{$influencer->position ??''}}" name="position[]" type="text">
                        </div>
                         	<br>
                         	<div class="col-md-10">
                           <div ><button   id="add2"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>
                         

                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal" id="modaldemo2">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Award(s) Received</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Have you been awarded for your contribution by any government or private organization? </label>
                        <div class="col-sm-10">
                            <input id="award" style="margin-bottom: 12px;" class="form-control" value="{{ $influencer->award ??''}}" name="award[]" type="text">
                        </div>
                         <div class="col-md-10">
                           <div ><button   id="add"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo3">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Value partner</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Name an Association Partner</label>
                        <div class="col-sm-10">
                            <input id="name" style="margin-bottom: 12px;" class="form-control"  name="value_partner[]" value="{{ $influencer->value_partner ??''}}"  type="text">
                        </div>
                         <div class="col-md-10">
                           <div ><button   id="add7"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo4">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">NGO(s) & Social Initiative(s) </h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Are you associated with any NGo(s) or Social initiative(s)?Is Yes, please share their details.</label>
                        <div class="col-sm-10">
                            <input id="ngo" style="margin-bottom: 12px;" class="form-control" value="{{ $influencer->ngo ??''}}" name="ngo[]" type="text">
                        </div>
                         <div class="col-md-10">
                           <div ><button   id="add3"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo5">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tell us more about yourself</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Your professional and personal journey. </label>
                        <div class="col-sm-12">
                          
  <textarea class="form-control " name="about_journey" rows="3" placeholder="" >{{ $influencer->about_journey ??'' }}</textarea>
  <small style="float: right;">5oo words</small>
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo6">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Mentor detail</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Suggest six jury members name(Atleast six is mandatory) :</label>
						
                        <div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Jury name :</label>
                            <input id="name" class="form-control" value="{{ $influencer->jury_name ??''}}" name="jury_name[]" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Campany name :</label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Designation :</label>
                            <input id="name" class="form-control" value="{{ $influencer->jury_designation ??''}}" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Email :</label>
                            <input id="name" class="form-control" value="{{ $influencer->jury_email ??''}}" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Phone :</label>
                            <input id="name" class="form-control" value="{{ $influencer->jury_phone ??''}}" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Photo :</label>
                            <input id="name" class="form-control" value="{{ $influencer->jury_linkedin ??''}}" name="file" type="file">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Linkedin :</label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Facebook :</label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Google :</label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-12 col-form-label font-weight-600">Instagram :</label>
                            <input id="name"  class="form-control" name="file" type="text">
                        </div>

                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo7">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Academic Partner </h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                       <!--  <label for="name" class="col-sm-12 col-form-label font-weight-600">Suggest one Academic Partners :</label>-->
						<div class="col-sm-10">
							<label for="name" class="col-form-label ">Name an Academic Partner </label>
                            <input style="margin-bottom: 12px;" id="name" class="form-control" value="{{ $influencer->academic_partner ??''}}" name="academic_partner[]" type="text">
                        </div>
                        	<div class="col-sm-10" >
                           <div >
                               <button   id="add5"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>
				
						
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo8">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Association partner </h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                       
                        <div class="col-sm-10">
							<label for="name" class=" col-form-label ">Name an Association Partner </label>
                            <input id="name" style="margin-bottom: 12px;" class="form-control" value="{{ $influencer->association_partner ??''}}" name="association_partner[]" type="text">
                        </div>
					<div class="col-md-10">
                           <div ><button   id="add6"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo9">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Your Referrals </h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                       <!-- <label for="name" class="col-sm-12 col-form-label font-weight-600">Give 1 Reference(Name,Email ID,company,Designation,contact no.):</label>-->
                        <div class="col-sm-5">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Name </label>
                            <input id="name" style="margin-bottom: 12px;" class="form-control" placeholder="Name" value="" name="ref_name[]" type="text">
                        </div>
						<div class="col-sm-5">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Email </label>
                            <input id="name" style="margin-bottom: 12px;" class="form-control" placeholder="Email ID" value="" name="ref_email[]" type="text">
                        </div>
                         <div class="col-md-10">
                           <div ><button   id="add8"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                            
                        </div>
                        <br>
                        <br>
                        
                        <div class="col-md-12">
                            
                            <table class="table">
                                <th>Name</th>
                                <th>Email ID</th>
                                @foreach($ref as $ref)
                                <tr>
                                    <td>{{$ref->ref_name}}</td>
                                    <td>{{$ref->ref_email}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
							<!--<div class="col-sm-6">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Campany </label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Designation </label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Contact  </label>
                            <input id="name" class="form-control" name="file" type="text">
                        </div>-->
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo10">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Social Media Link</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ url('influencer/update/'.$nf_id ??'' )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Social Media Links :</label>
                        <div class="col-sm-6">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Facebook  </label>
                            <input id="name" class="form-control" name="facebook" value="{{ $influencer->facebook ??''}}" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Instagram  </label>
                            <input id="name" class="form-control" name="instagram"  value="{{ $influencer->instagram ??''}}" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" class="col-sm-3 col-form-label font-weight-600">Linkedin  </label>
                            <input id="name" class="form-control" name="linkedin" value="{{ $influencer->linkedin ??''}}" type="text">
                        </div>
						<div class="col-sm-6">
							<label for="name" style="margin-botton:12px;" class="col-sm-3 col-form-label font-weight-600">Twitter </label>
                            <input id="name" class="form-control" name="twitter" value="{{ $influencer->twitter ??''}}" type="text">
                        </div>
                         <div class="col-sm-10" style="margin-top:20px;" ><button   id="add10"><i class="fa fa-plus" aria-hidden="true"></i> Add more</button></div>
                    </div>
               
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaldemo20">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">My Details</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
           <form method="post" action="{{ url('influencer/update/'.$inf->id )}}" enctype="multipart/form-data">
              
                @csrf
                <div class="modal-body">
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Name :</label>
                     
						<div class="col-sm-12">
                            <input id="name" class="form-control" name="name" value="{{$inf->name ??''}}" type="text">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Contact Number :</label>
                      
                        <div class="col-sm-12">
                            <input id="" class="form-control" name="phone"  value="{{$inf->phone ??''}}" type="number">
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Gender :</label>
                        
                        <div class="col-sm-12">
                           
                              <select name="gender" id="gender" class="form-control" >
                          @if(Request::is('influencer/profile')) >
                @if($inf->gender=='Female')
                <option value="Female" >Female</option>
                            <option value="Male" >Male</option>
                            <option value="Binary">Binary</option>
                            <option value="Prefer not to say">Prefer not to say</option>

                @elseif($inf->gender=='Male')
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
               
                <option value="Binary">Binary</option>
                <option value="Prefer not to say">Prefer not to say</option>

                @elseif($inf->gender=='Binary')
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
               
                <option value="Binary">Binary</option>
                <option value="Prefer not to say">Prefer not to say</option>

                @else
                <option value="Prefer not to say">Prefer not to say</option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
                <option value="Binary">Binary</option>
               
                



                @endif
                @else

                <option value="" >Please select one</option>
                         
                <option value="Female" >Female</option>
                <option value="Male" >Male</option>
                <option value="Binary">Binary</option>
                <option value="Prefer not to say">Prefer not to say</option>
                @endif
                        </select>
                        </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">Country :</label>
                      
                        <div class="col-sm-12">
                        <select name="country" id="category" class="form-control" >
                            <option value="" >Please select one</option>
                           @foreach($country as $stateData)
                            <option value="{{$stateData->id}}" @if(!empty($inf->
                            country) && $inf->
                            country==$stateData->id) selected @endif>
                            {{ $stateData->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">State :</label>
                      
                        <div class="col-sm-12">
                            
                            <select name="city" id="subcategory_id" class="form-control">
                                  @if(!empty($inf->city))
                <option value="{{ $inf->city }}">
                    {{ DB::table('allstates')->where('id',$inf->city)->first()->name ??'' }}
                </option>

                @endif 
                            </select>
                        </div>
                        
                    </div>
                     <div class="details-form-field form-group row">
                        <label for="name" class="col-sm-12 col-form-label font-weight-600">City :</label>
                     
						<div class="col-sm-12">
                            <input  class="form-control" name="actual_city" value="{{$inf->actual_city ??''}}" type="text">
                        </div>
                    </div>
               <br>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Save</button>
                        <button class="btn ripple btn-danger" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('influencer/personal/details') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res);

                
            },
            error : function(){

            },
        });
       });
       
    }); 
  
     
    </script>
    <script>
          $(function() {
        $('#add5').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="Academic Partner" name="academic_partner[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove5' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove5', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    
      $(function() {
        $('#add6').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="Association Partner" name="association_partner[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove6' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove6', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
      $(function() {
        $('#add7').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="Value Partner " name="value_partner[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove7' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove7', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    
      $(function() {
        $('#add3').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="Social Initiative(s) & NGO(s)" name="ngo[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove3' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove3', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    
     $(function() {
        $('#add').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-12"><div class="form-group"><input class="form-control" placeholder="Award(s)" name="award[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    
       $(function() {
        $('#add2').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row "><div class="col-sm-12"><div class="form-group"><input placeholder="Position(s)" class="form-control" name="position[]" type="textbox"/></div></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove2' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove2', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    
     $(function() {
        $('#add8').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row"><div class="col-sm-6"><div class="form-group"><input class="form-control" placeholder="Name" name="ref_name[]" type="textbox"/></div></div><div class="col-sm-6"><div class="form-group"><input class="form-control" placeholder="Email ID" name="ref_email[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove8' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove8', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
       $(function() {
        $('#add10').on('click', function( e ) {
            e.preventDefault();
            $('<div/>').addClass( 'new-text-div' )
            .html( $('<div class="row "><div class="col-sm-12"><div class="form-group"><input placeholder="Other links" class="form-control" name="media_link[]" type="textbox"/></div></div></div>').addClass( 'someclass' ) )
            .append( $('<button/>').addClass( 'remove2' ).html( '<i class="fa fa-minus" aria-hidden="true"></i> Remove' ) )
            .insertBefore( this );
        });
        $(document).on('click', 'button.remove2', function( e ) {
            e.preventDefault();
            $(this).closest( 'div.new-text-div' ).remove();
        });
    });
    </script>
    
@endsection
