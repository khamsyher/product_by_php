
    <?php include('menu.php');?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8"> &nbsp </div>
                <form action="" method="post" class="input-group col-sm-4 index-form">
                    <input type="text" class="form-control" placeholder="Search" name="txt_search">
                    <div class="input-group-append">
                        <input type="submit" value="Search" name="btn" class="btn btn-primary">
                    </div>
                </form>
        </div>
        <div class="row">
            <?php
                include('./config.php');
                if(isset($_POST['btn'])){
                    $txt_search = $_POST['txt_search'];
                    $select_products = "SELECT p.*, c.name AS c_name FROM product AS p JOIN category AS c ON (p.category_id = c.id) WHERE p.name LIKE '%$txt_search%' ORDER BY p.name ASC";
                }else{
                $select_products = "SELECT p.*, c.name AS c_name FROM product AS p JOIN category AS c ON (p.category_id = c.id) ORDER BY p.name ASC";
                }
                $result = mysqli_query($conn_db, $select_products);
                $no = 1;
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <div class="col-sm-3 index-box">
                        <div class="index-img"><img src="img/<?php echo $row['picture'];?>" alt=""></div>
                        <div class="index-name"><?php echo $row['name'];?></div>
                        <div class="index-desc"><?php echo $row['description'];?></div>
                        <div class="index-price"><?php echo $row['price'];?></div>
                        <div class="index-button">
                            <a href="product_detail.php?id=<?=$row['id']?>" class="btn btn-primary">ຊື້ສິນຄ້າ</a>
                        </div>
                    </div>  
                <?php }
            ?>
        </div>
    </div>
    </body>

</html>