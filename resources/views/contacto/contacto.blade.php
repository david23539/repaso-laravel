{{-- Mi comentario de html--}}
@include('contacto.cabecera', array('nombre' =>$nombre))
<h1>Pagina de contacto {{$nombre}} {{isset($edad) && !is_null($edad)? $edad:'No existe la edad'}}</h1>

@if(!is_null($edad))
    Si existe la edad
@else
    No existe la edad
@endif
<p>
    <?php $numero = 4; ?>
Tabla del {{$numero}}<br>
@for($i = 1; $i <=10; $i++)
    {{$i.' x'.$numero.' = '.($i*$numero)}}<br>
@endfor
</p>


WHILE<br>
@while($numero <= 10)
    {{'Hola mundo '. $numero}}<br>
    {{$numero++}}
@endwhile

<br>FOREACH</br>
@foreach($frutas as $fruta)
    <p>{{$fruta}}</p>
@endforeach