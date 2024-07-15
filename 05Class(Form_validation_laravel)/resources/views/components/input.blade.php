<!--<div class="container">
        <h1 class="text-center">Registration</h1>-->
<div class="form-group">
        <label for="">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" id="" class="form-control border border-success" />
        <span class="text-danger">
            {{$demo}}
            {{--@error('name')
                {{$message}}
            @enderror--}}
    </span>
</div>
            