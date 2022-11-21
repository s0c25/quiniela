<div >
    <thead>
        <tr>
            <!-- <th scope="col">Posicion Inscripción</th> -->
            <th scope="col">Participante</th>
            <th scope="col">Puntos Acumulados</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hola as $data)
        <tr>
            
            <!-- <td data-label="Posicion Inscripción">{{$data->POSICION}}</td> -->
            <td data-label="Participante">{{$data->NOMBRE_APELLIDO}}</td>
            <td data-label="Puntos Acumulados">{{$data->PUNTUACION}}</td>
           
        </tr>
        @endforeach
    </tbody>
</div>