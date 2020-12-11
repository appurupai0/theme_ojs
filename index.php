<?php get_header(); ?>



	<!-- main -->
	<main class="mainall">
		<div class="mainviwe">
			<div class="topcontent">
				<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></div>
				<!-- humberger menu -->
				<div id="toggle" class="js-hamburger hamburger">
					<span></span>
			 	</div>
			</div>
			<div class="viewer">
				<ul class="viewcontent">
					<li>
						<picture class="p-1">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
					<li>
						<picture class="p-1">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_2_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_2_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
					<li>
						<picture class="p-1">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_3_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_3_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
					<li>
						<picture class="p-1">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_4_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_4_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
					<li>
						<picture class="p-1">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_5_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_5_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
					<li>
						<picture class="p-6">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_6_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
					<li>
						<picture class="p-1">
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_7_sp.png" media="(max-width :767px)" />
							<img class="nightviwe" src="<?php echo get_template_directory_uri(); ?>/img/visual_7_pc.png" alt="アメリカンビレッジロゴ文字" />
						</picture>
					</li>
				</ul>


			</div>
			<!--/.viewer-->
			<picture class="p-2">
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" media="(max-width :767px)" />
				<img class="word" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="フォントの画像">
			</picture>	
		</div>
		<p class="village">進化し続ける「街」<br class="sp_br">アメリカンビレッジマガジン</p>

	</main>
	<!-- main ここまで -->

	<!-- blog -->
	<div class="blog">
		<section>
			<?php if(have_posts()): ?>
			<h2 class="latest-article">Latest Article</h2>

			<div class="bd-grid flex-box">

				<?php while (have_posts()): the_post(); ?>
				<?php if ( !is_page() ): ?>
				
				
				<div id="post-<?php the_ID(); ?>" class="blog-content">
					<?php the_post_thumbnail(); ?>
					<p class="blog-time"><?php the_time('Y年m月d日'); ?></p>
					<p class="blog-title">
						<a href="<?php the_permalink(); ?>" class="stylenone"><?php the_title(); ?></a>
					</p>
					<a class="blog-more" href="<?php the_permalink(); ?>">READ MORE</a>
				</div>

				<?php endif; ?>
				<?php endwhile; ?>

				<!-- <div class="blog-content">
					<img src="img/post_img_2.png" alt="">
					<p class="blog-time">2018/5/20</p>
					<p class="blog-title">おしゃれカフェがありますよ</p>
					<p class="blog-more">READ MORE</p>
				</div>

				<div class="blog-content">
					<img src="img/post_img_3.png" alt="">
					<p class="blog-time">2018/5/20</p>
					<p class="blog-title">おしゃれカフェがありますよ</p>
					<p class="blog-more">READ MORE</p>
				</div>

				<div class="blog-content">
					<img src="img/post_img_4.png" alt="">
					<p class="blog-time">2018/5/20</p>
					<p class="blog-title">おしゃれカフェがありますよ</p>
					<p class="blog-more">READ MORE</p>
				</div>

				<div class="blog-content">
					<img src="img/post_img_5.png" alt="">
					<p class="blog-time">2018/5/20</p>
					<p class="blog-title">おしゃれカフェがありますよ</p>
					<p class="blog-more">READ MORE</p>
				</div>

				<div class="blog-content">
					<img src="img/post_img_6.png" alt="">
					<p class="blog-time">2018/5/20</p>
					<p class="blog-title">おしゃれカフェがありますよ</p>
					<p class="blog-more">READ MORE</p>
				</div> -->


			</div>
			<?php else: ?>
				<h2 class="latest-article">No Posts</h2>
			<?php endif; ?>
		</section>
	</div>
	<!-- blog ここまで -->



<?php get_footer(); ?>