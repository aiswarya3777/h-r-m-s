@extends('layout')
@section("content")
<div class="container">
    

    <table class="table table_list">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">Leave Type</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">No.of Days</th>
      <th scope="col">Reason</th>
      
      <th scope="col">Action</th>
      
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
      
    <td><button type="button" class="btn btn-secondary">Approve</button>
  <button type="button" class="btn btn-secondary">Decline</button></td>
    </tr>
    <tr>
    <td>Aiswarya k</td>
      <td>Medical</td>
      <td>27 Feb 2019</td>
      <td>27 Feb 2019</td>
      <td>2 Days</td>
      <td>Going to Hospital</td>
      
    <td><button type="button" class="btn btn-secondary">Approve</button>
  <button type="button" class="btn btn-secondary">Decline</button></td>
    </tr>
    <tr>
    <td>Aiswarya k</td>
      <td>Medical</td>
      <td>27 Feb 2019</td>
      <td>27 Feb 2019</td>
      <td>2 Days</td>
      <td>Going to Hospital</td>
      
    <td><button type="button" class="btn btn-secondary">Approve</button>
  <button type="button" class="btn btn-secondary">Decline</button></td>
    </tr>
  </tbody>
</table>
</div>
@endsection