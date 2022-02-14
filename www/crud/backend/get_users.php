<?php


require_once 'conexion.php';


$query = mysqli_query($conexion, "select * from empleado");


echo '<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"># </th>
      <th scope="col">Nombre </th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha nacimiento</th>
      <th scope="col">Observacion</th>
      <th scope="col">Sueldo</th>
    </tr>
  </thead>
  <tbody>';
   
  

while($empleado= mysqli_fetch_assoc($query)){
    //var_dump($empleado);
    echo '<tr>';
    echo '<td>'.$empleado['id_empleado'].'</td>';
    echo '<td>'.$empleado['nombre'].'</td>';
    echo '<td>'.$empleado['apellido'].'</td>';
    echo '<td>'.$empleado['telefono'].'</td>';
    echo '<td>'.$empleado['direccion'].'</td>';
    echo '<td>'.$empleado['fecha_nacimiento'].'</td>';
    echo '<td>'.$empleado['observacion'].'</td>';
    echo '<td>'.$empleado['sueldo'].'</td>';
   echo '</tr>';
}
echo '</tbody></table>';


?>