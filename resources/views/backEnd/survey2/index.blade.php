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
                        <table class="table key-buttons text-md-nowrap" id="example">
                            <thead>
                                <tr>
                                <th>Details</th>
                                <th>Formate Details</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                               <th>Name</th>
                                <td>{{$data1->name??''}}</td>
                             </tr>
                             <tr>
                               <th>Email Id</th>
                                <td>{{$data1->email??''}}</td>
                             </tr>
                             <tr>
                               <th>Gender</th>
                                <td>{{$data1->gender??''}}</td>
                             </tr>
                             <tr>
                               <th>Country</th>
                                <td>{{$data1->countryname??''}}</td>
                             </tr>
                             <tr>
                               <th>State</th>
                                <td>{{$data1->statename??''}}</td>
                             </tr>
                             <tr>
                               <th>Age</th>
                                <td>{{$data1->age??''}}</td>
                             </tr>
                             <tr>
                               <th>Qualification</th>
                                <td>{{$data1->qualification??''}}</td>
                             </tr>
                             <tr>
                               <th>Contact Numer</th>
                                <td>{{$data1->phone??''}}</td>
                             </tr>
                             <tr>
                               <th>Industry</th>
                                <td>{{$data1->industry??''}}</td>
                             </tr>
                             <tr>
                               <th>How do you describe your Business or Industry?</th>
                                <td>{{$data1->business??''}}</td>
                             </tr>
                             <tr>
                               <th>Your biggest challenge during Covid-19 (Select the ones that are relevant for your business)</th>
                                <td>{{$data1->relevant??''}}</td>
                             </tr>
                             
                             <tr>
                               <th>Impact of these issues in your work life</th>
                                <td>{{$data1->work??''}}</td>
                             </tr>
                             <tr>
                               <th>Support extended by your family members</th>
                                <td>{{$data1->family_members??''}}</td>
                             </tr>
                             <tr>
                               <th>Select the kind of bias you have experienced</th>
                                <td>{{$data1->bias_experienced??''}}</td>
                             </tr>
                             <tr>
                               <th>How often have you experienced any form of bias in the workplace?</th>
                                <td>{{$data1->experienced??''}}</td>
                             </tr>
                             <tr>
                               <th>Are you reluctant to negotiate pay increases and promotions?</th>
                                <td>{{$data1->promotions??''}}</td>
                             </tr>
                             <tr>
                               <th>Having a female member in the boardroom promotes parity.</th>
                                <td>{{$data1->promotes_parity??''}}</td>
                             </tr>
                             <tr>
                               <th>How does your organization ensure that women, gender-nonconforming individuals, and people of color feel included in the workplace?</th>
                                <td>{{$data1->gender_nonconforming??''}}</td>
                             </tr>
                             <tr>
                               <th>How does your organization ensure that women, gender-nonconforming individuals, and people of color feel included in the workplace?</th>
                                <td>{{$data1->professional_life??''}}</td>
                             </tr>
                             <tr>
                               <th>Website</th>
                                <td>{{$data1->website??''}}</td>
                             </tr>
                             <tr>
                               <th>Faceook</th>
                                <td>{{$data1->faceook??''}}</td>
                             </tr>
                             <tr>
                               <th>Linkedin</th>
                                <td>{{$data1->linkedin??''}}</td>
                             </tr>
                             <tr>
                               <th>Instagram</th>
                                <td>{{$data1->instagram??''}}</td>
                             </tr>
                             <tr>
                               <th>Twitter</th>
                                <td>{{$data1->twitter??''}}</td>
                             </tr>
                             <tr>
                               <th>Youtube</th>
                                <td>{{$data1->youtube??''}}</td>
                             </tr>
                             <tr>
                               <th>Anyother</th>
                                <td>{{$data1->anyother??''}}</td>
                             </tr>
                             <tr>
                               <th>How often have you refused a promotion or turned down a business expansion opportunity due to family responsibilities?</th>
                                <td>{{$data1->responsibility??''}}</td>
                             </tr>
                             <tr>
                               <th>Did you give a break to your professional life when you decided to become a mother?</th>
                                <td>{{$data1->become_a_mother??''}}</td>
                             </tr>
                             <tr>
                               <th>What is your family type?</th>
                                <td>{{$data1->family_type??''}}</td>
                             </tr>
                             <tr>
                               <th>How do describe your family structure?</th>
                                <td>{{$data1->family_structure??''}}</td>
                             </tr>
                             <tr>
                               <th>Who decided to stay back as a caretaker for the children?</th>
                                <td>{{$data1->caretaker??''}}</td>
                             </tr>
                             <tr>
                               <th>Did your employer/organization provide support for caregiving?</th>
                                <td>{{$data1->support_for_caregiving??''}}</td>
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
