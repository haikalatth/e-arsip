<?php
    if(isset($_GET['surat'])){
        ?>
        <object data="fileupload/<?php echo $_GET['surat']?>" type="application/pdf" width="100%" height="100%">
        </object>
<?php
    }
?>
