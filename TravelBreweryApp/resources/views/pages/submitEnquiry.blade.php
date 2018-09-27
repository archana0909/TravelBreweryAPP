
<div class="container-fluid enquiry">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 text-center">
      <h4 class="section-heading"> Sign Up for Detailed Itinerary </h4>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <!-- <form id="query-iti"  method="POST" > -->
        {!! Form::open(['id' => 'query-iti' , 'action' => 'AjaxController@submitEnquiryonIti', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group ">
          <label for="example-text-input" class="col-2 col-form-label">Name <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="text"  name="name"  id="name" placeholder="Your Name">
          </div>
        </div>
        <div class="form-group ">
          <label for="example-email-input" class="col-2 col-form-label">Email <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="email" name="email" placeholder="Email" id="email">
          </div>
        </div>
        <div class="form-group ">
          <label for="example-tel-input" class="col-2 col-form-label">Telephone <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="text" name="telephone"  placeholder="Mobile Number(+91-xxxxx-xxxxx)" id="telephone">
          </div>
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::text('message', '', ['class' => 'form-control', 'placeholder' => 'Type your messgage here'])}}
        </div>
        <div class="form-group">

            <label class="col-2 col-form-label" id="tripTitle">triptitle <span>* </span> <?php echo $tour['title']; ?></label>
        

        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary','id'=>'submit-form'])}}
        <br>
        {!! Form::close() !!}

    <!-- Itinerary Redirect Modal -->
    <!-- <div class="modal fade" id="itineraryModal" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close resetForm" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title" id="ModalLongTitle">Thank you for signing up!!</h3>
          </div>
          <div class="modal-body text-center">
            <p> You will shortly receive a mail with the detailed itinerary
            </p>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>

          </div>
        </div>
      </div>
    </div> -->
