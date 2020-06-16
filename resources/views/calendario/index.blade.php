<form action="{{ url('/calendario')}}" method="post">
    {{ csrf_field() }}

    <label for="tramite">{{'Trámite'}}</label>
    <input class="form-control" type="text" id="tramite_form" name="tramite">

    <input type="submit" value="Agregar">
    
</form>