<h1>Users page</h1>


{{--<div>The best framework for web developement {{$user}} and in this framework we use many programming languages like HTML,CSS,JAVASCRIPT, {{!empty($lang) ? $lang : 'languages are not avaliable'}}.</div>--}}
<div>{!! $Alert !!}</div>

<div>The best framework for web developement {{$user}} and in this framework we use many programming languages like  {{!empty($lang) ? $lang : 'languages are not avaliable'}}.</div>

@foreach ($info as $id => $u)
    <h3>{{$id}}.{{$u['name']}} | {{$u['phone']}} | {{$u['city']}} | <a href="{{route('user',$id)}}">Show</a></h3>
@endforeach
