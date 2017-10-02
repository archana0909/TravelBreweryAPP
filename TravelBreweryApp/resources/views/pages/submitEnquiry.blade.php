
<div class="container-fluid enquiry">
  <div class="row">
    <div class="col-sm-12">
      <form id="query-form"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group ">
          <label for="example-text-input" class="col-2 col-form-label">Name <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="text"  name="Name"  id="text-name" placeholder="Your Name">
          </div>
        </div>
        <div class="form-group ">
          <label for="example-email-input" class="col-2 col-form-label">Email <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="email" name="Email" placeholder="Email" id="email-input">
          </div>
        </div>
        <div class="form-group ">
          <label for="example-tel-input" class="col-2 col-form-label">Telephone <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="text" name="Phone"  placeholder="Mobile Number(+91-xxxxx-xxxxx)" id="tel-input">
          </div>
        </div>
        <div class="form-group ">
          <label for="example-tel-input" class="col-2 col-form-label">Query <span>* </span></label>
          <div class="col-10">
            <input class="form-control" type="text" name="Query"  placeholder="Type in your Question Here" maxlength="400" style="height:75px;"id="query-input">
          </div>
        </div>
        <div class="text-center ">
          <button type="button" name="query-button"  id="query-button" class="btn btn-primary ">Submit Enquiry</button>
        </div>
        <br>
      </form>
    </div>
  </div>
</div>
