<table class="table">
  <thead>
    <tr>
    <?php
      foreach ($headers as $key => $value) {
        ?>
          <th scope="col"><?=$value?></th>
        <?php
      }
    ?>
    </tr>
  </thead>
  <tbody>
<?php
    foreach ($rows as $key => $cols) { 
     ?>
      <tr>
      <?php
        foreach ($cols as $key => $col) {
          ?>
            <td scope="col"><?=$col?></td>
          <?php
        }
      ?>
      </tr>
     <?php
    }
?>
  </tbody>
</table>