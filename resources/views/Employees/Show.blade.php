@extends('layouts.mainlayout')
@section('title', 'Store')
@section('content')
<table>
<tr>
    <th>Employee Number</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Birthday</th>
    <th>Gender</th>
</tr>
    <tr>
        <td>
            <p>{{  $Employee['EmployeeNumber'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['LastName'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['FirstName'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['Birthday'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['Gender'] }}</p>
        </td>
    </tr>
</table>
@endsection