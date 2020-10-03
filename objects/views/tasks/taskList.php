<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Creatie_at</th>
    </tr>
  </thead>
  <tbody>
<?php
    for ($i=0; $i < count($tasks); $i++) { 
     ?>
      <tr>
        <td><?=$tasks[$i]->id?></td>
        <td><?=$tasks[$i]->name?></td>
        <td><?=$tasks[$i]->status?></td>
        <td><?=$tasks[$i]->create_at?></td>
      </tr>
     <?php
    }
?>
  </tbody>
</table>