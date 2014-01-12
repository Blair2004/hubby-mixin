<?php
		if(count($this->featuredProduct) > 0)
		{
		?>
<div class="row-1">
    <div class="container">
        <div class="row">
            <article class="span12">
                <h4><?php echo $this->featuredProductTitle;?></h4>
            </article>
            <ul class="thumbnails thumbnails-1">
            <?php 
		foreach($this->featuredProduct as $c)
		{
		?>
        	<li class="span3">
                    <div class="thumbnail thumbnail-1">
                        <div class=""><img src="<?php echo $c['THUMB'];?>" alt="<?php echo $c['TITLE'];?>" style="visibility: visible; opacity: 1;"></div>
                        <section> 
                        	<a href="<?php echo $c['LINK'];?>">
                            <h3><?php echo $c['TITLE'];?></h3>
                            </a>
                            <?php 
							$date		=	 $this->core->hubby->time($c['DATETIME'],true);
							$complete	=	 $this->core->hubby->time($c['DATETIME']);
							?>
                            <div class="meta">
                                <time datetime="<?php echo $c['DATETIME'];?>" class="date-1"><i class="icon-calendar"></i><?php echo $date['d'].'.'.$date['M'].'.'.$date['y'];?> </time>
                                <div class="name-author"><i class="icon-user"></i> <a href="<?php echo $c['AUTHORLINK'];?>"><?php echo $c['AUTHOR'];?></a></div>
                                <a href="#" class="comments"><i class="icon-comment"></i> <?php echo $c['TTCOMMENTS'];?> comments</a> </div>
                            <div class="clear"></div>
                            <p><?php echo word_limiter(strip_tags($c['CONTENT']),50);?></p>
                            <a href="<?php echo $c['LINK'];?>" class="btn btn-1">Prix : <?php echo $p['PRICE'];?> <?php echo $this->featuredProductDevise;?></a> </section>
                    </div>
                </li>
		<?php
		}
		?>
            </ul>
        </div>
    </div>
</div>
<?php
		}