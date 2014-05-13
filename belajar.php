<html>
    <head> 

        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <script type="text/javascript" src="assets/js/bootstrap-modal.js">
        </script>
        <?php //include './modal.php';?>
        
    </head>
    <body>         
        <p> haloo </p><br/>


        <a href="#myModal" role="button" class="btn" data-toggle="modal">modal</a>

        <!-- Modal -->
        <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

        <?php echo 'halo<br/>'; ?>
        <?php
        echo 'percabangan';
        echo '<br/>';
        $bil = 4;
        if ($bil % 2 != 0) {
            echo "$bil itu ganjil";
        } else {
            echo "$bil itu genap";
        }

        echo '<br/>';
        echo 'pengulangan<br/>';
        for ($n = 0; $n < 5; $n++) {
            echo "rian $n<br/>";
        }
//method
        echo '<br/>';

        function mencetakNama($nama = '') {
            echo 'Namaku ' . $nama;
        }

        mencetakNama('rian');
        ?>

    </body>
</html>
