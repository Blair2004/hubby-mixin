<?php
if(count($this->carousselElement) > 0)
{
?>

<div class="camera_wrap camera_magenta_skin" id="camera_wrap_2" style="margin:30px 0px;float:none;">
	<?php
            foreach($this->carousselElement as $c)
            {
                // <?php echo $c['TITLE'];
                // <?php echo word_limiter(strip_tags($c['CONTENT']),20);
        ?>
    <div data-thumb="<?php echo $c['IMAGE'];?>" data-src="<?php echo $c['IMAGE'];?>">
        <div class="camera_caption fadeFromBottom"><?php echo $c['TITLE'];?><br /><em><?php echo word_limiter(strip_tags($c['CONTENT']),20);?></em> </div>
    </div>
    <?php
            }
        ?>
</div>
<script>

    jQuery(function(){
      jQuery('#camera_wrap_2').camera({
        height: '400px',
        loader: 'bar',
        pagination: false,
        thumbnails: false
      });
    });
  
</script>
<!-- slider -->
<?php
}
