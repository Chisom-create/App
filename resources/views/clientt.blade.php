@extends('layouts.account')
@section('content')

<div class="card" style="margin:20px;">
<div class="card-header">Create New Client</div>
<div class="card-body">
    
    <form action="{{url ('client') }}" method="post">
        {!! csrf_field() !!}
        <label>Company Name</label><br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label><br>
        <input type="text" name="email" id="emial" class="form-control"></br>
        <label>Phone</label><br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <input type="submit" value="Save" id="name" class="btn btn-info"></br>
    </form>
</div>
</div>
@endsection