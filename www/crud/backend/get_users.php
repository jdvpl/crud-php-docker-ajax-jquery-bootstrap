<?php


require_once 'conexion.php';


$query = mysqli_query($conexion, "select * from empleado");


echo '<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Accion</th>
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
    echo '<td> 
      <a class="btn btn-success update mx-1" id_empleado="'.$empleado['id_empleado'].'" nombre="'.$empleado['nombre'].'" apellido="'.$empleado['apellido'].'" telefono="'.$empleado['telefono'].'" direccion="'.$empleado['direccion'].'" fecha_nacimiento="'.$empleado['fecha_nacimiento'].'" observacion="'.$empleado['observacion'].'" sueldo="'.$empleado['sueldo'].'" href="#" role="button">
        <i class="fa fa-pencil" aria-hidden="true"></i>
      </a>
      <a class="btn btn-danger delete mx-1" id_empleado="'.$empleado['id_empleado'].'" href="#" role="button">
        <i class="fa fa-trash" aria-hidden="true"></i>
      </a>
    </td>';
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