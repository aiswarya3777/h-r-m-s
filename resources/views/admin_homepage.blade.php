@extends('layout')
@section("content")
<h1 class="log_name_style">WELCOME ADMIN !!!!</h1>

  <div class="row " style="width: 100%; display: inline; ">
    <div class="col-3" style="display: inline-block;">
      <div class="faicon_style div_margin">
        <!-- <span>
        <i class="fa fa-book " aria-hidden="true"></i>
        </span> -->
      </div>
      <div style="display: inline-block;" class="div_margin">
        <p class="status_div"><a href="{{Route('add_project')}}">Recent Projects</a></p>
        
      </div>
    </div>
    <div class="col-3" style="display: inline-block;">
      <div class="faicon_style div_margin">
        <!-- <span>
        <i class="fa fa-book " aria-hidden="true"></i>
        </span> -->
      </div>
      <div style="display: inline-block;" class="div_margin">
        <p class="status_div"><a href="{{Route('employee_list')}}">New Employees</a></p>
        
      </div>
    </div>
    <div class="col-3" style="display: inline-block;">
      <div class="faicon_style div_margin">
        <!-- <span>
        <i class="fa fa-book " aria-hidden="true"></i>
        </span> -->
      </div>
      <div style="display: inline-block;" class="div_margin">
        <p class="status_div"><a href="{{Route('attendance')}}">Attendance</a></p>
        
      </div>
    </div>
    <div class="col-3" style="display: inline-block;">
      <div class="faicon_style div_margin">
        <!-- <span>
        <i class="fa fa-book " aria-hidden="true"></i>
        </span> -->
      </div>
      <div style="display: inline-block;" class="div_margin">
        <p class="status_div"><a href="{{Route('attendance')}}">Clients</a></p>
        
      </div>
    </div>
  </div>


<!-- second_div -->
<div class="div_range" style="width: 100%; display: inline; ">
  
  
  
  
  <!-- end second_div -->

  <!-- statistic_div -->
  <div class="row">
    <div class="col-2"></div>
    <div class="col-4">
      Statistics
      <form>
        <div class="form-group">
          <label for="formControlRange">Today Leave</label>
          <input type="range" class="form-control-range" id="formControlRange">
        </div>
      </form>
      <form>
        <div class="form-group">
          <label for="formControlRange">completed projects</label>
          <input type="range" class="form-control-range" id="formControlRange">
        </div>
      </form>
      <form>
        <div class="form-group">
          <label for="formControlRange">New Joinee</label>
          <input type="range" class="form-control-range" id="formControlRange">
        </div>
      </form>
      <form>
        
      </form>
    </div>
    <!-- <div class="col-4">
      Statistics
      <div>
        <p>Today Absent</p>
      </div>
      <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header"><img src="" alt="image"></div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
        </div>
      </div>
      <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header"><img src="" alt="image"></div>
        <div class="card-body">
          <h5 class="card-title">Name</h5>
        </div>
      </div>
    </div> -->
    <div class="col-2"></div>
  </div>
  <!-- endstatistic -->
  <div class="row">
    <div class="col-1"></div>

    <div class="col-5">
      <h4>Clients</h4>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
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
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
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
</body>

</html>
@endsection