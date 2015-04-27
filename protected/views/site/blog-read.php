<div id="line-page-title">
	<div class="line-wrap">
		<div class="line-page-title-inner">
			<div style="background:url(<?php echo $this -> baseTheme(); ?>/front/ostar/assets/img/sample/blog/1.jpg) center center; padding:150px 0">
				<div class="line-title-captions" data-scrollreveal="enter top over 0.5s after 0.3s">
					<h1 class="line-entry-title">My Blog</h1>
				</div>
				<ul class="line-breadcrumbs" data-scrollreveal="enter bottom over 0.5s after 0.4s">
					<li>
						<a href="<?php echo $this->baseUrl();?>">Home</a>
					</li>
					<li>
						<a href="<?php echo $this->baseUrl();?>/blog">Blog</a>
					</li>
					 
				</ul>
			</div>
		</div>
	</div>
	<!--end line-wrap-->
</div>
<div id="line-page-body">
	<div class="line-wrap line-blog line-container line-blog-simple line-no-sidebar">
		<div class="line-page-content">
			<div class="line-content line-page-content-inner">
				<article class="post entry type-post format-gallery">
					<div class="line-meta">
						<div class="line-meta-inner">
							<div class="line-date">
								<span class="day"><?php echo date('d',strtotime($post->news_date));?></span>
								<span class="month"><?php echo date('M',strtotime($post->news_date));?></span>
							</div>
							<div class="line-comments">
								<?php /*<i class="fa fa-comments-o"></i>*/ ?>
								<div class="numb">
									<?php echo date('Y',strtotime($post->news_date));?>
								</div>
							</div>
						</div>
					</div>
					<div class="line-entry-wrap">
						<?php
						$IMAGES = $this->getAllImageByNewsID($post->news_id);
						if(!empty($IMAGES)){
						?>
						<div class="line-thumb">
							<div class="line-post-gallery line-gallery-columns-4">
								<?php foreach($IMAGES as $image){?>
								<div class="line-col">
									<a href="<?php echo $this->baseImageUpload().$image->image;?>" data-lightbox="nivoLightbox" data-lightbox-gallery="gallery1"> 
										<img src="<?php echo $this->baseUrl().'/assets/uploads/images/thumbnail/'.$image->image;?>" alt="thumb"> 
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
						<?php } ?>
						<div class="line-entry-content-wrap">
							<header class="entry-header">
								<h1 class="entry-title"><a href="<?php echo $post->url_link;?>"> <?php echo $post->news_title;?> </a></h1>
								<div class="line-entry-meta">
									Post by
									<a class="author" href="#">admin</a>
									in
									<span class="incategory"> <?php echo $this->getCategories($post->category_id);?> </span>
								</div>
							</header>
							<div class="line-entry-content">
								<?php echo $post->news_content;?>
							</div>
							<div class="line-placehold-bottom"></div>
							<footer class="entry-footer">
								<?php /*
								<section class="line-section line-tags">
									<h3 class="line-title">Tags:</h3>
									<ul>
										<li>
											<a href="#">Code</a>
										</li>
										<li>
											<a href="#">Wordpress</a>
										</li>
										<li>
											<a href="#">jQuery</a>
										</li>
										<li>
											<a href="#">Linethemes</a>
										</li>
										<li>
											<a href="#">O'star</a>
										</li>
									</ul>
								</section>*/ ?>
								<nav class="line-section line-nav-links">
									<div class="line-prev line-nav">
										<a title="Prev Post" href="<?php echo $this->getNewsByID($prev)->url_link;?>"> <span class="line-arrow"> <i class="fa fa-angle-left"></i> </span> <span class="line-pager-title"><?php echo substr($this->getNewsByID($prev)->news_title,0,55);?></span> </a>
									</div>
									<div class="line-next line-nav">
										<a title="Next Post" href="<?php echo $this->getNewsByID($next)->url_link;?>"> <span class="line-arrow"> <i class="fa fa-angle-right"></i> </span> <span class="line-pager-title"><?php echo substr($this->getNewsByID($next)->news_title,0,55);?></span> </a>
									</div>
								</nav>
								<?php /*
									 <section class="line-section line-about-author">
									 <div class="line-ava">
									 <img src="assets/img/sample/other/ava.jpg" alt="ava">
									 </div>
									 <div class="line-description">
									 <h3 class="line-title-author"> about the author: <a href="#">Admin</a></h3>
									 <p>
									 Aliquam tristique bibendum velit vel pellentesque. Morbi eget semper ipsum. Maecenas cursus perdiet leo, egestas ullamcorper mauris mattis et. Aenean posuere feugiat fermentum serts. Maecenas mentum sollicitudin conguesertis.
									 </p>
									 </div>
									 </section>
									 */
								?>
								<section class="line-section line-recent-post">
									<h3 class="line-title">You may also like</h3>
									<ul class="line-col-3">
										<?php 
										if(!empty($this->getRandonNews())){
										foreach($this->getRandonNews() as $random):	
										?>
										<li>
											<a href="<?php echo $random->url_link;?>" class="line-thumb-recent"> <img src="<?php echo $this -> baseImageUpload().$random->news_thumb_image;?>" width="328" height="234" alt="img"> </a>
											<h3 class="line-title"><a href="<?php echo $random->url_link;?>"><?php echo $random->news_title;?></a></h3>
											<div class="incategory">
												<?php echo $this->getCategories($random->category_id);?>
											</div>
										</li>
										<?php
										endforeach;
										}
										?>
										 
									</ul>
									<div class="clear"></div>
								</section>
							</footer>
						</div>
					</div>
					<div class="clear"></div>
				</article>

			</div>
		</div>
		<!--line-page-content-->
	</div>
	<!--end line-blog-->
</div>