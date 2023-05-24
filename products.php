<?php include("menu.php");?>
    <a href="add_product.php" class="p_btn btn btn-primary">Add Product</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Image</th>
        </tr>
        <?php
            include('./config.php');
            $select_products = "SELECT p.*, c.name AS c_name FROM product AS p JOIN category AS c ON (p.category_id = c.id) ORDER BY p.name ASC";//#
            $result = mysqli_query($conn_db, $select_products);
            $no = 1;
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['c_name']."</td>";//##
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$row['stock']."</td>";
                echo "<td><img src='img/".$row['picture']."'></td>"; //####
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>