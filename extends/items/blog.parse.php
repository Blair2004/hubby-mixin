<div class="bg-content">
<div id="content">
    <div class="ic"></div>
    <div class="container">
        <div class="row">
            <article class="span8">
                <div class="inner-1">
                    <?php $this->parseBlogPost();?>
                    <?php $this->parseSingleBlogPost();?>
                </div>
            </article>
            <article class="span4">
                <?php $this->parseWidgets();?>
            </article>
        </div>
        <?php $this->pagination();?>
    </div>
</div>
</div>
<?php

if(true == false)
{
		?>
<!-- MAIN -->
<div id="main"> 
    
    <!-- social -->
    <?php $this->socialBar();?>
    <!-- ENDS social --> 
    
    <!-- Content -->
    <div id="content"> 
        
        <!-- masthead -->
        <div id="masthead"> <span class="head"><?php echo $this->pageTitle;?></span><span class="subhead">
            <?php if(strlen($this->pageDescription) > 0) : echo word_limiter($this->pageDescription,20);endif;?>
            </span>
            <ul class="breadcrumbs">
                <li><a href="index.html">home</a></li>
                <li>/ blog</li>
            </ul>
        </div>
        <!-- ENDS masthead --> 
        
        <!-- posts list -->
        <?php $this->parseProductView();?>
        <?php $this->parseSingleProductView();?>
        <?php $this->parseCartList();?>
        
        <!-- ENDS posts list --> 
        
        <!-- sidebar --> 
        <?php echo $this->parseWidgets();?> 
        <!-- ENDS sidebar --> 
        
        <!-- pager -->
        <?php $this->pagination();?>
        <div class="clearfix"></div>
        <!-- ENDS pager --> 
        
    </div>
    <!-- ENDS content -->
    
    <div class="clearfix"></div>
    <div class="shadow-main"></div>
</div>
<!-- ENDS MAIN -->
<?php
}
