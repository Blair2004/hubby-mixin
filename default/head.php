<?php
function getSubmenu($element,$obj)
{
	if(is_array($element))
	{
		if(array_key_exists('PAGE_CHILDS',$element))
		{
			if(is_array($element['PAGE_CHILDS']))
			{
				?>

<ul>
    <?php
				foreach($element['PAGE_CHILDS'] as $p)
				{
					?>
    <li class="submenu"><a href="<?php echo $obj->core->url->site_url(array($p['PAGE_CNAME']));?>"><?php echo ucwords($p['PAGE_NAMES']);?></a>
        <?php getSubmenu($p,$obj);?>
    </li>
    <?php
				}
				?>
</ul>
<?php
			}
		}
	}
}
if($this->core->users_global->isConnected())
{
	$margin	=	'style="margin-top:30px"';
}
else
{
	$margin	=	"";
}
?>
<?php echo $this->core->users_global->getUserMenu();?>
<header <?php echo $margin;?>>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a title="<?php echo $options[0]['SITE_NAME'];?>" href="<?php echo $this->core->url->base_url();?>" id="logo"><img src="<?php  $options[0]['SITE_LOGO'];?>" alt="<?php echo $options[0]['SITE_NAME'];?>"></a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                  <?php 
				  if(count($controllers) > 0)
				  {
						foreach($controllers as $c)
						{
							if($c['PAGE_CNAME'] == $this->core->url->controller())
							{
								
							?>
				<li class="action"><a href="<?php echo $this->core->url->site_url(array($c['PAGE_CNAME']));?>"><?php echo ucwords($c['PAGE_NAMES']);?></a>
					<?php getSubmenu($c,$this);?>
				</li>
				<?php
							}
							else
							{
							?>
				<li><a href="<?php echo $this->core->url->site_url(array($c['PAGE_CNAME']));?>"><?php echo ucwords($c['PAGE_NAMES']);?></a>
					<?php getSubmenu($c,$this);?>
				</li>
				<?php
							}
						}
				?>
                <?php
				  }
				?>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>