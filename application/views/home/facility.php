
<div class="container " style = "margin-top:160px">
    <h1>FKI Facility</h1>

    
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    
    <?php $count = $data->num_rows();?>

    <?php for($i=1; $i<$count; $i++) { ?>
    <li data-target="#demo" data-slide-to="1"></li>
    <?php }?>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $data->row(1)->picture;?>" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
                <h3><?php echo $data->row(1)->title;?></h3>
                <p><?php echo $data->row(1)->description;?></p>
            </div> 
    </div>

    
    <?php for($i = 2; $i < $count; $i++) {?>
        <div class="carousel-item">
        <img src="<?php echo $data->row($i)->picture;?>" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3><?php echo $data->row($i)->title;?></h3>
                <p><?php echo $data->row($i)->description;?></p>
            </div> 
        </div>
    <?php }?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>