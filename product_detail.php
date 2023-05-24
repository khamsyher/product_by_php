
<?php

include('menu.php');

$id = $_GET['id'];
$sql = "SELECT * from product where id = $id";
$result = mysqli_query($conn_db, $sql);

// Fetch product details from database
while($row = mysqli_fetch_assoc($result)) {?>
    <div class="container p_detail">
        <div class="row">
            <div class="col-sm-4">           
                <img src="img/<?php echo $row['picture'];?>" alt="image">    
            </div>
            <div class="col-sm-8">
                <div class="p_name"><?php echo $row['name']; ?></div>
                <div class="p_description"><?php echo $row['description'];?></div>
                <div class="p_price"><?php echo $row['price'];?></div>
                <div>
                    <form action="" method="post">
                        <div class="btn-group">
                            <p>Amount:  </p>
                            <input type="number" name="amount" class="p_amount" class="btn_amount">
                        </div>
                        <div>
                        <input type="submit" name="btn" value="ສັ່ງຊື້" class="btn btn-primary p_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }
?>
