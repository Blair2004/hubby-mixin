<?php
		if(count($this->ttWidgets) > 0)
		{
			foreach($this->ttWidgets as $w)
			{
		?>
        <h3><?php echo $w['TITLE'];?></h3>
        <div class="wrapper">
        <?php echo $w['CONTENT'];?>
        </div>
        <?php
			}
		}
		?>
        <?php
