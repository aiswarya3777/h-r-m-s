@extends('employee_layout')
@section("content")
<div class="container">
    <!-- modal -->
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"data-whatever="@mdo">Add Work</button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Work Done</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Project Name</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Task Done</label>
                     <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Date</label>
                        <input type="date" name="" id="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Time Spend</label>
                        <input type="time" name="" id="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Start Time</label>
                        <input type="time" name="" id="" class="form-control">
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

    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Task Done</p>
                  <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
      <div class="col-8"></div>
      <div class="col-4">
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
      </div>
    </div>
    
</div>
@endsection