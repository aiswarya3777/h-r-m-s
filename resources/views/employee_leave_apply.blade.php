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
                        <form id="add_project">
                            <label for="message-text" class="col-form-label">Leave Type</label>
                            <div class="form-group">
                                <select name="" id="" class="form-control" value="">
                                    <option value="">Select Leave Type</option>
                                    <option value="">Casual Leave</option>
                                    <option value="">Medical Leave</option>
                                    <option value="">Loss of Pay</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">From</label>
                                <input type="date" class="form-control" id="client_name" name="client_name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">To</label>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">No.of Days</label>
                                <input type="text" class="form-control" id="end_date" name="end_date">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Leave Reason</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                <button type="submit" class="btn btn-dark">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <table class="table table_list">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Employee Name</th>
                <th scope="col">Leave Type</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">No.of Days</th>
                <th scope="col">Reason</th>

                <th scope="col">Status</th>

            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Aiswarya k</td>
                <td>Medical</td>
                <td>27 Feb 2019</td>
                <td>27 Feb 2019</td>
                <td>2 Days</td>
                <td>Going to Hospital</td>

                <td>Approved</td>
            </tr>
            <tr>
                <td>Aiswarya k</td>
                <td>Medical</td>
                <td>27 Feb 2019</td>
                <td>27 Feb 2019</td>
                <td>2 Days</td>
                <td>Going to Hospital</td>
                <td>Approved</td>
            </tr>
            <tr>
                <td>Aiswarya k</td>
                <td>Medical</td>
                <td>27 Feb 2019</td>
                <td>27 Feb 2019</td>
                <td>2 Days</td>
                <td>Going to Hospital</td>

                <td>Approved</td>
            
            </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $("#add_project").validate({
                rules: {
                    project_name: {
                        required: true
                    },
                    client_name: {
                        reqiured: true
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