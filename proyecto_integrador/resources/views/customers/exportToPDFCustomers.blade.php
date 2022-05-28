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
            <h2>Reporte de Clientes</h2>
            <p><b>Diamante Azúl</b></p>
        </div>
        <br>
              <div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Correo Electrónico</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">CP</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->nombre }} {{ $customer->apellidoPaterno }} {{ $customer->apellidoMaterno }}</td>
                                    <td>{{ $customer->telefono }}</td>
                                    <td>{{ $customer->correoElectronico }}</td>
                                    <td>C. {{ $customer->calle }} No. {{ $customer->numeroCasa }}, {{ $customer->colonia }}, {{ $customer->municipio }}.</td>
                                    <td>{{ $customer->codigoPostal }}</td>
                                </tr>
                                @empty
                                <br><br><br><br><br><br>
                                <div>
                                    Parece que aún no se cuenta con clientes registrados.
                                </div>
                            @endforelse
                            </tbody>
                    </table>
              </div>
          </div>
      </div>
  </body>
</html>
