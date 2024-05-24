<h1>Footer page</h1>


<ul>
    @foreach ($fields as $fi => $f)
        <li>
            {{$fi}} - {{$f}}
        </li>
    @endforeach
</ul>
