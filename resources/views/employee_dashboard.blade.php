@extends('employee_layout')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-6" style="height: 50px;"></div>
    <div class="col-6" style="height: 50px;"></div>
  </div>

  <div class="row " style="width: 100%; display: inline; ">
    <div class="col-3" style="display: inline-block;">
      <div class="faicon_style div_margin">

      </div>

    </div>
    <div class="col-3" style="display: inline-block;">

      <div class="card-counter danger">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers">2</span>
        <span class="count-name"><a href="{{Route('employee_list')}}">Projects</a></span>
      </div>

    </div>
    <div class="col-3" style="display: inline-block;">


      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <!-- monthly absent days -->
        <span class="count-numbers">2</span>
        <span class="count-name"><a href="{{Route('attendance')}}">Attendance</a></span>
      </div>
    </div>
    <div class="col-3" style="display: inline-block;">
    </div>
    <div class="col-3"></div>
  </div>


  <!-- second_div -->

  <div class='row dashboard-cards'>
    <div class="col-2"></div>
    <div class='card col-md-4'>
      <div class='card-title'>
        <h2>
          Completed Task
          <small>Your completed task</small>
        </h2>
        <div class='task-count'>
          14
        </div>
      </div>
    </div>
    <div class='card col-md-4'>
      <div class='card-title'>
        <h2>
          Pending Task
          <small>You have 101 pending tasks</small>
        </h2>
        <div class='task-count'>
          101
        </div>
      </div>

    </div>
    <div class="col-2"></div>
    </div>
    <div class='row dashboard-cards'>
      <div class="col-2"></div>
    <div class='card col-md-4'>
      <div class='card-title'>
        <h2>
          Document Task
          <small>You have 9 pending tasks</small>
        </h2>
        <div class='task-count'>
          9
        </div>
      </div>

    </div>
    <div class='card col-md-4'>
      <div class='card-title'>
        <h2>
          Leave Taken
          <small>Your no.of leave</small>
        </h2>
        <div class='task-count'>
          5
        </div>
      </div>

    </div>
    <div class="col-2"></div>
  </div>
</div>
</div>


@endsection