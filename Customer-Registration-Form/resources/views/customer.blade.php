<!doctype html>
<html lang="en">
  <head>--
    <title>Customers Registrations Form</title>
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
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color: white">FinTech</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-log-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}" style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/customer')}}" style="color: white">Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <form action="{{$url}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">{{$title}}</h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                <label for="">Name:</label>
                <input type="text" name="name" id="" class="form-control" value="{{$customer->name ?? ''}}">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="">Email</label>
              <input type="email" name="email" id="" class="form-control" value="{{$customer->email ?? ''}}">
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
            <input type="password" name="password_confirmation" id="" class="form-control" />
            <span class="text-danger">
                  @error('password_confirmation')
                          {{$message}}
                  @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" class="form-control" value="{{$customer->country ?? ''}}">
            <span class="text-danger">
                @error('country')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="state">State:</label>
            <input type="text" name="state" id="state" class="form-control" value="{{$customer->state ?? ''}}">
            <span class="text-danger">
                @error('state')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-12 required">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control"  rows="3"></textarea>
            <span class="text-danger">
                @error('address')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group col-md-6 required">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control" value="{{$customer->gender ?? ''}}">
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
            <input type="date" name="dob" id="dob" class="form-control" value="{{$customer->dob ?? ''}}">
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