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
            <div class="d-flex justify-content-between">
              <h4 class="card-title mg-b-0 mt-2"> Normal Event List</h4>
              <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
          </div>
          <div class="card-body">
            @component('backEnd.components.alert')
            @endcomponent
            <div class="table-responsive">
              <table class="table text-md-nowrap" id="example1">
                <thead>
                  <tr>
                    <th class="wd-15p border-bottom-0">Sl. No.</th>
                    <th class="wd-15p border-bottom-0">Event Name</th>
                    <th class="wd-15p border-bottom-0">Community Name</th>
                    <th class="wd-15p border-bottom-0">Event Mode</th>
                    <th class="wd-20p border-bottom-0">Start Date</th>
                    <th class="wd-20p border-bottom-0">End Date</th>
                    <th class="wd-15p border-bottom-0">State</th>
                    <th class="wd-15p border-bottom-0">City</th>
                    <th class="wd-20p border-bottom-0">Sector</th>
                    <th class="wd-20p border-bottom-0">Status</th>
                    <th class="wd-15p border-bottom-0">Edit</th>
                    <th class="wd-15p border-bottom-0">View</th>
                    <!-- <th class="wd-10p border-bottom-0">Delete</th>-->
                  </tr>
                </thead>
                <tbody>
                  @foreach ($normal_events as $event)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                      <td>{{ $event->normal_event_title ?? '-----' }}</td>
                      <td>{{ $event->community_name ?? '-----' }}</td>
                      <td>{{ $event->normal_event_mode ?? '-----' }}</td>
                      <td> {{ Carbon\Carbon::parse($event->normal_event_start_date)->format('d/m/Y') ?? '-----' }} </td>
                      <td> {{ Carbon\Carbon::parse($event->normal_event_end_date)->format('d/m/Y') ?? '-----' }} </td>
                      <td>{{ $event->state_name ?? '-----' }}</td>
                      <td>{{ $event->city_name ?? '-----' }}</td>
                      <td>{{ $event->sectorname ?? '-----' }}</td>
                      <td>
                        @if ($event->status == 1)
                          <span class="badge badge-success-gradient">Active</span>
                        @else
                          <span class="badge badge-danger-gradient">Deactive</span>
                        @endif
                      </td>

                      <td>
                        <a href="{{ route('admin.normal_event_edit_form', $event->id) }}"
                            class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-edit"></i></a>
                      </td>
                      <td>
                          <a href="{{ url('/admin/normal_event/show/' . $event->id) }}"
                        class="btn ripple btn-primary text-white btn-icon"><i class="fe fe-eye"></i></a>
                    </td>
                
                  @endforeach
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
  <!-- /main-content -->
@endsection
