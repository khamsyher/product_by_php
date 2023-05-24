<?php include('menu.php');?>
<div class="container">
    <div class="row">
        <h3 class="col-sm-12">Add Category</h3>
        <div class="col-sm-12">
            <form action="" method="post">
                <span>Category Name: </span><br>
                <input type="text" class="form-control" name="cate_name"><br>
                <button type="submit" name="btn_add" class="btn btn-primary">Submit</button><br>
            </form>
        </div>
    </div>
</div>
<?php 
    if(isset($_POST['btn_add'])){
        $txt = $_POST['cate_name'];
        $insert = "INSERT INTO category(id, parent_id, name) VALUES ('','0','$txt')";
        if($conn_db->query($insert)==true){
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
                    window.location.href = "categories.php";
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
                    window.location.href = "categories.php";
                }, 5000);
            </script>
            <?php
            echo $conn_db->error;
        }

    }
?>
