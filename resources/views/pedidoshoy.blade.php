@include('partials.nav')

<button onclick="myFunction()">Imprimir</button>

<script>
function myFunction() {
    window.print();
}
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div class="container">
<?php
foreach ($pedidos as $ped) {
	# code...


	echo "<h3>". $ped->name."</h3>";
	 $comidas = DB::table('pedido_producto')
            ->join('pedidos', 'pedido_producto.pedido_id', '=', 'pedidos.id')
            ->join('comidas', 'pedido_producto.comida_id', '=', 'comidas.id')
            ->select('pedido_producto.*', 'comidas.nombre','comidas.precio')->where('pedido_producto.pedido_id', $ped->id)->get();

?>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Indicaciones</th>
      <th scope="col">Ingredientes</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($comidas as $com) {
  		?>
  		<tr>
      <th > <?php echo $com->nombre; ?></th>
      <td><?php echo $com->precio; ?></td>
      <td><?php echo $com->cantidad; ?></td>
      <td><?php echo $com->instrucciones ?></td>
      <td>  <ul>
                                           <?php
                                           $ingrediente = DB::table('ped_com_in')
            ->join('pedido_producto', 'ped_com_in.pedcom_id', '=', 'pedido_producto.id')
            ->join('ingredientes', 'ped_com_in.ingrediente_id', '=', 'ingredientes.id')
            ->select('ped_com_in.*', 'ingredientes.nombre as ingnom')->where('ped_com_in.pedcom_id', $com->id)->get(); 
                                    foreach ($ingrediente as $ing) {
                                        # code...
                                        echo $ing->ingnom . '<br>';
                                        
                                    }
            ?>
                                       </ul>
                                </li>

                               <?php
                                         }
                                ?>

                            </ul> </td>
    </tr>
  	<?php}
    
  ?>
  </tbody>
</table>
<?php
}

?>
</div>