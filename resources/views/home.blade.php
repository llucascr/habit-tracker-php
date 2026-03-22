<h1>
    Welcome to de Home page
</h1>
<p> {{$name}} </p>
<ul>
    @foreach($habits as $item)
        <li>
            {{ $item }}
        </li>
    @endforeach
</ul>

@auth
    <p>Você está logado</p>
@endauth

@guest
    <p>Você não está logado</p>
@endguest
