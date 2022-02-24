@extends('we.layouts.layout') @section('front_content')

  <div class="community-banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="community-ban-cintent we-support-banner">
            <div class="female-user-content">
              <h2>WE Support</h2>
              <ul class="communi-list">
                <li>Welcome to WE Support Page. View all programmes and <br>events FAQs here.</li>
              </ul>
              <div class="search-ban">
                <input type="search" placeholder="Search"><i class="fa fa-search" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <nav class="comunity-nav">
            @php
              $cat = DB::table('faqcategories')->get();
            @endphp
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <ul>
                @foreach ($cat as $catData)
                  <li>
                    <a class="nav-link active" id="nav-{{ $catData->name }}-tab" data-toggle="tab"
                      href="#nav-{{ $catData->name }}" onclick="filter_faq('{{ $catData->name }}')" role="tab"
                      aria-controls="nav-{{ $catData->name }}" aria-selected="true">{{ $catData->name }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-{{ $catData->name }}" role="tabpanel"
              aria-labelledby="nav-{{ $catData->name }}-tab">
              <div id="Womennovator" class="tabcontent faq-sec ">
                <div id="faq-accordion" class="panel-group collapse-unstyled">
                  @foreach ($faqshow as $faq)
                    <div class="panel">
                      <h4>
                        <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse{{ $faq->id }}"
                          class="collapsed">
                          {{ $faq->faqques ?? '' }}
                        </a>
                      </h4>
                      <div id="faq-collapse{{ $faq->id }}" class="panel-collapse collapse">
                        <div class="panel-content"> {!! $faq->faqans ?? '' !!}</div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="incubate-form">
            <h3>Couldn’t find what you were looking for?</h3>
            <div class="incubate-form-sec">
              <form action="{{ url('we/add/faqsupport') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Name*</label>
                  <input class="form-control" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label>Phone*</label>
                  <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                </div>
                <div class="form-group">
                  <label>Query Regarding*?</label>
                  <select class="form-control" name="category" required>
                    <option value="Womennovator">Womennovator</option>
                    <option value="Events">Events</option>
                    <option value=" Incubation"> Incubation</option>
                    <option value="Awards">Awards</option>
                    <option value="Community">Community</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Query</label>
                  <textarea class="form-control" name="query" placeholder="Write your queries here."></textarea>
                </div>
                {{-- <div class="form-group skip">
                  <input type="checkbox"> Skip Pitch Deck (You will have to enter all details manually)
                </div> --}}
                <button class="btn-continue">Send your query</button>
              </form>

            </div>
            {{-- <div class="note">
              <p>NOTE:</p>
              <ul>
                <li>Programme starts January, 2021. See the whole timeline here.</li>
                <li>Access is entirely basis criteria and first come first serve basis. View the entire creteria here.
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>


 <!-- <section class="section get-the-letest">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p>Get the latest resources, reminders and alerts from us. Sign up to our newsletter!</p>
          <div class="mail-submit">
            <input placeholder="Please add your email id here."><button class="btn-submit">Submit</button>
          </div>
        </div>
        <div class="col-sm-12">

        </div>
      </div>

    </div>
  </section>-->

  <div class="modal fade" id="request-suss" role="dialog">
    <div class="modal-dialog modal-width">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="images/close-icon.png"></button>

        </div>
        <div class="modal-body jury-popup">
          <div class="text-center">
            <h3>Request successfully sent. </h3>
          </div>

          <div class="sussecsfull">
            <div class="check-box"><img src="images/check-wt.png"></div>

          </div>
          <div class="text-center">
            <a class="back-btn" href="">Go back</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  // Filter faqs according to their category
  function filter_faq(cat) {
    console.log(cat);
    let _token = $("input[name=_token]").val();

    $.ajax({
      type: "post",
      url: "/we/faq",
      data: {
        _token,
        cat
      },
      success: function(result) {
        $('#faq-accordion').html(result);
      }
    });
  }
</script>
<!-- eof #box_wrapper -->
<!--</div>-->
<!-- eof #canvas -->
