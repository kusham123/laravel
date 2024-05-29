<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Customer form</h2>
  <form action="{{ url('/')}}/customer" method="post">
    @csrf
    
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
      <span class="text-danger">
          @error('name')
            {{$message}}
          @enderror
      </span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
      <span class="text-danger">
          @error('email')
            {{$message}}
          @enderror
      </span>
    </div>
    
    <div class="form-group">
       <input class="form-check-input" type="radio" id="check1" name="gender" value="M" checked>
       <label class="form-check-label">M</label>
       <input class="form-check-input" type="radio" id="check1" name="gender" value="F" checked>
       <label class="form-check-label">F</label>
       <input class="form-check-input" type="radio" id="check1" name="gender" value="O" checked>
       <label class="form-check-label">O</label>
    </div>

    <div class="form-group">
      <label for="address">address:</label>
      <input type="address" class="form-control" id="pwd" placeholder="Enter address" name="address" value="{{old('address')}}">
      <span class="text-danger">
          @error('address')
            {{$message}}
          @enderror
      </span>
    </div>

    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>