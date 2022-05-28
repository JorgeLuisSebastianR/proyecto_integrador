<!doctype html>
<html lang="en">
  <head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body>
        <div align="center">
            <h2>Reporte de Herramientas</h2>
            <p><b>Diamante Azúl</b></p>
        </div>
        <br>
              <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Cantidad</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($herramientas as $herramienta)
                                <tr>
                                    <td>{{ $herramienta->id }}</td>
                                    <td>{{ $herramienta->nombre }}</td>
                                    <td>{{ $herramienta->marca }}</td>
                                    <td>{{ $herramienta->modelo }}</td>
                                    <td>{{ $herramienta->descripcion }}</td>
                                    <td>{{ $herramienta->cantidad }}</td>
                                </tr>
                                @empty
                                <br><br><br><br><br><br>
                                <div>
                                    Parece que aún no se cuenta con herramientas registradas.
                                </div>
                            @endforelse
                            </tbody>
                    </table>
              </div>
          </div>
      </div>
  </body>
</html>
