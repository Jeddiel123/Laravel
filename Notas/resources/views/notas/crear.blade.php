@foreach ($temas as $tema)
    <p>{{ $tema->id }}</p>
@endforeach

@foreach ($asignaturas as $asignatura)
    <h1>{{ $asignatura->asignatura }}</h1>
@endforeach