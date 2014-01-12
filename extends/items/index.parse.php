<div class="bg-content">
    <div class="container">
        <div class="row">
            <div class="span12"> 
				<?php $this->parseCaroussel();?>
				<?php $this->parseProductListingCaroussel();?>
				<?php $this->parseIndexAboutUs();?>
			</div>

        </div>
    </div>
    <div id="content" class="content-extra">
        <!-- featured -->
        <?php $this->parseOnTopContent();?>
        <?php $this->parseLastestElements();?>
        <?php $this->parseFeaturedProducts();?>
        <!-- ENDS featured --> 
        <?php $this->parseGalleryShowCase();?>
        <div class="ic"></div>
        <div class="row-1">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php $this->parseTabShowCase();?>
                    </div>
				</div>
            </div>
		</div>
        <?php $this->parseTextList();?>
		<?php $this->parsePartners();?>
    </div>
</div>
<?php 
if(true == false)
{
	?>
<div id="main"> 
    <!-- social -->
    <?php $this->socialBar();?>
    <!-- ENDS social --> 
    <!-- Content -->
    <div id="content"> 
        <!-- slider -->
        <!-- ENDS slider --> 
        <!-- featured -->
        <!-- ENDS featured --> 
        <!-- Features Products -->
        <!-- ENDS Features Products -->
        <!-- text-posts -->
        
        <!-- ENDS text-posts --> 
        <!-- home-gallery -->
        <!-- Headline -->
        <!-- ENDS Headline --> 
        <!-- ENDS home-gallery --> 
    </div>
    <!-- ENDS content -->
    <div class="clearfix"></div>
    <div class="shadow-main"></div>
</div>
<?php
}
?>
