@extends('layout')
@section("content")
<div class="container">
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