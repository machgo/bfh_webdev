<div class="products">
<table>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>Num </th>
     <th>Name</th>
     <th>Price</th>
     <th>Category</th>
  </tr>
  </thead>
<tbody>
<?php 
$total = 0;
foreach ($products as $rows) :?>
  <tr class="item_row">
        <td> <?php echo $rows->id; ?></td>
        <td> <?php echo $rows->name; ?></td>
        <td> <?php echo $rows->price; ?></td>
        <td> <?php echo $rows->category; ?></td>
  </tr>
</tbody>
</table>
<?php endforeach;?>
</div>

