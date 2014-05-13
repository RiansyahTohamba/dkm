<script type="text/javascript"  >
    function tandaSemua(element) {
        var el = document.form1.elements["msg[]"];
        for (i = 0; i < el.length; i++) {
            el[i].checked = element.checked;
        }

    }

</script>

<div class="span9">
    <div class="navbar">        
        <form action="" method="post"> 
            <a href="<?php echo base_url('index.php/tambah') ?>" class="btn btn-primary "><i class="icon-plus icon-white"> </i>Tambah</a>

            <!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btn" data-toggle="modal">Tambah</a>            
            <!-- Modal -->            
            <div id="myModal" tabindex="-1" role="dialog" class="modal hide fade"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Modal header</h3>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>

            <button type="submit" value="ubah" name="query" class="btn btn-primary ">
                <i class="icon-edit icon-white"></i> 
                Ubah</button>
            <button type="submit" value="hapus" name="query" class="btn btn-primary ">
                <i class="icon-fire icon-white"></i> 
                Hapus</button>
            <button type="submit" value="detil" name="query" class="btn btn-primary "> 
                <i class="icon-eye-open icon-white"></i>
                Detil</button>                                
        </form>        
    </div><!--/.nav-collapse -->




    <div class="row-fluid">
        <?php echo $daftar; ?>
    </div><!--/row-->

</div><!--/span-->


