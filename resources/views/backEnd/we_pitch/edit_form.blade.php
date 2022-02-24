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
              Edit We Pitch Table Event
            </div>
            <form method="post" action="{{ route('admin.update_we_pitch', ['id' => $event->id]) }}"
              enctype="multipart/form-data">
              @csrf
              @component('backEnd.components.alert')
              @endcomponent
              <div class="row row-sm">
                {{-- Event Title --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Title: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="we_pitch_title" id="we_pitch_title"
                      placeholder="Enter Event Name" value="{{ $event->we_pitch_title ?? '' }}" required>
                  </div>
                </div>

                {{-- Event Poster --}}
                <div class="col-4">
                  <div class="row">
                    <div class="col-9">
                      <div class="form-group mg-b-0">
                        <label class="form-label"> Event Poster:</label>
                        <input type="file" class="form-control" id="profile-img" name="we_pitch_poster"
                          id="we_pitch_poster">
                      </div>
                    </div>
                    <div class="col-3">
                      @if ($event->we_pitch_poster)
                        <img src="{{ asset('we/images/' . $event->we_pitch_poster) }}" height="70" width="70"
                          alt="poster">
                      @endif
                    </div>
                  </div>


                </div>

                {{-- Event Mode --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Mode:<span class="tx-danger">*</span></label>
                    <select class="form-control" name="we_pitch_mode" id="we_pitch_mode" required>
                      <option value="">Please Select One</option>
                      @if ($event->we_pitch_mode == 'online')
                        <option value="online" selected>Online</option>
                        <option value="offline">Offline</option>
                      @else
                        <option value="online">Online</option>
                        <option value="offline" selected>Offline</option>
                      @endif

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
                    <input type="date" class="form-control" name="we_pitch_start_date" id="we_pitch_start_date"
                      value="{{ $event->we_pitch_start_date ?? '' }}" required>
                  </div>
                </div>

                {{-- Event End Date --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">End Date: <span class="tx-danger">*</span></label>
                    <input type="date" class="form-control" name="we_pitch_end_date" id="we_pitch_end_date"
                      value="{{ $event->we_pitch_end_date ?? '' }}" required>
                  </div>
                </div>

                {{-- Event Start Time --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Start Time: <span class="tx-danger">*</span></label>
                    <input type="time" class="form-control" name="we_pitch_from" id="we_pitch_from"
                      value="{{ $event->we_pitch_from ?? '' }}" required>
                  </div>
                </div>

                {{-- Event End Time --}}
                <div class="col-3">
                  <div class="form-group mg-b-0">
                    <label class="form-label">End Time: <span class="tx-danger">*</span></label>
                    <input type="time" class="form-control" name="we_pitch_to" id="we_pitch_to"
                      value="{{ $event->we_pitch_to ?? '' }}" required>
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
                          @if ($event->community_id == $community->id)
                            <option value="{{ $community->id }}" selected>{{ $community->name }}</option>
                          @else
                            <option value="{{ $community->id }}">{{ $community->name }}</option>
                          @endif
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
                          @if ($event->state == $state->state_id)
                            <option value="{{ $state->state_id }}" selected>{{ $state->state_name }}</option>
                          @else
                            <option value="{{ $state->state_id }}">{{ $state->state_name }}</option>
                          @endif
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
                      @if ($cities)
                        @foreach ($cities as $city)
                          @if ($event->city == $city->city_id)
                            <option value="{{ $city->city_id }}" selected>{{ $city->city_name }} </option>
                          @else
                            <option value="{{ $city->city_id }}">{{ $city->city_name }} </option>
                          @endif
                        @endforeach
                      @endif
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
                        @if ($event->sector == $sectorData->id)
                          <option value="{{ $sectorData->id }}" selected>{{ $sectorData->sectorname }}</option>
                        @else
                          <option value="{{ $sectorData->id }}">{{ $sectorData->sectorname }}</option>
                        @endif
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
                    <input type="text" class="form-control" name="jury" id="jury" value="{{ $event->jury ?? '' }}"
                      required>
                  </div>
                </div>

                {{-- Faces --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Faces: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="faces" id="faces" value="{{ $event->faces ?? '' }}"
                      required>
                  </div>
                </div>

                {{-- Event Link --}}
                <div class="col-4">
                  <div class="form-group mg-b-0">
                    <label class="form-label">Event Link:</label>
                    <input class="form-control" name="event_link" placeholder="Enter Link" type="text"
                      value="{{ $event->event_link ?? '' }}">
                  </div>
                </div>
              </div>
              <br>

              <div class="row row-sm">
                {{-- Event Description --}}
                <div class="col-12">
                  <div class="form-group mg-b-0">
                    <label class="form-label"> Event Description: <span class="tx-danger">*</span></label>
                    <textarea class="form-control summernote" name="we_pitch_desc" id="we_pitch_desc" rows="3"
                      placeholder="" required>{!! $event->we_pitch_desc ?? '' !!}</textarea>
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
