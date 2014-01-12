<?php
		if(count($this->tabShowCase) > 0)
		{
		?>
        <h3 class="home-block-heading"><?php echo $this->tabShowCaseTitle;?></h3>
        <div class="tabbable"> <!-- Only required for left/right tabs -->
        	<ul class="nav nav-tabs">
        <?php
			$i	=	1;
			foreach($this->tabShowCase as $s)
			{
				if($i == 1)
				{
				?>
				<li class="active"><a href="#tab<?php echo $i;?>" data-toggle="tab"><span><?php echo $s['TITLE'];?></span></a></li>
				<?php
				}
				else
				{
				?>
				<li><a href="#tab<?php echo $i;?>" data-toggle="tab"><span><?php echo $s['TITLE'];?></span></a></li>
				<?php
				}
				$i++;
			}
		?>
        	</ul>
            <div class="tab-content">
            <?php
			$i	=	1;
			foreach($this->tabShowCase as $s)
			{
				if($i == 1)
				{
				?>
                <div class="tab-pane active" id="tab<?php echo $i;?>">
				<p><?php echo $s['CONTENT'];?></p>
                </div>
				<?php
				}
				else
				{
				?>
				<div class="tab-pane" id="tab<?php echo $i;?>">
				<p><?php echo $s['CONTENT'];?></p>
                </div>
				<?php
				}
				$i++;
			}
		?>
        	</div>
        </div>
        <?php
		}
