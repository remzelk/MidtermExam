@extends('layouts.mainlayout')
@section('title', 'Create')
@section('content')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create Employee</h3>
                        <form action="/Employees/" method="POST">
                        @csrf
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="EmployeeNumber" id="EmployeeNumber" placeholder="Employee Number">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="LastName" id="LastName" placeholder="Last Name">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name">
                            </div>
                            <div class="col-md-12">
                                <p>Birthday:<br>
                                <input class="form-control" type="date" name="Birthday" id="Birthday" placeholder="Birthday"></p>
                            </div>
                            <div class="col-md-12">
                                <p>Gender:<br> 
                                <select class="form-select mt-3" name="Gender" id="Gender">
                                      <option value="option" disabled>Option</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                               </select></p>
                           </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" value="add" class="btn btn-primary">Add Employee</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection