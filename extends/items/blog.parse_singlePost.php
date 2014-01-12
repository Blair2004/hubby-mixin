<?php
		if(count($this->singleBlogPost) > 0)
		{
	?>
    <ul class="list-blog" itemscope itemptype="http://schema.org/articleBody">
	<li>
        <h3><?php echo $this->singleBlogPost['TITLE'];?></h3>
        <time itemprop="datePublished" content="<?php echo  $this->singleBlogPost['TIMESTAMP'];?>" datetime="<?php echo $this->singleBlogPost['TIMESTAMP'];?>" class="date-1"><i class="icon-calendar icon-white"></i> <?php echo $this->core->hubby->time($this->singleBlogPost['TIMESTAMP']);?></time>
        <div class="name-author"><i class="icon-user icon-white"></i> Par <a href="#"><?php echo $this->singleBlogPost['AUTHOR'];?></a></div>
        <div class="name-author"><i class="icon-tag icon-white"></i> Dans <a href="<?php echo $this->singleBlogPost['CATEGORY_LINK'];?>"><?php echo $this->singleBlogPost['CATEGORY'];?></a></div>
        <div class="clear"></div>
        <div class=""><img alt="<?php echo $this->singleBlogPost['TITLE'];?>" itemprop="image" src="<?php echo $this->singleBlogPost['FULL'];?>" style="visibility: visible; opacity: 1;"></div>
        <p itemprop="description"><?php echo $this->singleBlogPost['CONTENT'];?></p>
	</li>
	<div>
		<h3 style="margin:20px 0px;"><?php echo $this->TT_SBP_comments;?> commentaire(s)</h3>
		<div class="row">
			<?php
			if($this->TT_SBP_comments > 0)
			{
				$commentID	=	1;
				foreach($this->SBP_comments as $s)
				{
			?>	   
			<div class="span7" style="background:#333;padding:10px;margin-bottom:10px;" itemscope itemtype="http://schema.org/UserComments" id="li-comment-<?php echo $commentID;?>">
				<div class="span1" style="margin:0;">
					<img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' style="margin:0;" height='60' width='60' />      
				</div>
                <div class="span6">
					<div itemprop="creator" class="comment-author vcard" itemprop="dateCreated"><?php echo $s['AUTHOR'];?> - <?php echo $this->core->hubby->time($s['TIMESTAMP']);?></div>
					<div class="comment-inner">
						<p itemprop="commentText" style="margin:0;padding:0;"><?php echo $s['CONTENT'];?></p>
					</div>
				</div>
			</div>
            <?php
					$commentID++;
				}
			}
			?>
		</div>
	</div>
	<!-- Respond -->				
	<div style="margin-top:20px;">
		<?php $this->parseNotice();?>
        <?php $this->parseForm();?>
	</div>
	<?php
		}
		else if($this->singleBlogPost	===	false)
		{
			?>
		<div id="posts-list">
        	<pre>Article introuvable disponible</pre>
        </div>
            <?php
		}
