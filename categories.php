<?php 
    include ("menu.php")
?>
<a href="add_category.php" class="p_btn btn btn-primary">Add Category</a>
<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Parent ID</th>
        <th>Name</th>
    </tr>
    <?php
        include('./config.php');
        $select_cate = "SELECT * FROM category ORDER BY name ASC";
        $result = mysqli_query($conn_db, $select_cate);
        $no = 1;
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['parent_id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "</tr>";
        }
    ?>
</table>