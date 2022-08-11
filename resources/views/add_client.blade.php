@extends('layout')
@section("content")
<div class="container">
    <!-- modal -->
<div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"data-whatever="@mdo">Add Clients</button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Clients</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group" style="display: inline-block;">
                      <label for="recipient-name" class="col-form-label">First Name</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group" style="display: inline-block;">
                      <label for="message-text" class="col-form-label">Last Name</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">User Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="recipient-name" class="col-form-label">Confirm Password</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">Client ID</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">Phone Number</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">Company Name</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">Designation</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group" style="display: inline-block;">
                        <label for="message-text" class="col-form-label">Gender:</label><br>
                        Male:<input type="radio"  id="recipient-name" name="gender">
                        Female:<input type="radio"  id="recipient-name" name="gender">
                        Other:<input type="radio"  id="recipient-name" name="gender">

                      </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  <button type="button" class="btn btn-dark">ADD</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- end modal -->
    <div class="row" >
        <div class="card col-3" style="width: 18rem;margin-top: 100px; display: block;">
            <img class="card-img-top card_image" src="{{'images/employee.jfif'}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Client Name</h5>
              <p class="card-text">Company Name</p>
              <a href="#" class="btn btn-dark">View more..</a>
            </div>
    </div>
   
        <div class="card col-3" style="width: 18rem;margin-top: 100px;">
            <img class="card-img-top card_image" src="{{'images/employee.jfif'}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Client Name</h5>
              <p class="card-text">Company Name</p>
              <a href="#" class="btn btn-dark">View Profile</a>
            </div>
    </div>
    <div class="card col-3" style="width: 18rem;margin-top: 100px;">
        <img class="card-img-top card_image" src="{{'images/employee.jfif'}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Client Name</h5>
          <p class="card-text">Company Name</p>
          <a href="#" class="btn btn-dark">View Profile</a>
        </div>
</div>
<div class="card col-3" style="width: 18rem;margin-top: 100px;">
    <img class="card-img-top card_image" src="{{'images/employee.jfif'}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Client Name</h5>
      <p class="card-text">Company Name</p>
      <a href="#" class="btn btn-dark">View Profile</a>
    </div>
</div>

</div>
</div>

@endsection