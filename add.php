<html>
    <body>
        <?php
        include('config.pphp');

        if(isset($_POST['submit']))
        {
            $id=($_POST['id']);
            $nama_pelajar=($_POST['nama_pelajar']);
            $no_kp=($_POST['no_kp']);

            $query1=mysql_("insert into data pelajar values('$id,'$nama_pelajar,'$no_kp')")

            if($query1)
            {
                header("location:senarai_pelajar");
            }
        }
        ?>
        <center>
            <fieldset style="width:500px;">
                <h4>TAMBAH REKOD PELAJAR</h4>

                <form method="post" action="senarai_pelajar.php">
                    ID PELAJAR:<input type="text" name="id">
                    NAMA PEKERJA:<input type="text" name="nama_pelajar"><br>
                    <br><input type="text" name="no_kp">
                    <br><input type="submit" name"submit"><br>
    </form>
    </fieldset>
    </center>
    </body>