<h1>Our First Page</h1>
<a href="{{route('mypost')}}">Post Page</a>

{{5 + 9}}

<br><br>
{{"Hello world"}}

<br><br>
{{"<h1>Hello world</h1>"}}
<br><br>
{!!"<h1>Hello world</h1>"!!}

{!! "<script>alert('Php laravel')</script>" !!}
{{-- {{"<script>alert('Php laravel')</script>"}} --}}

<br><br>
@php
    $cric = "Circket";
@endphp

{{$cric}}

@php
    $names = ['shahid afridi','gautam gambir','shoib akhter'];
    $user = "khan";
@endphp

{{--<ul>
@foreach ($names as $name)
    <li>
        {{$loop->iteration}} - {{ $name}}
    </li>
@endforeach
</ul>--}}


<ul>
@foreach ($names as $name)
    @if($loop->first)
        <li style = "color :red;">{{$name}}</li>
    @elseif($loop->last)
        <li style="color:green;">{{$name}}</li>
    @else
        <li>{{$name}}</li>
    @endif
@endforeach

</ul>

@{{$user}}

@@if()
