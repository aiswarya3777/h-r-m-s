@extends('layout')
@section("content")
<div class="container">
    <div class="row border">
        <div class="col-2 "><img src="images/profile.jpg" alt="profile" class="profile_image"></div>
        <div class="col-4 admin_deatial_1 ">
            <p>Fist Name : Admin</p>
            <p>Last Name : Admin</p>
            <p>Designation : Admin</p>
            <p>Employee ID : 12345</p>
            <p>Date of join :11/11/11</p>
            <button type="button" class="btn btn-secondary">Send Message</button>
        </div>
        <div class="col-1"></div>
        <div class="col-4 admin_deatial_1 ">
            <p>Phone No : +9517538246</p>
            <p>Email : abc@gmail.com</p>
            <p>Birthday : 11/11/11</p>
            <p>Address :
            <div>5th Floor, CAFIT Square, Hilite Business Park, Thondayad Bye-Pass Thondayad, Hilite City, Poovangal,
                Kozhikode, Kerala 673016</div>
            </p>
            <p>Gender : Female</p>
        </div>
        <div class="col-"></div>
        <div class="col-12  collapse_div">
            <p>
                <a class="btn btn-secondary collapse_button" data-toggle="collapse" href="#profile" role="button"
                    aria-expanded="false" aria-controls="collapseExample" >
                    Profile
                </a>
                <a class="btn btn-secondary collapse_button" data-toggle="collapse" href="#project" role="button"
                    aria-expanded="false" aria-controls="collapseExample" >
                    Project
                </a>
            </p>
            <div class="collapse " id="profile">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
            <div class="collapse " id="project">
                <div class="card card-deck ">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><a href="">Project Name</a></div>
                        <div class="card-body">
                            <h5 class="card-title">Deadline</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><a href="">Project Name</a></div>
                        <div class="card-body">
                            <h5 class="card-title">Deadline</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><a href="">Project Name</a></div>
                        <div class="card-body">
                            <h5 class="card-title">Deadline</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>

                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><a href="">Project Name</a></div>
                        <div class="card-body">
                            <h5 class="card-title">Deadline</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection