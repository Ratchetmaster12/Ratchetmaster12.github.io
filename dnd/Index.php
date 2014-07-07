<!DOCTYPE html>
    <html>
        <head>
            <title>Ratchetmaster12's offical GitHub page!</title>
            <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        </head>
        <body>
            <?php
                $postData = $__POST;
                $getData = $__GET;
            ?>
            <script>
                var post = "<?php echo $postData; ?>";
                var getd = "<?php echo $getData; ?>";
                
                $('.document').load(function(){
                    <?php echo "Hey"?>    
                })
            </script>
        </body>
    </html>
<!-- End of file --!/>
