<form action="{{ url('/cita')}}" method="post">
    {{ csrf_field() }}

    <label for="tramite">{{'Trámite'}}</label>
    <input class="form-control" type="text" id="tramite_form" name="tramite">
    <label for="curp">{{'CURP'}}</label>
    <br>
    <input class="form-control" type="text" id="tramite_form" name="curp">
    <label for="modulo">{{'Módulo'}}</label>
    <br>
    <input class="form-control" type="text" id="tramite_form" name="modulo">
    <label for="fecha">{{'Fecha y hora'}}</label>
    <br>
    <input class="form-control" type="fecha" id="tramite_form" name="fecha">

    <input type="submit" value="Agregar">
</form>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre modulo</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($modulos as $modulo)
            <tr>
                <td>{{ $modulo->modulo_nombre }}</td>
                <td>{{ $modulo->modulo_direccion }}</td>
                <td>{{ $modulo->modulo_telefono }}</td>
                <td>{{ $modulo->modulo_email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Tramite disponible</th>
                <th>requisitos</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tramites as $tramite)
            <tr>
                <td>{{ $tramite->tramite_nombre }}</td>
                <td>{{ $tramite->tramite_requisitos }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
    
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Fechas de calendario</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($fechas_calendario as $fecha)
            <tr>
                <td>{{ $fecha->calendario_fecha }}</td>
                <td>Editar | 
                <form method="post" action=" {{ url('/cita/'.$fecha->calendario_id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')  }}
                    <button type="submit" onclick="return confirm('¿Borrar?')"> Borrar </button>
                </form>
                
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

