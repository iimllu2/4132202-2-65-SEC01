<?php
include "../model/condb.php";
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>PASS</th>
            <th></th>
            <th></th>
      </tr>
  </thead>
</table>
<tbody>
<?php
$sql = "SETECT * FROM tb_user ORDER BY  user_id ASC";
$result = mysqli_query($link,$sql);
while ($row = mysqli_ fetch_assoc($result)){
    ?>
        <tr>
            <td><?row["user_id"]?></td>
            <td><?row["user_name"]?></td>
            <td><?row["user_pas"]?></td>
            <td><button class="btn_ del" data="<?= $row[user_id] ?>">DEL</button></td>
            <td></td>
           
      </tr>
  <?php>

}
?>
</tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</script>
 let dsta $();
 </script>

