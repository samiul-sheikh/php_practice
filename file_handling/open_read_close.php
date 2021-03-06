<!docttype html>
<html>
    <head>
        <title> PHP Syntax </title>

        <style>
        	.phpcoding{width:900px; margin:0 auto; background:grey; min-height: 400px;}

        	.headerportion, .footerportion{background:#444; color:white; text-align: center; padding: 20px;}

        	.headerportion h2, .footerportion h2{margin:0;}

        	 .maincontent{min-height: 400px; padding: 20px;}

             p{margin: 0}

        </style>

    </head>


    <body>

    	<div class ="phpcoding">


    		<section class="headerportion">
    			<h2> <?php echo "PHP Fundamental" ?> </h2>
    		</section>


    		<section class="maincontent">

		    	<?php

                    /*
                    $ourfile = fopen("text.txt", "r") or die("File not found!!");
                    // for print full
                    // echo fread($ourfile, filesize("text.txt"));

                    // for 1st line
                    // echo fgets($ourfile, filesize("text.txt"));

                    // for 1st character
                    echo fgetc($ourfile);

                    fclose($ourfile);

                    */
                    

                    // count all first - last
                    $ourfile = fopen("text.txt", "r") or die("File not found!!");

                    while(!feof($ourfile)){
                        echo fgets($ourfile)."<br/>";
                        // echo fgetc($ourfile)."<br/>";
                    }

                    fclose($ourfile);

		    		

    			?>

    		</section>


    	<section class="footerportion">
            <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
