@extends('layout')
@section("content")
<div class="container">
  <!-- modal -->
  <div class="row">
    <div class="col-md-10 col-6"></div>
    <div class="col-md-2 col-2">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@mdo">Add Projects</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="container">
<div class="modal-body">
            <form id="add_project">
              <div class="form-group col-sm-12">
                <label for="recipient-name" class="col-form-label">Project Name</label>
                <input type="text" class="form-control" id="project_name" name="project_name">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Client Name</label>
                <input type="text" class="form-control" id="client_name" name="client_name">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Priority</label>
                <select name="" id="priority" class="form-control" name="priority">
                  <option value="">High</option>
                </select>
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Project Team</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="modal-footer col-sm-12">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-dark">ADD</button>
              </div>
            </form>
          </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h2 class="card-title"><a href="{{Route('project_detail')}}">Project Name</a></h2>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <!-- <a href="{{Route('project_detail')}}" class="btn btn-dark">More .. </a> -->
        </div>
      </div>
    </div>
  
  </div>
  <br><br><br>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script>
  $(document).ready(function () {
    $("#add_project").validate({
      rules: {
        project_name: {
          required: true
        },
        client_name: {
          required: true
        },
        start_date: {
          required: true
        },
        end_date: {
          required: true
        },
        priority: {
          required: true
        },
        project_team: {
          required: true
        }

      }
    });
  });
</script>
@endsection