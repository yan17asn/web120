<?php include 'includes/header.php'?>

		<div class="content">
            <p id="galleriestitle">Galleries of Bookthinkso</p>
			<div class="grid">
				<div class="grid__item" data-size="1000x667">
					<a href="images/original/1.jpg" class="img-wrap"><img src="images/thumbs/1.jpg" alt="img01" />
						<div class="description description--grid">street</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x1333">
					<a href="images/original/2.jpg" class="img-wrap"><img src="images/thumbs/2.jpg" alt="img02" />
						<div class="description description--grid">tea</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x1500">
					<a href="images/original/3.jpg" class="img-wrap"><img src="images/thumbs/3.jpg" alt="img03" />
						<div class="description description--grid">corner</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x665">
					<a href="images/original/4.jpg" class="img-wrap"><img src="images/thumbs/4.jpg" alt="img04" />
						<div class="description description--grid">newbooks</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x750">
					<a href="images/original/5.jpg" class="img-wrap"><img src="images/thumbs/5.jpg" alt="img05" />
						<div class="description description--grid">bookstore</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x677">
					<a href="images/original/6.jpg" class="img-wrap"><img src="images/thumbs/6.jpg" alt="img06" />
						<div class="description description--grid">counter</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x561">
					<a href="images/original/7.jpg" class="img-wrap"><img src="images/thumbs/7.jpg" alt="img07" />
						<div class="description description--grid">good study</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x665">
					<a href="images/original/8.jpg" class="img-wrap"><img src="images/thumbs/8.jpg" alt="img08" />
						<div class="description description--grid">corner</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x750">
					<a href="images/original/9.jpg" class="img-wrap"><img src="images/thumbs/9.jpg" alt="img09" />
						<div class="description description--grid">child</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x750">
					<a href="images/original/10.jpg" class="img-wrap"><img src="images/thumbs/10.jpg" alt="img10" />
						<div class="description description--grid">child</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x750">
					<a href="images/original/11.jpg" class="img-wrap"><img src="images/thumbs/11.jpg" alt="img11" />
						<div class="description description--grid">checkout</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x563">
					<a href="images/original/12.jpg" class="img-wrap"><img src="images/thumbs/12.jpg" alt="img12" />
						<div class="description description--grid">night</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x1503">
					<a href="images/original/13.jpg" class="img-wrap"><img src="images/thumbs/13.jpg" alt="img13" />
						<div class="description description--grid">event</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x1503">
					<a href="images/original/14.jpg" class="img-wrap"><img src="images/thumbs/14.jpg" alt="img14" />
						<div class="description description--grid">event</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x665">
					<a href="images/original/15.jpg" class="img-wrap"><img src="images/thumbs/15.jpg" alt="img15" />
						<div class="description description--grid">event</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x665">
					<a href="images/original/16.jpg" class="img-wrap"><img src="images/thumbs/16.jpg" alt="img16" />
						<div class="description description--grid">event</div>
					</a>
				</div>
				<div class="grid__item" data-size="1000x1333">
					<a href="images/original/17.jpg" class="img-wrap"><img src="images/thumbs/17.jpg" alt="img17" />
						<div class="description description--grid">seat</div>
					</a>
				</div>
				
			</div>
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>
		
	</div>
	<!-- /container -->
	
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function() {
			// create SVG circle overlay and append it to the preview element
			function createCircleOverlay(previewEl) {
				var dummy = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
				dummy.setAttributeNS(null, 'version', '1.1');
				dummy.setAttributeNS(null, 'width', '100%');
				dummy.setAttributeNS(null, 'height', '100%');
				dummy.setAttributeNS(null, 'class', 'overlay');
				var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
				var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
				circle.setAttributeNS(null, 'cx', 0);
				circle.setAttributeNS(null, 'cy', 0);
				circle.setAttributeNS(null, 'r', Math.sqrt(Math.pow(previewEl.offsetWidth,2) + Math.pow(previewEl.offsetHeight,2)));
				dummy.appendChild(g);
				g.appendChild(circle);
				previewEl.appendChild(dummy);
			}
			
			new GridFx(document.querySelector('.grid'), {
				onInit : function(instance) {
					createCircleOverlay(instance.previewEl);
				},
				onResize : function(instance) {
					instance.previewEl.querySelector('svg circle').setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
				},
				onOpenItem : function(instance, item) {
					// item's image
					var gridImg = item.querySelector('img'),
						gridImgOffset = gridImg.getBoundingClientRect(),
						win = {width: document.documentElement.clientWidth, height: window.innerHeight},
						SVGCircleGroupEl = instance.previewEl.querySelector('svg > g'),
						SVGCircleEl = SVGCircleGroupEl.querySelector('circle');
						
					SVGCircleEl.setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
					// set the transform for the SVG g node. This will animate the circle overlay. The origin of the circle depends on the position of the clicked item.
					if( gridImgOffset.left + gridImg.offsetWidth/2 < win.width/2 ) {
						SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(' + win.width + ', ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
					}
					else {
						SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(0, ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
					}
				}
			});
		})();
	</script>
<?php include 'includes/footer.php'?>