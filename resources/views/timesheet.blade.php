@extends('layout')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="row">
                <!-- <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@fat">Add Work</button> -->
                    <i class="fa fa-plus" data-toggle="modal" data-target="#exampleModal"></i>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Project Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Date</label>
                                        <input type="date" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Today's Task</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Spending time</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Starting Time</label>
                                        <input type="time" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>Project Name</p>
            </div>
            <div class="row">
                <p>Date</p>
            </div>
            <div class="row">
                <p>Project task done</p>
            </div>
            <div class="row">
                <p>Time Spended</p>
            </div>
            <div class="row">
                <p>Starting Time</p>
            </div>
        </div>
        <div class="col-3">

        </div>
        <div class="col-3">

        </div>
        <div class="col-3">

        </div>
    </div>
</div>
@endsection