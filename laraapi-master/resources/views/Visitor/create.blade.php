@extends('Visitor.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

  <style>
    .card {
  border-radius: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 500px;
  margin: 20px;
  margin: 20px auto;
}

.card-header {
  background-color: #808080;
  color: white;
  font-size: 24px;
  font-weight: bold;
  padding: 20px;
  text-align: center;
  
}

.card-body {
  padding: 60px;
  
}

.form-group {
  margin-bottom: 30px;
  
}

label {
  display: block;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
  
}

input[type="text"],
input[type="datetime-local"] {
  border: none;
  border-radius: 2px;
  box-shadow: inset 0 2px 2px rgba(0, 0, 0, 0.1);
  font-size: 16px;
  padding: 10px;
  width: 100%;
}

input[type="submit"] 
  background-color: #28a745;
  border: none;
  border-radius: 5px;
  color: white;
  font-size
  </style>
</head>
<div class="card">
  <div class="card-header">Add visitors</div>
  <div class="card-body">
    <form action="{{ url('Visitor
  ') }}" method="post">
      {!! csrf_field() !!}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="fromemail">FromEmail</label>
        <input type="text" name="fromemail" id="organization" class="form-control" required>
      </div>
      <div class="form-group">
  <label for="toemail">ToEmail</label>
  <input type="text" name="toemail" id="toemail" class="form-control" required>
</div>

<div class="form-group">
  <label for="contact">Organization</label>
  <input type="text" name="organization" id="contact" class="form-control" required>
</div>


<div class="form-group">
  <label for="contact">Contact</label>
  <input type="text" name="contact" id="contact" class="form-control" required>
</div>

<div class="form-group">
  <label for="c">Rack</label>
  <input type="text" name="rack" id="rack" class="form-control" required>
</div>


<div class="form-group">
  <label for="c">Reason</label>
  <input type="text" name="reason" id="reason" class="form-control" required>
</div>
      
      <input type="submit" value="Save" class="btn btn-success">
    </form>
  </div>
</div>
    </form>
  </div>
</div>
</html>
@stop