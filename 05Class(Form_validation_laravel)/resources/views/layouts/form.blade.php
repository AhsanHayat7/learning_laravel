<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <!--<pre>
        @php
            print_r($errors->all());
        @endphp
        </pre>-->
        @php
            $demo = 1;
        @endphp
        <div class="container mb-2">
              <x-input type="text" name="name" label="Please enter your name" :demo="$demo" />
              <x-input type="email" name="email" label="Please enter your email"  />
              <x-input type="password" name="password" label="Password"/>
              <x-input type="password" name="password_confir" label="Confirm Password" />
              <!-- <h1 class="text-center">Registration</h1>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" value ="{{old('name')}}" />
              <span class="text-danger">
                   {{-- @error('name')
                            {{$message}}
                    @enderror--}}
              </span>-->
            <!--</div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="" class="form-control" value ="{{old('email')}}"  />
              <span class="text-danger">
                    @error('email')
                            {{$message}}
                    @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control"  />
              <span class="text-danger">
                    @error('password')
                            {{$message}}
                    @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" name="password_confir" id="" class="form-control"  />
              <span class="text-danger">
                    @error('password_confir')
                            {{$message}}
                    @enderror
              </span>
            </div>-->
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
