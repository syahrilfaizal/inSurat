<!-- untuk kecamatan -> kelurahan -->
<?php
    include "conf.php";

    $sel_kecamatan="SELECT * from kelurahan where id_kecamatan='".$_POST["kecamatan"]."'";
    $q=mysqli_query($conn,$sel_kecamatan);
    while ($data_kecamatan=mysqli_fetch_array($q)){


    ?>

    <option value="<?php echo 
$data_kecamatan["id_kelurahan"] ?>"><?php echo 
$data_kecamatan["kelurahan"] ?></option>

<?php
}
?>

