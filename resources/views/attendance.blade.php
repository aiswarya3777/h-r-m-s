@extends('layout')
@section("content")
<div class="container">
    <!-- <div class="row">
        <div class="col-2"></div>
        <div class="col-6 punch_in">
        <h3>Timesheet 11 Mar 2019</h3>
        <div>
            <h6>Punch In at</h6>
            <p>Wed, 11th Mar 2019 10.00 AM</p>
        </div>
        <button type="button" class="btn btn-secondary btn-lg">Punch In</button>
        </div>
        <div class="col-4"></div>
    </div> -->
    <table class="table" style="margin-top: 100px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Punch In</th>
      <th scope="col">Punch Out</th>
      <th scope="col">Production</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>19 Feb 2022</td>
      <td>10 AM</td>
      <td>7 PM</td>
      <td>9hr</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>19 Feb 2022</td>
      <td>10 AM</td>
      <td>7 PM</td>
      <td>9hr</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>19 Feb 2022</td>
      <td>10 AM</td>
      <td>7 PM</td>
      <td>9hr</td>
    </tr>
  </tbody>
</table>


</div>
@endsection