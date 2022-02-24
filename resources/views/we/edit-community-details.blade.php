@extends('we.layouts.layout') @section('front_content')
  <div class="empty-community">
    <div class="container-fluid">
      <div class="community-banner">
        <div class="row">
          <div class="col-sm-9">
            <div class="community-ban-cintent">
              <div class="female-user">
                <img src="{{ asset('backEnd/image/community_image/' . $community->logo) }}">
              </div>
              <div class="female-user-content">
                <h2>{{ $community->name }}</h2>
                <ul class="communi-list">
                  <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $community->city }}</a>
                  </li>
                  <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i>
                      {{ $community->followers }} Followers</a></li>
                </ul>
              </div>
            </div>
            <nav class="comunity-nav">
              <ul role="tablist">
                <li class="community-navlinks" id="basic"><a aria-controls="basic-details" role="tab"
                    data-toggle="tab">Basic Details</a>
                </li>
                <li class="community-navlinks" id="jury"><a aria-controls="jury-members" role="tab" data-toggle="tab">Jury
                    Members</a></li>
                <li class="community-navlinks" id="partners"><a aria-controls="3" role="tab"
                    data-toggle="tab">Partners</a></li>
                <li class="community-navlinks" id="rule"><a aria-controls="4" role="tab" data-toggle="tab">Rules</a></li>
                <li class="community-navlinks" id="miscellaneous"><a aria-controls="5" role="tab"
                    data-toggle="tab">Miscellaneous</a></li>
              </ul>

            </nav>
          </div>
          <div class="col-sm-3">
            <a href="#" class="join-btn"><i class="fa-solid fa-floppy-disk"></i> Save</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="section">
    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-1 to_animate" data-animation="fadeInUp">
                  </div> -->
        <div class="col-sm-9 to_animate" data-animation="fadeInRight">
          <div class="tab-content tab-content-no">
            <div role="tabpanel" id="basic-details" class="mommunity-main tab-pane post-main fade in active">
              <form class="login-form" method="post"
                action="{{ route('frontendcommunity.update', $community->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name*</label>
                      <p>(Cannot be changed)</p>
                      <input type="text" placeholder="" name="name" value="{{ $community->name ?? '' }}"
                        class="form-control" required readonly>
                    </div>
                  </div>
                  <div class="col-sm-6"></div>

                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>City*</label>
                      <p>(Can’t be updated)</p>
                      <input type="text" name="city" placeholder="" value="{{ $community->city ?? '' }}"
                        class="form-control" required readonly>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Country*</label>
                      <p>(Can’t be updated)</p>
                      <select class="select-icon" value="{{ old('country') }}" name="country" disabled>
                        @foreach ($countries as $country)
                          <option value="{{ $country->country_name }}">
                            {{ $country->country_name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Industry*</label>
                      <p>Which industry/sector does this community belong to</p>
                      <select class="select-icon" name="industry" value="{{ old('industry') }}">
                        @foreach ($industries as $industry)
                          <option value="{{ $industry->name }}">{{ $industry->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">

                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Logo</label>
                      <p>Logo of the community</p>
                      <div class="cam">
                        <img src="{{ asset('backEnd/image/community_image/' . $community->logo) }}" width="100">
                        <div id="profile" class="edit-photo2">
                          <div class=""><img src="{{ url('we/images/cam-icon.png') }}"></div>
                          <input type="file" class="form-control" name="image" />
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <br>
                <div class="row row-sm">
                  <div class="d-flex pagination wd-100p">

                    <button type="submit" class="btn-save">Save</button>
                  </div>
                </div>



              </form>
            </div>

            <div role="tabpanel" class="tab-pane hidden" id="jury-members">
              <div class="row">
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2 class="jury-heading">Jury Members</h2>
                    </div>
                    <div class="col-sm-6">
                      <a class="add-jury text-right" onclick="openJuryModal()">+ Add Jury
                        Member</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="jury-tab-list">
                    <ul>
                      <li>
                        <h2>Atul Ahlawat</h2>
                      </li>
                      <li>
                        <p>Social Worker</p>
                      </li>
                      <li>
                        <p class="active-green">Last active: 34 mins</p>
                      </li>
                      <li><a href="#"><img src="images/expand-icon.png"></a></li>
                      <li class="pull-right"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <ul>
                      <li>
                        <h2>Jayesh Bidani</h2>
                      </li>
                      <li>
                        <p>Businessman</p>
                      </li>
                      <li>
                        <p class="active-red">Haven’t logged in</p>
                      </li>
                      <li><a href="#"><img src="images/expand-icon.png"></a></li>
                      <li class="pull-right"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>


            </div>
            <div role="tabpanel" class="tab-pane hidden" id="partners">
              <div class="row">
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2 class="jury-heading">Partners</h2>
                    </div>
                    <div class="col-sm-6">
                      <a class="add-jury text-right" id="add-jury" onclick="openPartnerModal()">+
                        Add New Partners</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="jury-tab-list">
                    <ul>
                      <li>
                        <h2>ITC Wholesales</h2>
                      </li>
                      <li>
                        <p>Sadar Bazar, Ranchi</p>
                      </li>
                      <li>
                        <p>Associate Partner</p>
                      </li>
                      <li><a href="#"><img src="images/expand-icon.png"></a></li>
                      <li class="pull-right"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <ul>
                      <li>
                        <h2>Ram Medicines</h2>
                      </li>
                      <li>
                        <p>Gopinath Bazar</p>
                      </li>
                      <li>
                        <p>Knowledge Partner</p>
                      </li>
                      <li><a href="#"><img src="images/expand-icon.png"></a></li>
                      <li class="pull-right"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane hidden" id="rules">Rules</div>
            <div role="tabpanel" class="tab-pane hidden" id="miscellaneous">Miscellaneous</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Partners Modal --}}
  <div class="add-partner-modal hidden" id="add-partner-modal">
    <div class="add-modal">
      <i class="fas fa-close" id="partner-close" onclick="closePartnerModal()"></i>
      <center>
        <h1>Add Partner</h1>
      </center>
      <br>
      <form action="#">
        <div class="modal-input">
          <label for="POC_name">
            <p>Enter partner POC name*</p>
          </label>
          <input class="add-modal-input" type="text" name="POC_name" id="POC_name">
        </div>

        <div class="modal-input">
          <label for="POC_email">
            <p>Enter POC's email id</p>
          </label>
          <input class="add-modal-input" type="text" name="POC_email" id="POC_email">
        </div>
        <div class="modal-input">
          <label for="Business_name">
            <p>Business Name</p>
          </label>
          <input class="add-modal-input" type="text" name="Business_name">
        </div>
        <center> <button>Add</button></center>
      </form>

    </div>
  </div>



  <div class="add-jury-modal hidden" id="add-jury-modal">
    <div class="jury-modal">
      <i class="fas fa-close" id="jury-close" onclick="closeJuryModal()"></i>
      <center>
        <h1>Add Jury Member</h1>
      </center>
      <br>
      <form action="#">
        <div class="modal-input">
          <label for="POC_name">
            <p>Enter jury name*</p>
          </label>
          <input class="add-modal-input" type="text" name="POC_name" id="POC_name">
        </div>

        <div class="modal-input">
          <label for="POC_email">
            <p>Enter their email id</p>
          </label>
          <input class="add-modal-input" type="text" name="POC_email" id="POC_email">
        </div>
        <div class="modal-input">
          <label for="Business_name">
            <p>Linkedin ID*</p>
          </label>
          <input class="add-modal-input" type="text" name="Business_name">
        </div>
        <center> <button>Add</button></center>
      </form>

    </div>
  </div>

  <script>
    const community_links = document.getElementsByClassName("community-navlinks");
    const community_tabs = document.getElementsByClassName("tab-pane");

    for (let i = 0; i <= community_links.length; i++) {
      community_links[i].addEventListener('click', () => {

        if (community_links[i].id == "basic") {


          community_tabs[0].classList.add("show");
          community_tabs[0].classList.remove("hidden");

          community_tabs[1].classList.add("hidden");
          community_tabs[1].classList.remove("show");

          community_tabs[2].classList.add("hidden");
          community_tabs[2].classList.remove("show");

          community_tabs[3].classList.add("hidden");
          community_tabs[3].classList.remove("show");

          community_tabs[4].classList.add("hidden");
          community_tabs[4].classList.remove("show");
        } else if (community_links[i].id == "jury") {

          community_tabs[0].classList.remove("show");
          community_tabs[0].classList.add("hidden");

          community_tabs[1].classList.add("show");
          community_tabs[1].classList.remove("hidden");

          community_tabs[2].classList.add("hidden");
          community_tabs[2].classList.remove("show");

          community_tabs[3].classList.add("hidden");
          community_tabs[3].classList.remove("show");
          community_tabs[4].classList.add("hidden");
          community_tabs[4].classList.remove("show");

        } else if (community_links[i].id == "partners") {

          community_tabs[0].classList.remove("show");
          community_tabs[0].classList.add("hidden");

          community_tabs[1].classList.remove("show");
          community_tabs[1].classList.add("hidden");

          community_tabs[2].classList.add("show");
          community_tabs[2].classList.remove("hidden");

          community_tabs[3].classList.add("hidden");
          community_tabs[3].classList.remove("show");

          community_tabs[4].classList.add("hidden");
          community_tabs[4].classList.remove("show");

        } else if (community_links[i].id == "rule") {

          community_tabs[0].classList.remove("show");
          community_tabs[0].classList.add("hidden");

          community_tabs[1].classList.remove("show");
          community_tabs[1].classList.add("hidden");

          community_tabs[2].classList.remove("show");
          community_tabs[2].classList.add("hidden");

          community_tabs[3].classList.remove("hidden");
          community_tabs[3].classList.add("show");

          community_tabs[4].classList.add("hidden");
          community_tabs[4].classList.remove("show");

        } else {
          community_tabs[0].classList.remove("show");
          community_tabs[0].classList.add("hidden");

          community_tabs[1].classList.remove("show");
          community_tabs[1].classList.add("hidden");

          community_tabs[2].classList.remove("show");
          community_tabs[2].classList.add("hidden");

          community_tabs[3].classList.add("hidden");
          community_tabs[3].classList.remove("show");

          community_tabs[4].classList.remove("hidden");
          community_tabs[4].classList.add("show");
        }
      })
    }

    function openJuryModal() {
      let juryModal = document.getElementById("add-jury-modal");
      // document.body.style.overflow = "hidden";
      juryModal.classList.add("show");
      juryModal.classList.remove("hidden")
    }

    function openPartnerModal() {
      let partnerModal = document.getElementById("add-partner-modal");
      // document.body.style.overflow = "hidden";
      partnerModal.classList.add("show");
      partnerModal.classList.remove("hidden")
    }

    function closePartnerModal() {
      document.body.style.overflow = "auto";
      let partnerModal = document.getElementById("add-partner-modal");

      partnerModal.classList.add("hidden");
      partnerModal.classList.remove("show");
    }

    function closeJuryModal() {
      document.body.style.overflow = "auto";
      let juryModal = document.getElementById("add-jury-modal");

      juryModal.classList.add("hidden");
      juryModal.classList.remove("show");
    }
  </script>
@endsection


<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
