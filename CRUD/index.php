<?php
include 'conexion.php';
$res = $conn->query("SELECT * FROM clientes ORDER BY id_cliente DESC");
?>
<h2>Clientes</h2>
<p><a href="nuevo.php">+ Nuevo</a></p>
<table border="1" cellpadding="6" cellspacing="0">
  <tr>
    <th>ID</th><th>Nombre</th><th>Teléfono</th><th>Acciones</th>
  </tr>
  <?php while ($c = $res->fetch_assoc()): ?>
    <tr>
      <td><?php echo $c['id_cliente']; ?></td>
      <td><?php echo $c['nombre']; ?></td>
      <td><?php echo $c['telefono']; ?></td>
      <td>
        <a href="editar.php?id=<?php echo $c['id_cliente']; ?>">Editar</a> |
        <a href="eliminar.php?id=<?php echo $c['id_cliente']; ?>">Eliminar</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>
<?php $conn->close(); ?>