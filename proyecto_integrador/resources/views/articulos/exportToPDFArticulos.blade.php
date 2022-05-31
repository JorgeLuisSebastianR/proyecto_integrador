<!doctype html>
<html lang="en">
  <head>
    <title>Reporte Artículos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body>
        <div align="center">
            <h2>Reporte de Artículos</h2>
            <p><b>Diamante Azúl</b></p>
        </div>
        <br>
              <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Madera</th>
                                <th scope="col">Tamaño</th>
                                <th scope="col">Color</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Tipo</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($articulos as $articulo)
                                <tr>
                                    <td>{{ $articulo->id }}</td>
                                    <td>{{ $articulo->Nombre }}</td>
                                    <td>{{ $articulo->madera->Nombre}}</td>
                                    <td>{{ $articulo->Tamaño }}</td>
                                    <td>{{ $articulo->Color }}</td>
                                    <td>${{ $articulo->Precio }} MXN</td>
                                    <td>{{ $articulo->Descripcion }}</td>
                                    <td>{{ $articulo->Tipo }}</td>
                                </tr>
                                @empty
                                <br><br><br><br><br><br>
                                <div>
                                    Parece que aún no se cuenta con artículos registrados.
                                </div>
                            @endforelse
                            </tbody>
                    </table>
              </div>
          </div>
      </div>
  </body>
</html>
