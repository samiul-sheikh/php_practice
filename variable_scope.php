<!docttype html>
<html>
    <head>
        <title> PHP Syntax </title>

        <style>
        	.phpcoding{width:900px; margin:0 auto; background:grey; min-height: 400px;}

        	.headerportion, .footerportion{background:#444; color:white; text-align: center; padding: 20px;}

        	.headerportion h2, .footerportion h2{margin:0;}

        	 .maincontent{min-height: 400px; padding: 20px;}

        </style>

    </head>


    <body>

    	<div class ="phpcoding">


    		<section class="headerportion">
    			<h2> <?php echo "PHP Fundamental" ?> </h2>
    		</section>


    		<section class="maincontent">

		    	<?php

                $x = 50;

                function test1(){

                    global $x;

                    $a = 10;
                    echo $a;
                    echo "<br/>";
                    echo "access from function test1 ".$x;
                    echo "<br/>";

                }


                function test2(){

                    global $x;

                    $b = 20;
                    echo $b;
                    echo "<br/>";
                    echo "access from function test2 ".$x;
                    echo "<br/>";
                }

                test1();
                test2();

		    		

    			?>

    		</section>


    	<section class="footerportion">
    		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
    	</section>


    	</div>


    </body>

</html>
