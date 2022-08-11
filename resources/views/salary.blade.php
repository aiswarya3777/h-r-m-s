@extends('layout')
@section("content")
  <!-- modal -->
  <div class="row">
    <div class="col-md-10 col-6"></div>
    <div class="col-md-2 col-2">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@mdo">Add Salary</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Salary</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="add_project">
                <div class="form-group col-sm-12">
                    <label for="message-text" class="col-form-label">Staff Name</label>
                    <select name="" id="priority" class="form-control" name="priority">
                        <option value="">Select --</option>
                      <option value="">Aiswarya</option>
                      <option value="">Swetha</option>
                      <option value="">Sheena</option>
                      <option value="">Najila</option>
                      <option value="">Anjali</option>
                    </select>
                  </div>
              <div class="form-group col-sm-12">
                <label for="recipient-name" class="col-form-label">Net Salary</label>
                <input type="text" class="form-control" id="project_name" name="project_name">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Basic salary</label>
                <input type="text" class="form-control" id="client_name" name="client_name">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">TDS</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">DA</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">ESI</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">HRA</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">PF</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Leave</label>
                <input type="text" class="form-control" id="project_team" name="project_team">
              </div>
              <div class="form-group col-sm-12">
                <label for="message-text" class="col-form-label">Conveyance</label>
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
  <!-- end modal -->
  <!-- table salary -->
  <div class="container">
    <table class="table table_list">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Employee Name</th>
          <th scope="col">Employee ID</th>
          <th scope="col">Email</th>
          <th scope="col">Join Date</th>
          <th scope="col">Role</th>
          <th scope="col">Payslip</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td>Aiswarya k</td>
          <td>EM-10</td>
          <td>aiswarya@gmail.com</td>
          <td>27 Feb 2019</td>
          <td><select name="" id="">
            <option value="">Select</option>
            <option value="">Web Development</option>
            <option value="">Designer</option>
            <option value="">Tester</option>
          </select></td>
          <td><button type="submit" class="btn btn-warning"><a href="{{Route('salary_slip')}}">Generate Slip</a></button></td>

          <td><button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Decline</button>
          </td>
        </tr>
        <tr>
          <td>Aiswarya k</td>
          <td>EM-10</td>
          <td>aiswarya@gmail.com</td>
          <td>27 Feb 2019</td>
          <td><select name="" id="">
            <option value="">Select</option>
            <option value="">Web Development</option>
            <option value="">Designer</option>
            <option value="">Tester</option>
          </select></td>
          <td><button type="submit" class="btn btn-warning"><a href="{{Route('salary_slip')}}">Generate Slip</a></button></td>

          <td><button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Decline</button>
          </td>
        </tr>
        <tr>
          <td>Aiswarya k</td>
          <td>EM-10</td>
          <td>aiswarya@gmail.com</td>
          <td>27 Feb 2019</td>
          <td><select name="" id="">
            <option value="">Select</option>
            <option value="">Web Development</option>
            <option value="">Designer</option>
            <option value="">Tester</option>
          </select></td>
          <td><button type="submit" class="btn btn-warning"><a href="{{Route('salary_slip')}}">Generate Slip</a></button></td>

          <td><button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Decline</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end salary table -->
@endsection