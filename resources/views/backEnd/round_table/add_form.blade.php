@extends('backEnd.layouts.layout') @section('admin_content')
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
    <!-- main-content-body -->
    <!-- row -->
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="main-content-label mg-b-5">
              Add Round Table Event
            </div>
            <form method="post" action="{{ route('admin.create_round_table') }}" enctype="multipart/form-data">
              @csrf
              @component('backEnd.components.alert')
              @endcomponent
              <div class="row row-sm">
                {{-- Event Title --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Title: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="round_table_title" id="round_table_title"
                      placeholder="Enter Event Name" required>
                  </div>
                </div>

                {{-- Event Poster --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Poster: <span class="tx-danger">*</span></label>
                    <input type="file" class="form-control" id="profile-img" name="round_table_poster"
                      id="round_table_poster" required>
                  </div>
                </div>

                {{-- Event Mode --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Mode:<span class="tx-danger">*</span></label>
                    <select class="form-control" name="round_table_mode" id="round_table_mode" required>
                      <option value="">Please Select One</option>
                      <option value="online">Online</option>
                      <option value="offline">Offline</option>
                    </select>
                  </div>
                </div>
              </div>
              <br>

              <div class="row row-sm">
                {{-- Event Start Date --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Start Date: <span class="tx-danger">*</span></label>
                    <input type="date" class="form-control" name="round_table_start_date" id="round_table_start_date" required>
                  </div>
                </div>

                {{-- Event End Date --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">End Date: <span class="tx-danger">*</span></label>
                    <input type="date" class="form-control" name="round_table_end_date" id="round_table_end_date" required>
                  </div>
                </div>

                {{-- Event Start Time --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Start Time: <span class="tx-danger">*</span></label>
                    <input type="time" class="form-control" name="round_table_from" id="round_table_from" required> 
                  </div>
                </div>

                {{-- Event End Time --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">End Time: <span class="tx-danger">*</span></label>
                    <input type="time" class="form-control" name="round_table_to" id="round_table_to" required>
                  </div>
                </div>

              </div>
              <br>

              <div class="row row-sm">

                {{-- Community --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Community: <span class="tx-danger">*</span></label>
                    <select class="form-control" name="community_id" id="community_id" required>
                      <option value=""> ---Please Select One--- </option>
                      @if ($communities)
                        @foreach ($communities as $community)
                          <option value="{{ $community->id }}">{{ $community->name }}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>

                {{-- State --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> State: <span class="tx-danger">*</span></label>
                    <select class="form-control" name="state" id="state" required>
                      <option value=""> ---Please Select One--- </option>
                      @if ($states)
                        @foreach ($states as $state)
                          <option value="{{ $state->state_id }}">{{ $state->state_name }}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>

                {{-- City --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> City: <span class="tx-danger">*</span></label>
                    <select class="form-control" name="city" id="city" required>
                      <option value=""> ---Please Select State First--- </option>
                    </select>
                  </div>
                </div>

                {{-- Sector --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Sector: </label>
                    <select class="form-control" name="sector">
                      <option value=""> ---Please Select One--- </option>
                      @foreach ($sector as $sectorData)
                        <option value="{{ $sectorData->id }}">
                          {{ $sectorData->sectorname }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <br>

              <div class="row row-sm">
                {{-- Jury --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Jury: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="jury" id="jury" value="none" required>
                  </div>
                </div>

                {{-- Faces --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Faces: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="faces" id="faces" value="none" required>
                  </div>
                </div>

                {{-- Event Link --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Event Link:</label>
                    <input class="form-control" name="event_link" placeholder="Enter Link" type="text">
                  </div>
                </div>
              </div>
              <br>

              <div class="row row-sm">
                {{-- Event Description --}}
                <div class="col-12">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Description: <span class="tx-danger">*</span></label>
                    <textarea class="form-control summernote" name="round_table_desc" id="round_table_desc" rows="3" placeholder="" required></textarea>
                  </div>
                </div>
              </div>

              <div class="row row-sm">
                <div class="d-flex pagination wd-100p">
                  <a href="{{ url('admin/event') }}" class="btn btn-main-primary pd-x-20 mg-t-10">Back</a>
                  <button type="submit" class="ml-auto btn btn-main-primary pd-x-20 mg-t-10">Save</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /row -->

    <!-- /row -->
  </div>
  <!-- /container -->
  </div>
  <!-- /main-content -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    //jQuery.noConflict();
    function readURL(input) {
      if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
          jQuery('#profile-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    jQuery("#profile-img").change(function() {
      readURL(this);
    });
  </script>
  <script>
    $(function() {
      $('#category').on('change', function() {
        var category_id = $(this).val();

        $.ajax({
          type: "GET",
          url: "{{ url('admin/jury/create') }}",
          data: "category_id=" + category_id,
          success: function(res) {

            $('#subcategory_id').html(res);


          },
          error: function() {

          },
        });
      });
    });
  </script>

  {{-- Functions --}}
  <script>
    $(document).ready(function() {
      $("#state").change(function(e) {
        e.preventDefault();
        console.log("yes");
        let state_id = $('#state').val();
        let _token = $('input[name=_token]').val();
        $.ajax({
          type: "post",
          url: "{{ url('/admin/get_cities') }}",
          data: {
            _token,
            state_id
          },
          success: function(result) {
            $('#city').html(result);
          }
        });
      });
    });
  </script>
@endsection
