@php
    $users = "samsung";
    $companies = ['samsung','apple','readme','realme'];
@endphp


<script>
    var data = @json($companies);
    data.forEach(function(entry){
    console.log(entry);
});
</script>


@php
    $games = ['pubg','call of duty', 'freefire']
@endphp


<script>
    var data = @json($games);
    console.log(data);
</script>


<script>
    var data = {{Js::from($games)}};

    data.forEach(function(entry){
        console.log(entry);
    });
</script>

