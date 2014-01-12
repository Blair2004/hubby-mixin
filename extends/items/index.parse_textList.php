<?php
if(count($this->listText) > 0)
		{
		?>

<div class="container">
    <div class="row">
            <ul class="thumbnails thumbnails-1 list-services">
            <h3><?php echo $this->textListTitle;?></h3>
                <?php
	$i	=	0;
			foreach($this->listText as $t)
			{
?>
                <li class="span4">
                    <div class="thumbnail thumbnail-1" style="height:300px;">
                        <div class=""><img src="<?php echo $t['THUMB'];?>" alt="" style="visibility: visible; opacity: 1;"></div>
                        <section> <a href="<?php echo $t['LINK'];?>" class="link-1"><?php echo $t['TITLE'];?></a>
                            <p><?php echo word_limiter($t['CONTENT'],20);?></p>
                        </section>
                    </div>
                </li>
                <?php
			}
	?>
            </ul>
    </div>
</div>
<?php
		}



