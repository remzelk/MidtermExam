@extends('layouts.mainlayout')
@section('title', 'Create')
@section('content')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Edit {{ $Employee['EmployeeNumber'] }}</h3>
                        <form action="/Employees/" method="POST">
                        @csrf
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="EmployeeNumber" id="EmployeeNumber" value="<?php echo $Employee['EmployeeNumber'] ?>">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="LastName" id="LastName" value="<?php echo $Employee['LastName'] ?>">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="FirstName" id="FirstName" value="<?php echo $Employee['FirstName'] ?>">
                            </div>
                            <div class="col-md-12">
                                <p>Birthday:<br>
                                <input class="form-control" type="date" name="Birthday" id="Birthday" value="<?php echo $Employee['Birthday'] ?>"></p>
                            </div>
                            <div class="col-md-12">
                                <p>Gender:<br>
                                 @if($Employee['Gender'] == 'Male')
                                <select class="form-select mt-3" name="Gender" id="Gender">
                                      <option value="option" disabled>Option</option>
                                      <option value="Male"  selected>Male</option>
                                      <option value="Female">Female</option>
                               </select>
                                 @elseif($Employee['Gender'] == 'Female')
                                 <select class="form-select mt-3" name="Gender" id="Gender">
                                      <option value="option" disabled>Option</option>
                                      <option value="Male">Male</option>
                                      <option value="Female" selected>Female</option>
                               </select>
                                @endif
                            </p>
                           </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" value="edit" class="btn btn-primary">Edit Employee</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection