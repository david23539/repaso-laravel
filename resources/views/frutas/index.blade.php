
<h1>Controller Frutas</h1>

<a href="{{route('naranjitas','aaa')}}">Ir a naranjas</a>
    <a href="{{action('FrutasController@peras')}}">Ir a peras</a>



@foreach($frutas as $fruta)
    <li>{{$fruta}}</li>
@endforeach

<h1>Formulario en Laravel</h1>
<form action="{{url('/recibir')}}" method="POST">
    <p>
    <label for="nombre">Nombre de la Fruta</label>
    <input type="text" name="nombre"/>
    </p>
    <p>
    <label for="descripcion">Descripcion de la Fruta</label>
    <textarea name="descripcion"></textarea>
    </p>
    <input type="submit" value="enviar"/>
</form>