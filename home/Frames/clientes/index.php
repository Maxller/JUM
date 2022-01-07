    <div id="newClient" style=" background-color: blue; padding: 33px; border-radius: 22px; position: absolute; width: fit-content; height: fit-content; display: none;">
        <div id="closeNewClient" style="position: absolute; top: 15px; right: 15px;">X</div>
        <form action="signin.php" method="post" style="text-align: center;">
        <p class="Campo"><b>Nombre:</b><input type="text" class="Box" name="NameClient"></p>
        <p class="Campo"><b>Apellido:</b><input type="text" class="Box" name="LastNameClient"></p>
        <p class="Campo"><b>Contraseña:</b><input type="password" class="Box" name="Pass"></p>
        <p class="Campo"><b>Confirmar Contraseña:</b><input type="password" class="Box" name="Pass2"></p>
        <button type="submit" class="Button" style=" margin-top: 10px;"> Registrar </button>
    </form>
    </div>
    <div>
        <button id="agregarCliente">Agregar</button>
    </div>

    <script type="text/javascript">
        document.getElementById("agregarCliente").addEventListener("click",  function(){
            document.getElementById("newClient").style.display="block";
        })
        document.getElementById("closeNewClient").addEventListener("click",  function(){
            document.getElementById("newClient").style.display="none";
        })
    </script>

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
   
