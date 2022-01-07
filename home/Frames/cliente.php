    <div>
        <button>Agregar</button>
    </div>

    <table class="table">
        <tr>
            <td>No. de cleinte</td>
            <td>Nombre</td>
            <td>Credito</td>
            <td>Direccion</td>
        </tr>
            <?php
                $con = new PDO('mysql:host=192.168.0.40;dbname=joghurtundmehr','root','th3kill3r'); 
                $sql = $con -> prepare("SELECT * FROM info_clientes");
			    $sql -> execute();
			    $list = $sql -> fetchAll();
                foreach ($list as $client ) {
                    $id = $client['id_cliente'];
                    $nombre = $client['Nombre'];
                    $credito = $client['Credito'];
                    $direccion = $client['Direccion'];
                    echo "<tr><td>$id</td><td>$nombre</td><td>$credito</td><td>$direccion</td><td><button>modificar</button><button>borrar</button></td></tr>";
                }
            ?>
        
    </table>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    <iframe src="" frameborder="0"></iframe>
