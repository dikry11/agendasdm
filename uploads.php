<?php
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tb_spmasuk';
            $result = mysqli_query($koneksi, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tb_spmasuk(tgl, no_surat, dari, perihal) VALUES('$tgl', '$no_surat', '$dari', '$perihal')";
            mysqli_query($koneksi, $sql);
            header("Location: editspmasuk.php?st=success");
        }
        else
        {
            header("Location: editspmasuk.php?st=error");
        }
    }
    else
        header("Location: editspmasuk.php");
}
?>