<h1>Header Page</h2>

{{--<p>{{$codes}}</p>--}}
<ul>
    @foreach ($languages as $lan => $value)
        <li>{{$lan}} - {{$value}}</li>
    @endforeach
</ul>

