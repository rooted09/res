@extends('backoffice.layouts.app')
@section('content')
@section('table','Admin')
@section('subtable','Auth')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{route('auth.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1"  class="form-label">Name :</label>
                <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->name}}" name='name' >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E-mail :</label>
                <input type="email" class="form-control" value="{{Auth::guard('admin')->user()->email}}" name='email'  >
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary">Enregistrer</button>
            </div>
            <div class="mb-3">
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-link">Nouveau Mot de pass</a>
            </div>
        </form>
        @include('backoffice.auth.edit')
    </div>
</div>
@endsection

