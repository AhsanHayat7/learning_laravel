<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: "  *";
            color: red;
        }
     </style>   
</head>
<body class="bg-dark">
    <form action="{{url('/')}}/customer" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h1 class="text-center text-primary">Customer Registration</h1>
            <div class="row">
                <div class="form-group col-md-6 required">
                <label for="">Name:</label>
                <input type="text" name="name" id="" class="form-control" >
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="">Email</label>
              <input type="email" name="email" id="" class="form-control">
              <span class="text-danger">
                @error('email')
                        {{$message}}
                @enderror
          </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
            <span class="text-danger">
                @error('password')
                        {{$message}}
                @enderror
           </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confir" id="" class="form-control"  />
            <span class="text-danger">
                  @error('password_confir')
                          {{$message}}
                  @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" class="form-control">
            <span class="text-danger">
                @error('country')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="state">State:</label>
            <input type="text" name="state" id="state" class="form-control">
            <span class="text-danger">
                @error('state')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-12 required">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control" rows="3"></textarea>
            <span class="text-danger">
                @error('address')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <span class="text-danger">
                @error('gender')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" class="form-control">
            <span class="text-danger">
                @error('dob')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</div>
</form>
</body>
</html>