@extends('layout')
@section("content")

<div class="container container_class p-2 bg-light border">
    
    <form>
        <div class="row">
            <div class="col-2">
                <label for="first_name">First Name</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-2">
                <label for="first_name">Last Name</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
            <div class="col-2">
                <label for="first_name">Email Address</label>
            </div>
            <div class="col-4">
                <input type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="col-2">
                <label for="first_name">Contact No.</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Contact No">
            </div>
            <div class="col-2">
                <label for="first_name">Gender</label>
            </div>
            <div class="col-4">
                <input type="radio" class="" placeholder="First name" name="name">Female
                <input type="radio" class="" placeholder="First name" name="name">Male
                <input type="radio" class="" placeholder="First name" name="name">Others
            </div>
            <div class="col-2">
                <label for="first_name">Date of Birth</label>
            </div>
            <div class="col-4">
                <input type="date" class="form-control" placeholder="DOB">
            </div>
            <div class="col-2">
                <label for="first_name">Employee ID</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Employee ID">
            </div>
            <div class="col-2">
                <label for="first_name">Employee Type</label>
            </div>
            <div class="col-4">
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
            <div class="col-2">
                <label for="first_name">Address</label>
            </div>
            <div class="col-4">
                <textarea name="" id="" cols="30" rows="2"></textarea>
            </div>
            <div class="col-2">
                <label for="first_name">Date of Joining</label>
            </div>
            <div class="col-4">
                <input type="date" class="form-control" placeholder="Date of Joining">
            </div>
            <div class="col-2">
                <label for="first_name">Designation</label>
               
            </div>
            <div class="col-4">
                <select name="" id="" class="form-control">
                    <option value="">select</option>
                    <option value="">Developer</option>
                    <option value="">Quality Analyst</option>
                    <option value="">Project Lead</option>
                </select>
            </div>
            <div class="col-2">
                <label for="first_name">Upload Photo</label>
            </div>
            <div class="col-4">
                <input type="file" src="" alt="image" class="form-control">
            </div>
            <div class="col-2"></div>
            <div class="col-4"></div>
            <div class="col text-center"><button type="button" class="btn btn-secondary ">SUBMIT</button></div>
        </div>
    </form>
</div>
@endsection