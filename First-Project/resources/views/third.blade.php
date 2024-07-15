
<h1>Learn only one language first</h1>

@forelse ($languages as $lan => $l)
    <p>{{$lan}} - {{$l}}</p>
@empty
    <p>Not found</p>
@endforelse
