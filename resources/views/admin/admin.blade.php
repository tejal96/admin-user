@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
     <div class="card">
<div class="card-header">
    <h4>{{$title}}</h4>
      </div>

<table class="table table-bordered">
    <tr>
    <th style="width: 10px;"><input type="checkbox" name="checkall"></th>
    </tr>
    <thead>
      <tr>
        <th>User Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Point</th>
        <th>No. of Refferal</th>
      </tr>
    </thead>
    <tbody>
     @foreach($users as $user)
       <tr>
        <td>{{$user->id}}</td>
         <td>{{$user->name}}</td>
         <td>{{$user->email}}</td>
           <td>{{$user->contact_no}}</td>
           <td>{{$user->point}}</td>
           <td>{{$user->refferals()->count()}}</td>
          </tr>
        @endforeach
        </tbody>
        </table>

    </div>
</div>
    </div>