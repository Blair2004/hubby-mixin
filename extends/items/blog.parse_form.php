<?php
		if(count($this->currentForm) > 0)
		{
		?>
        <form class="form-horizontal" method="<?php echo $this->formType;?>" enctype="<?php echo $this->formEnctype;?>" action="<?php echo $this->formAction;?>">
        	        	<?php
			foreach($this->currentForm as $c)
			{
				echo $c;
			}
			?>
        </form>
        
        <?php
		}
