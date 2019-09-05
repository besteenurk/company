

<form method="get">
    {{ csrf_field() }}
    @foreach($companyy as $comp)
        {{$comp->name}}
    @endforeach
</form>