<?php include'header.php'; ?>
        <section class="main-body bg-dark text-white">
    <!-- html code hear -->
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" id="">
            <input type="submit" value="Submit" name="submit">
            <!-- php code hear -->
            <?php 
                  if(isset($_FILES['image'])){
                    $filename = $_FILES['image'] ['name'];
                    $filetmp  = $_FILES['image']['tmp_name'];
                    move_uploaded_file($filetmp, "images/".$filename);
                    echo  "<p>File uploded succsessfully</p>";
                }            
            ?>
        </form>
        </section>
 <?php include'footer.php'; ?>