{{--Laravel balde template Basic using php in the blade template file--}}



{{--<h1>Our First Page</h1>
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

{{--<br><br>
@php
    $cric = "Circket";
@endphp

{{$cric}}

@php
    $names = ['shahid afridi','gautam gambir','shoib akhter'];
    $user = "khan";
@endphp--}}

{{--<ul>
@foreach ($names as $name)
    <li>
        {{$loop->iteration}} - {{ $name}}
    </li>
@endforeach
</ul>--}}


{{--<ul>
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

<br><br>
{{5 + 10}}

<br><br>
{{"Coding languages"}}

<br><br>
{!!"<h1>Coding lanaguages</h1>"!!}

{!! "<script>(alert)('Coding languages')</script>"!!}
@php
    $languages = ['python', 'php', 'html', 'css', 'javascript']
@endphp

<br><br>
@php
    $coding = "Languages";
@endphp

{{$coding}}

<ul>
    @foreach ($languages as $lang)
        @if($loop->first)
            <li style="color:red">{{$lang}}</li>
        @elseif($loop->last)
            <li style="color:green ">{{$lang}}</li>
        @else
            <li>{{$lang}}</li>
        @endif

    @endforeach
</ul>
--}}

@php
    $languages = ['Ai'=>'Python','Web'=>'Php','MobileApp'=>'React'];
    //$boolean = True;
    $value = "Coding";
@endphp

{{--@includeWhen($boolean,'pages.header',['codes'=>$languages])--}}
{{--@includeWhen(empty($value),'pages.header',['codes'=>$languages])--}}
@includeUnless(empty($value),'pages.header',['codes'=>$languages])
<h1>Home Page</h1>
@php
    $fields = ['python'=>'data science', 'Php'=>'web development' , 'Metaverse'=>'Gaming'];
@endphp

@include('pages.footer',['users'=>$fields])
