<?php
include 'conexion.php';
$id  = (int)$_GET['id'];
$res = $conn->query("SELECT * FROM clientes WHERE id_cliente=$id");
$f   = $res->fetch_assoc();
?>
<h2>Editar cliente #<?php echo $id; ?></h2>
<form method="get" action="actualizar.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <label>Nombre</label><br>
  <input type="text" name="nombre" value="<?php echo $f['nombre']; ?>"><br><br>

  <label>Teléfono</label><br>
  <input type="text" name="telefono" value="<?php echo $f['telefono']; ?>"><br><br>

  <button type="submit">Actualizar</button>
  <a href="index.php">Cancelar</a>
</form>
<?php $conn->close(); ?>