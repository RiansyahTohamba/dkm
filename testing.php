<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>latihan cekAll</title>        
    </head>
    <body>
        <script type="text/javascript"  >
            
            function tandaSemua(element) {
                var el = document.form1.elements["msg[]"];
                for (i = 0; i < el.length; i++) {
                    
                    el[i].checked = element.checked;
                }
            }
        </script>
        <form name="form1" method="post"> 
            <table > 
<!--                
Masalah                 
1. cara membuat unik name tiap input?                
2. menjadikan link tiap 1 input
                -->
                
                <tr> <td> <input name="msg[]" type="checkbox" value="" onclick="tandaSemua(this)"/> cek semua</td></tr>
                <tr> <td><input name="nama" type="checkbox" value="biji"/> biji</td></tr>
                <tr> <td><input name="msg[]" type="checkbox" value="rian"/> rian</td></tr>                
                <tr> <td><input name="msg[]" type="checkbox" value="bio"/> bio</td></tr>
                <tr> <td><input name="msg[]" type="checkbox" value="yepi"/> yepi</td></tr>
                <tr> <td><input name="submit" type="submit" value="simpan"/></td></tr>
                <tr> <td><input name="submit" type="submit" value="ubah"/></td></tr>
                <tr> <td><input name="submit" type="submit" value="hapus"/></td></tr>
            </table>                        
        </form>
        
        <?php 
        if(empty($_POST['submit'])){
            echo 'belum dipost';
        }  else {
            
            $nama = $_POST['msg'];
            $opsi = $_POST['submit'];
            foreach ($nama as $nm) {
                echo "ALTER $opsi WHERE $nm<br/>";
            }
        }
        ?>
    </body>
</html>




