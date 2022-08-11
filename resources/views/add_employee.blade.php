@extends('layout')
@section("content")
<div class="container container_class p-2 bg-light border">
    <form id="add_employee">
        <div class="container">

            <div class="row">
                <div id="err"></div>
                <div class="col-md-2">
                    <label for="first_name">First Name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="First name" name="em_fname">
                </div>
                <div class="col-md-2">
                    <label for="first_name">Last Name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Last name" name="em_lname">
                </div>
                <div class="col-md-2">
                    <label for="first_name">Email Address</label>
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="Email Address" name="em_email">
                </div>
                <div class="col-md-2">
                    <label for="">Contact No.</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Contact No" name="em_contact">
                </div>
                <div class="col-md-2">
                    <label for="first_name">Gender</label>
                </div>
                <div class="col-md-4">
                    <input type="radio" class="" placeholder="First name" name="gender">Female
                    <input type="radio" class="" placeholder="First name" name="gender">Male
                    <input type="radio" class="" placeholder="First name" name="gender">Others
                </div>
                <div class="col-md-2">
                    <label for="first_name">Date of Birth</label>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" placeholder="DOB" name="em_dob">
                </div>
                <div class="col-md-2">
                    <label for="first_name">Employee ID</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Employee ID" name="em_id">
                </div>
                <div class="col-md-2">
                    <label for="first_name">Employee Type</label>
                </div>
                <div class="col-md-4">
                    <select name="" id="" class="form-control">
                        <option value="">Select</option>
                        <option value="">Full Time</option>
                        <option value="">Work Fromm Home</option>
                        <option value="">Part Time</option>
                        <option value="">Intern</option>
                    </select>
                </div>
                <!-- <div class="col-2">
                    <label for="first_name">Employee Status</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Employee Status">
                </div> -->
                <div class="col-md-2">
                    <label for="first_name">Address</label>
                </div>
                <div class="col-md-4">
                    <textarea name="em_address" id="" cols="30" rows="2"></textarea>
                </div>
    
                <div class="col-md-2">
                    <label for="first_name">Date of Joining</label>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" placeholder="Date of Joining" name="em_doj">
                </div>
                <div class="col-md-2">
                    <label for="first_name">Designation</label>
    
                </div>
                <div class="col-md-4">
                    <select name="designation" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Developer</option>
                        <option value="">Quality Analyst</option>
                        <option value="">Project Lead</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="first_name">Upload Photo</label>
                </div>
                <div class="col-4">
                    <input type="file" src="" alt="image" class="form-control" name="em_image">
                </div>
    
                <div class="col-md-2"></div>
                <div class="col-md-4"></div>
                <div class="col text-center"><button type="submit" class="btn btn-secondary ">SUBMIT</button></div>
            </div>
        </div>
       
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script>
    $().ready(function () {
        $("#add_employee").validate({
            rules: {
                em_fname: {
                    required: true
                },
                em_lname: {
                    required: true
                },
                em_email:{
                    required:true,
                    email:true
                },
                em_contact:{
                    required:true,
                    number:true
                },
                gender:{
                    required:true
                },
                em_dob:{
                    required:true
                },
                em_id:{
                    required:true
                },
                em_doj:{
                    required:true
                },
                designation:{
                    required :true
                },
                em_address:{
                    required:true
                },
                em_doj:{
                    required:true
                },
                em_image:{
                    required:true
                }
            }
        });
    });
</script>
@endsection