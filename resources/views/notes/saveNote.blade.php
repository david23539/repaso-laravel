<h1>
@if(!isset($note))
    Guardar una nota
@else
    Actualizar la nota
@endif
</h1>
<form action="{{ !isset($note)?url('/insert'):url('/update')}}" method="POST">
    <input type="text" name="title" placeholder="pon el titulo" value="{{isset($note)?$note->title:''}}"><br>
    <textarea name="description" placeholder="descripcion" >{{isset($note)?$note->descripcion:''}}</textarea><br>
    <input type="submit" value="guardar"/>
</form>