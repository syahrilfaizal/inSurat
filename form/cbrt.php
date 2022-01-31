<!-- untuk kelurahan -> RT -->
<?php
    include "../conf.php";

    $sel_kelurahan="SELECT * from rt where id_kelurahan='".$_POST["kelurahan"]."'";
    $q=mysqli_query($conn,$sel_kelurahan);
    while ($data_kelurahan=mysqli_fetch_array($q)){


    ?>

    <option value="<?php echo 
$data_kelurahan["id_rt"] ?>"><?php echo 
$data_kelurahan["rt"] ?></option>

<?php
}
?>