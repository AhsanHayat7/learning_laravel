@php
    $languages = ['Ai'=>'Python','backend'=>'Php','scripts'=>'Html' , 'style'=>'Css' , 'frontend'=>'javascript']
@endphp


@include('first',['codes'=>$languages])

{{--@include('first',['languages'=>['Python','Php','Html' , 'Css' ,' javascript']])--}}
<h1>It is important to learn the above languages </h1>

@php
    $languages = [];
@endphp

@include('third',['lan'=>$languages])
