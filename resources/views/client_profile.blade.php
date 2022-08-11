
@extends('layout')
@section("content")
<!-- <header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Student Profile Page Design Example</h1>
                <p>A responsive student profile page design.</p>
            </div>
        </div>
    </div>
</header> -->

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="{{asset('images/profile.jpg')}}" alt="student dp">
            <h3>Client Name</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Client ID:</strong>321000001</p>
            <p class="mb-0"><strong class="pr-1">Company Name:</strong>Baabtra</p>
            <p class="mb-0"><strong class="pr-1">Contact No.:</strong>9995402269</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td>First name + last name</td>
              </tr>
              <tr>
                <th width="30%">Designation	</th>
                <td width="2%">:</td>
                <td>CEO</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
              <tr>
                <th width="30%">Email ID</th>
                <td width="2%">:</td>
                <td>test@gmail.com</td>
              </tr>
              <!-- <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>B+</td>
              </tr> -->
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     
@endsection