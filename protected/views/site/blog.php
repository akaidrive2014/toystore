<div id="line-page-title">
	<div class="line-wrap">
		<div class="line-page-title-inner">
			<div style="background:url('<?php if (empty($banner->banner_image)) { ?> <?php echo $this->baseTheme();?>/front/ostar/assets/img/sample/blog/6.jpg <?php }else{?><?php echo $this -> baseUrl(); ?>/assets/uploads/images/thumbnail/<?php echo $banner->banner_image;?><?php } ?>') center center; padding:150px 0">
				<div class="line-title-captions" data-scrollreveal="enter top over 0.5s after 0.3s">
					<h1 class="line-entry-title">
						<?php 
							if(!empty($Category)) {
								echo $Category->category_name; 
							}else{
								if(empty($banner->banner_title)){
									echo "My Blog";
								}else{
									echo $banner->banner_title;
								}
							};
						?>
					</h1>
				</div>
				<ul class="line-breadcrumbs" data-scrollreveal="enter bottom over 0.5s after 0.4s">
					<li>
						<a href="<?php echo $this->baseUrl();?>">Home</a>
					</li>
					<li>
						<?php 
							if(!empty($Category)) {
								echo $Category->category_name; 
							}else{
								if(empty($banner->banner_title)){
									echo "My Blog";
								}else{
									echo $banner->banner_title;
								}
							};
						?>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--end line-wrap-->
</div>
<div id="line-page-body">
	<div class="line-wrap line-blog line-container line-blog-grid">
		<div class="line-page-content">
		<?php /*
		<div class="line-wrap line-portfolio line-container line-portfolio-simple line-no-sidebar">
					<div class="line-page-content">
						<div class="line-content line-page-content-inner">
						
						<ul class="line-filter">
								<li>
									<a data-filter="*" href="#" class="selected">All</a>
								</li>
								<li>
									<a data-filter=".cat1" href="#">jQuery</a>
								</li>
								<li>
									<a data-filter=".cat2" href="#">Design</a>
								</li>
								<li>
									<a data-filter=".cat3" href="#">HTML5</a>
								</li>
								<li>
									<a data-filter=".cat4" href="#">Mobile</a>
								</li>
							</ul>
							</div>
					</div>
		</div>*/ ?>
			<div class="line-content line-page-content-inner line-col-4">
				<div class="masonry-grid">
					<?php if(!empty($Posts)){
						foreach($Posts as $post):
					
					?>
					<article class="post item entry type-post">
						<div class="line-entry-wrap">
							<div class="line-thumb">
								<a href="<?php echo $post->url_link;?>">
									<img src="<?php echo $this->baseUrl().'/assets/uploads/images/thumbnail/'.$post->news_thumb_image;?>" alt="thumb">
								</a>
							</div>
							<div class="line-entry-content-wrap">
								<header class="entry-header">
									<h1 class="entry-title">
										<a href="<?php echo $post->url_link;?>">
										<?php echo $post->news_title;?>
										</a>
									</h1>
									<div class="line-entry-meta">
										<span class="incategory">
											<?php echo $this->getCategories($post->category_id);?>
										</span> -
										<span class="line-date"><?php echo $post->display_date;?></span> 
									</div>
								</header>
								<div class="line-entry-content">
									<p>
										<?php echo substr(strip_tags($post->news_content),0,86);?>..
									</p>
								</div>
							</div>
						</div>
					</article> 
					<?php endforeach;} ?>
				</div>
			</div>
		</div>
		<!--line-page-content-->
	</div>
	<!--end line-blog-->
</div>