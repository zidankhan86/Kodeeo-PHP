
        

     <?php
    $x=1000;


    

     $y=($x>=20)?($x." 19 is True"):("False") ;//single line 

     $output=($x>=500)?(($x>=1000)?("{$x} is less than or equal 1000"):("{$x}is less than 100")):("Less than 40");//Multi line
     printf($output) ;
