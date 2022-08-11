@extends('employee_layout')
@section("content")
<div class="container">
  <!-- modal -->
  <div class="row">
    <div class="col-10"></div>
    <div class="col-2">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@mdo">Apply Leave</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply Leave</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Leave Type</label>
                <select name="" id="" class="form-control">
                  <option value="">Select</option>
                  <option value="">Loss of pay</option>
                  <option value="">Casual leave</option>
                  <option value="">Medical Leave</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">From :</label>
                <input type="date" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">To :</label>
                <input type="date" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">No.of Days</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">Reason</label>
                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark">SUBMIT</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <table class="table table_list">
    <thead class="thead-dark">
      <tr>

        <th scope="col">Leave Type</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">No.of Days</th>
        <th scope="col">Reason</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      <tr>


        <td>Medical</td>
        <td>27 Feb 2019</td>
        <td>27 Feb 2019</td>
        <td>2 Days</td>
        <td>Going to Hospital</td>
        <td>New</td>
        <td><button type="button" class="btn btn-secondary">Update</button>
          <button type="button" class="btn btn-secondary">Delete</button>
        </td>
      </tr>
      <tr>

        <td>Medical</td>
        <td>27 Feb 2019</td>
        <td>27 Feb 2019</td>
        <td>2 Days</td>
        <td>Going to Hospital</td>
        <td>Approved</td>
        <td><button type="button" class="btn btn-secondary">Update</button>
          <button type="button" class="btn btn-secondary">Delete</button>
        </td>
      </tr>
      <tr>

        <td>Medical</td>
        <td>27 Feb 2019</td>
        <td>27 Feb 2019</td>
        <td>2 Days</td>
        <td>Going to Hospital</td>
        <td>Decline</td>
        <td><button type="button" class="btn btn-secondary">Update</button>
          <button type="button" class="btn btn-secondary">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection