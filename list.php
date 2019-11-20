<?php 
    include "koneksi.php";
?>
<h3>List File Upload</h3>
<br />
<br />
<table border="1" cellpadding="3">
    <tr>
        <th width="30">No</th>
        <th width="180">Nama File</th>
        <th width="80">Action</th>
    </tr>
        <?php
            $no=0;
            $query = mysql_query("SELECT * FROM upload ORDER BY id_file"); 
            while($data = mysql_fetch_array($query)){
            $no++
        ?>
    <tr>
        <td><?=$no?></td>
        <td><?php echo $data['name_files']; ?></td>
        <td><a href="download.php?filename=<?=$data['name_files']?>">Download</a></td>    
    </tr>
        <?php 
        } 
        ?>
</table>