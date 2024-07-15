
<h1>Hello Developers how are you doing </h1>

<ul>
@foreach ($languages as $lan => $co )
    <li>{{$lan}} - {{$co}}</li>
@endforeach
</ul>
