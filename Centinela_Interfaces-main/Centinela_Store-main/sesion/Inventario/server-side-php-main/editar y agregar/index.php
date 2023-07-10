<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="producto" class="form-control" placeholder="Producto" autofocus>
          </div>
          <div class="form-group">
            <textarea name="stock" rows="2" class="form-control" placeholder="Stock"></textarea>
          </div>
          <div class="form-group">
            <textarea name="disponibilidad"  class="form-control" placeholder="Disponibilidad"></textarea>
          </div>
          <div class="form-group">
            <textarea name="por_adquirir"  class="form-control" placeholder="Por adquirir"></textarea>
          </div>
          <div class="form-group">
          <input name="foto" type="file" class="form-control" placeholder="foto">
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Agregar">
          <a class="btn btn-success btn-block" href="../index.php">Volver</a>
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Disponibilidad</th>
            <th>Stock</th>
            <th>Por_Adquirir</th>
            <th>Foto</th>
            <th>Creado</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM inventario";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['producto']; ?></td>
            <td><?php echo $row['disponibilidad']; ?></td> 
              <td><?php echo $row['stock']; ?></td>
            <td><?php echo $row['por_adquirir']; ?></td>
            <td><?php echo $row['foto']; ?></td>
            
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
