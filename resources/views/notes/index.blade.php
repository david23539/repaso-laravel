<h1>Aplicaion de notas</h1>
<h3>Listado de notas:</h3>
<a href="{{url('saveNotes')}}">Crear notas</a>

@if(session('status'))
    <p style="background: red">{{session('status')}}</p>
@endif

@foreach($notes as $note)
    <li>
        <ul>
            <li>{{$note->title}}</li>
            <li><a href="{{url('/note/'.$note->id)}}">Ver</a> </li>
            <li><a href="{{url('/deleteNote/'.$note->id)}}">Borrar</a> </li>
            <li><a href="{{url('/obtenerNote/'.$note->id)}}">Actualizar</a> </li>
        </ul>
    </li>
@endforeach
