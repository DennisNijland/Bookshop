<?php 
echo '<h2>'.$books_item['title'].'</h2>';?>

<p> Dit boek is geschreven door: <?php echo $books_item['author'];?> </p>
<p> Genre van het boek: <?php echo $books_item['genre'];?></p>
<p> Verschijningsjaar: <?php echo $books_item['year'];?></p>
<p> Samenvatting: <?php echo $books_item['description'];?> </p>