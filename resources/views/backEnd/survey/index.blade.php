@extends('backEnd.layouts.layout') @section('admin_content')
<!-- container -->
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, Welcome Back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Support</a></li>
                    <li style="display:none;" class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /breadcrumb -->
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                <div class="col-lg-6 float-right">
            <a class="btn btn-success float-right" href="{{ URL::previous() }}">Back</a>    
                 </div>  
                </div>
                <div class="card-body">
                    @component('backEnd.components.alert')

                    @endcomponent
                    
                    <div class="table-responsive">
                        <table class="table key-buttons text-md-nowrap" id="example3">
                            <thead>
                                <tr>
                                <th>Details</th>
                                <th>Formate Details</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                               <th>Name</th>
                                <td>{{$data->name ??''}}</td>
                             </tr>
                             <tr>
                               <th>Email Id</th>
                                <td>{{$data->email ??''}}</td>
                             </tr>
                             <tr>
                               <th>Gender</th>
                                <td>{{$data->gender ??''}}</td>
                             </tr>
                             <tr>
                               <th>Country</th>
                                <td>{{$data->countryname ??''}}</td>
                             </tr>
                             <tr>
                               <th>State</th>
                                <td>{{$data->statename ??''}}</td>
                             </tr>
                             <tr>
                               <th>Age</th>
                                <td>{{$data->age ??''}}</td>
                             </tr>
                             <tr>
                               <th>Qualification</th>
                                <td>{{$data->qualification ??''}}</td>
                             </tr>
                             <tr>
                               <th>Contact Numer</th>
                                <td>{{$data->phone ??''}}</td>
                             </tr>
                             <tr>
                               <th>Industry</th>
                                <td>{{$data->industry ??''}}</td>
                             </tr>
                             <tr>
                               <th>Business</th>
                                <td>{{$data->business ??''}}</td>
                             </tr>
                             <tr>
                               <th>Website</th>
                                <td>{{$data->website ??''}}</td>
                             </tr>
                             <tr>
                               <th>Faceook</th>
                                <td>{{$data->Faceook ??''}}</td>
                             </tr>
                             <tr>
                               <th>Linkedin</th>
                                <td>{{$data->Linkedin ??''}}</td>
                             </tr>
                             <tr>
                               <th>Instagram</th>
                                <td>{{$data->Instagram ??''}}</td>
                             </tr>
                             <tr>
                               <th>Twitter</th>
                                <td>{{$data->Twitter ??''}}</td>
                             </tr>
                             <tr>
                               <th>Youtube</th>
                                <td>{{$data->Youtube ??''}}</td>
                             </tr>
                             <tr>
                               <th>What is your model of business engagement?</th>
                                <td>{{$data->business_engagement ??''}}</td>
                             </tr>
                             <tr>
                               <th>Categorize your business</th>
                                <td>{{$data->business_category ??''}}</td>
                             </tr>
                             <tr>
                               <th>Do you provide products, services, or a combination of both?</th>
                                <td>{{$data->combination ??''}}</td>
                             </tr>
                             <tr>
                               <th>Is your business a For-Profit Business?</th>
                                <td>{{$data->for_profit ??''}}</td>
                             </tr>
                             <tr>
                               <th>Is your product or service innovative?</th>
                                <td>{{$data->product_service_innovative ??''}}</td>
                             </tr>
                             <tr>
                               <th>Is your product or service equitable?</th>
                                <td>{{$data->product_service_equitable ??''}}</td>
                             </tr>
                             <tr>
                               <th>Did you feel the need to take skill training to improve your business?</th>
                                <td>{{$data->business_skill ??''}}</td>
                             </tr>
                             <tr>
                               <th>Are you keen to have distribution networks to boost your sale?</th>
                                <td>{{$data->network ??''}}</td>
                             </tr>
                             <tr>
                               <th>Have you tried to explore overseas markets?</th>
                                <td>{{$data->market ??''}}</td>
                             </tr>
                             <tr>
                               <th>Do you spend your earnings on family expenses?</th>
                                <td>{{$data->expenses ??''}}</td>
                             </tr>
                             <tr>
                               <th>Are you the primary economic support provider of the family?</th>
                                <td>{{$data->economic ??''}}</td>
                             </tr>
                             <tr>
                               <th>Are you financially independent?</th>
                                <td>{{$data->support ??''}}</td>
                             </tr>
                             <tr>
                               <th>Select the most relevant option/th>
                                <td>{{$data->relevant ??''}}</td>
                             </tr>
                             <tr>
                               <th>Are you the key decision maker for your enterprise?</th>
                                <td>{{$data->enterprise ??''}}</td>
                             </tr>
                             <tr>
                               <th>Were you able to get access to market credit?</th>
                                <td>{{$data->market_credit ??''}}</td>
                             </tr>
                             <tr>
                               <th>What is your family type?</th>
                                <td>{{$data->family_type ??''}}</td>
                             </tr>
                             <tr>
                               <th>How do describe your family structure?</th>
                                <td>{{$data->family_structure ??''}}</td>
                             </tr>
                             <tr>
                               <th>Is this enterprise (profession) your first choice?</th>
                                <td>{{$data->first_choice ??''}}</td>
                             </tr>
                             <tr>
                               <th>Are you using social media to promote your business?</th>
                                <td>{{$data->promote ??''}}</td>
                             </tr>
                             <tr>
                               <th>Economic empowerment has improved my status within the society</th>
                                <td>{{$data->society ??''}}</td>
                             </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->


    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->@endsection
