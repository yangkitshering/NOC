@extends('Visitor.layout')
@section('content')
<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
    }

    .card-header {
        background-color: #808080;
        border-bottom: none;
        font-size: 24px;
        font-weight: bold;
        padding: 20px;
        text-align: center;
    }

    .card-body {
        padding: 20px;
    }

    .form-control {
        border-radius: 5px;
        border: none;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
        padding: 10px;
        width: 100%;
    }

    input[type="submit"] {
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        padding: 10px 20px;
    }
</style>

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{ url('Visitor
    /' .$Visitor
    ->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$Visitor
        ->id}}" id="id" />
            <h5><label for="name">Name</label></h5>
            <input type="text" name="name" id="name" value="{{$Visitor
        ->name}}" class="form-control">
            <h5><label for="fromemail">FromEmail</label></h5>
            <input type="text" name="fromemail" id="fromemail" value="{{$Visitor
        ->fromemail}}" class="form-control">
            <h5><label for="toemail">ToEmail</label></h5>
            <input type="text" name="toemail" id="toemail" value="{{$Visitor
        ->toemail}}" class="form-control">
            <h5><label for="contact">Contact</label></br></h5>
            <input type="contact" name="contact"id="contact" value="{{$Visitor
        ->contact}}" class="form-control"></br>
            <h5><label for="organizatio">Organization</label></h5>
            <input type="organization" name="organization"id="organization" value="{{$Visitor
        ->organization}}" class="form-control">
            </br></br>
            <h5><label for="contact">Rack</label></br></h5>
            <input type="rack" name="rack"id="rack" value="{{$Visitor
        ->rack}}" class="form-control"></br>
            <h5><label for="contact">Reason</label></br></h5>
            <input type="reason" name="reason"id="reason" value="{{$Visitor
        ->reason}}" class="form-control"></br>
            <h5><label for="contact">Status</label></br></h5>
            <input type="contact" name="status"id="status" value="{{$Visitor
        ->status}}" class="form-control"></br>
            <input type="submit" value="Update">
        </form>
    </div>
</div>

@stop