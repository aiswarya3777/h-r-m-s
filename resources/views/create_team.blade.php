@extends('layout')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Create Team</button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Project Team</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group" style="display: inline-block;">
                                <label for="recipient-name" class="col-form-label">Project Name</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group" style="display: inline-block;">
                                <label for="message-text" class="col-form-label">Team Leader</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group" style="display: inline-block;">
                                <label for="message-text" class="col-form-label">Team Members</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="button" class="btn btn-dark">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection