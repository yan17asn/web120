<?php include 'includes/header.php'?>
<div id="slider">
	<ul class="slides clearfix">
		<li><img class="responsive" src="images/example-slide-1.jpg" alt="homepage photo"></li>
		<li><img class="responsive" src="images/example-slide-2.jpg" alt="homepage photo"></li>
		<li><img class="responsive" src="images/example-slide-3.jpg" alt="homepage photo"></li>
		
	</ul>
	<ul class="controls">
		<li><img src="img/prev.png" alt="previous"></li>
		<li><img src="img/next.png" alt="next"></li>
	</ul>
	<ul class="pagination">
		<li class="active"></li>
		<li></li>
		<li></li>
		
	</ul>
</div>


         
     <div id="indexbackground">
      <div id="news">
         <div class="newsleft">
         <img class="newsimg" src="images/news4.jpg" alt="news photo" />
          <div class=newscontent>
         <p class="newstitle">New Drinks!</p>
         <p>New tea coming soon!</p>
         
          </div>
             
         </div>
         
         <div class="newsright">
        <img class="newsimg" src="images/news2.jpg" alt="news photo" />
         <div class=newscontent>
         <p class="newstitle">Established in July 2018</p>
         <p>Thank you for all customers!</p>
          </div>
         </div>
             <div class="newsleft">
         <img class="newsimg" src="images/news3.jpg" alt="news photo" />
          <div class=newscontent>
         <p class="newstitle">Handmade wallet class</p>
              <p>Handmade wallet class held in last week.</p>
              <p>All student got a new skill.Congratulations!</p>
          </div>
             
         </div>
         
         <div class="newsright">
        <img class="newsimg" src="images/news1.jpg" alt="news photo" />
         
        <div class=newscontent>
        <p class="newstitle">Back to School</p>
         <p>New school's textbook coming soon!</p>
         <p>90% off for all pupils and students</p>
        </div>
        </div>
         
         
          
          
          
          <div class="clear"></div>
         
         </div></div>

<script src="dist/easySlider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider").easySlider( {
			slideSpeed: 500,
			paginationSpacing: "15px",
			paginationDiameter: "12px",
			paginationPositionFromBottom: "20px",
			slidesClass: ".slides",
			controlsClass: ".controls",
			paginationClass: ".pagination"					
		});
	});
</script>
    
      
<?php include 'includes/footer.php'?>
      
