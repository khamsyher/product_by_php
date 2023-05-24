<?php include("menu.php");
?>
<div class="container">
    <div class="row">
        <h2 class="col-sm-12">Add Product</h2>
        <form action="" method="post" class="col-sm-12" enctype="multipart/form-data">
            <select name="cate" class="form-control">
                <option value="0">--Choose Category--</option>
                <?php 
                    $select_cate = "select * from category order by name asc";
                    $result_cate = mysqli_query($conn_db, $select_cate);
                    while($row_cate = mysqli_fetch_assoc($result_cate)){
                        ?>
                        <option value="<?=$row_cate['id']?>"><?=$row_cate['name']?></option>
                        <?php
                    }
                ?>
            </select>
            <div class="row">
                <div class="col-sm-6 form-group ">
                    <label for="">Name:</label>
                    <input type="text" name="pro_name" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Descirption:</label>
                    <input type="text" name="pro_desc" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Pirce:</label>
                    <input type="number" name="pro_price" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Stcok:</label>
                    <input type="stock" name="pro_stock" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Image:</label>
                    <input type="file" name="pro_file" class="form-control">
                </div>
                <div class="col-sm-12">
                    <input type="submit" name="btn_add" value="save">
                </div>
            
            </div>
        </form>
    </div>
</div>

<?php 
    if(isset($_POST['btn_add'])){
         $cate_id = $_POST['cate'];
         $pro_name = $_POST['pro_name'];
         $pro_desc = $_POST['pro_desc'];
         $pro_price = $_POST['pro_price'];
         $pro_stock = $_POST['pro_stock'];
         $pro_picture = $_FILES['pro_file']['name'];
        
         $insert = "INSERT INTO product(id, category_id, name, description, price, stock, picture)
          VALUES ('',$cate_id,'$pro_name','$pro_desc',$pro_price,$pro_stock,' $pro_picture ')";

        if(mysqli_query($conn_db, $insert)){
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Insert Data Success!',
                    showConfirmButton: false,
                    timer: 1500
                })
                window.setTimeout(function(){
                    window.location.href = "index.php";
                }, 2000);
            </script>
            <?php
        }else{
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Insert  Error!.',
                    showConfirmButton: false,
                    timer: 1500
                })
                window.setTimeout(function(){
                    window.location.href = "index.php";
                }, 5000);
            </script>
            <?php
            echo $conn_db->error;
        }
            }
?>
