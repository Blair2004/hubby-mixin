<?php
if(isset($this->indexAboutUs))
{
?>
<div class="block-slogan">
    <h2><?php echo $this->indexAboutUsTitle;?></h2>
    <div>
        <p><?php echo strip_tags($this->indexAboutUs);?></p>
    </div>
</div>
    <?php
}
