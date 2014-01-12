<?php
		if(count($this->blogPost) > 0)
		{
		?>

<ul class="list-blog">
    <?php
			foreach($this->blogPost as $p)
			{
				$global	=	$this->core->hubby->time($p['TIMESTAMP'],TRUE);
			?>
    <li>
        <a href="<?php echo $p['LINK'];?>"><h3><?php echo $p['TITLE'];?></h3></a>
        <time datetime="<?php echo $p['TIMESTAMP'];?>" class="date-1"><i class="icon-calendar icon-white"></i> <?php echo $this->core->hubby->time($p['TIMESTAMP']);?></time>
        <div class="name-author"><i class="icon-user icon-white"></i> Par <a href="#"><?php echo $p['AUTHOR'];?></a></div>
        <div class="name-author"><i class="icon-tag icon-white"></i> Dans <a href="<?php echo $p['CATEGORY_LINK'];?>"><?php echo $p['CATEGORY'];?></a></div>
        <a href="<?php echo $p['LINK'];?>" class="comments"><i class="icon-comment icon-white"></i> <?php echo $p['TTCOMMENTS'] != '' ? $p['TTCOMMENTS'].'comments' : '';?></a>
        <div class="clear"></div>
        <div class=""><img alt="<?php echo $p['TITLE'];?>" src="<?php echo $p['THUMB'];?>" style="visibility: visible; opacity: 1;"></div>
        <p><?php echo word_limiter(strip_tags($p['CONTENT']),50);?></p>
        <a href="<?php echo $p['LINK'];?>" class="btn btn-1">Lire la suite</a> </li>
    <?php
			}
				?>
</ul>
<?php
		}
		else if($this->blogPost === FALSE)
		{
			?>
<div id="posts-list">
    <pre>Aucun article disponible</pre>
</div>
<?php
		}

