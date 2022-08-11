@extends('layout')
@section("content")

<div class="container">
  <div class="header-body">
    <div class="row">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
               
                <span class="h2 font-weight-bold mb-0"><a href="{{Route('add_project')}}">Recent Projects</a></span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-chart-bar"></i>
                </div>
              </div>
            </div>
           
          </div>
        </div>
     
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                
                <span class="h2 font-weight-bold mb-0"><a href="{{Route('employee_list')}}">New Employees</a></span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-danger mr-2"><i class=""></i></span>
              <span class="text-nowrap"></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                
                <span class="h2 font-weight-bold mb-0"><a href="{{Route('attendance')}}">Attendance</a>   </span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                  <i class="fas fa-calendar-o"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-warning mr-2"><i class=""></i></span>
              <span class="text-nowrap"></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                <span class="h2 font-weight-bold mb-0"><a href="{{Route('client')}}">Clients</a></span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                  <i class="fas fa-handshake-o"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class=""></i> </span>
              <span class="text-nowrap"></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- statistic -->
    <div class="row stats">

      <div class="col">
        <!-- <div class="statContainer blue shadow-sm">
          <div class="title text-center"></div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-center">TOTAL </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
            <div class="p-2 flex-fill text-center status">COMPLETED </br>
              <h5 class="ont-weight-bold">20</h5>
            </div>
          </div>
        </div> -->
      </div>
    
      <div class="col">
        <div class="statContainer yellow shadow-sm">
          <div class="title text-center">Today's Leave</div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-center">On Leave </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
            <div class="p-2 flex-fill text-center status">On Duty </br>
              <h5 class="ont-weight-bold">20</h5>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col">
        <div class="statContainer fountainBlue shadow-sm">
          <div class="title text-center">Completed Projects</div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-center">Completed </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
            <div class="p-2 flex-fill text-center status">Pending </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col">
        <div class="statContainer lightBlue shadow-sm">
          <div class="title text-center">New Employee</div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-center">New Joinee </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
            <!-- <div class="p-2 flex-fill text-center status">COMPLETED </br>
              <h5 class="font-weight-bold">20</h5>
            </div> -->
          </div>
        </div>
      </div>
    
      <div class="col">
        <div class="statContainer purple shadow-sm">
          <div class="title text-center">CORRESPONDENCES</div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-center">TOTAL </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
            <div class="p-2 flex-fill text-center status">COMPLETED </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col">
        <!-- <div class="statContainer pink shadow-sm">
          <div class="title text-center">CORRESPONDENCES</div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-center">TOTAL </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
            <div class="p-2 flex-fill text-center status">COMPLETED </br>
              <h5 class="font-weight-bold">20</h5>
            </div>
          </div>
        </div> -->
      </div>
    
      
    
    </div>
    <!-- endstatistic -->
  </div>


<!-- second_div -->
<div class="div_range" style="width: 100%; display: inline; ">
  
  
  
  
  <!-- end second_div -->


  <div class="row">
    <div class="col-1"></div>

    <div class="col-5">
      <h4>Clients</h4>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Client Name</th>
            <th scope="col">Company Name</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>active</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>active</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>active</td>
          </tr>
          <tr>
            <td colspan="2">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-5">
      <h4>Recent Projects</h4>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Project Name</th>
            <th scope="col">Start Date</th>
            <th scope="col">Priority</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Tuesday, 5 July 2022</td>
            <td>High</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Tuesday, 5 July 2022</td>
            <td>High</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jacob</td>
            <td>Tuesday, 5 July 2022</td>
            <td>High</td>
          </tr>
          <tr>
            <td colspan="2">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </td>
          </tr>
        
        </tbody>
      </table>
    </div>

    <div class="col-1"></div>
  </div>
</div>
</div>
@endsection