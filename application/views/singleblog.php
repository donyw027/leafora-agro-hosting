<!-- Single News -->
<section class="news-single section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">

					<div class="col-12">
						<div class="single-main">

							<!-- News Head -->
							<div class="news-head">

								<img src="<?= base_url($post->thumbnail ?: 'assets/img/bg3.png') ?>" alt="<?= html_escape($post->title) ?>"
									style="border-radius:10px;height:400px;object-fit:cover;width:100%;">
							</div>



							<!-- News Title -->
							<h1 class="news-title mt-3">
								<?= html_escape($post->title) ?>
							</h1>

							<!-- Meta tanggal (opsional) -->
							<?php if (!empty($post->created_at)): ?>
								<small class="text-muted">
									<i class="fa fa-calendar"></i>
									<?= date('M d, Y', strtotime($post->created_at)) ?>
								</small>
							<?php endif; ?>

							<!-- News Text -->
							<div class="news-text mt-3">
								<?= $post->content // sudah di-xss_clean di controller 
								?>
							</div>

							<!-- <br>
							<div class="blog-bottom">
								<ul class="social-share">
									<li class="facebook"><a href="#"><i class="fa-brands fa-facebook"></i><span>Facebook</span></a></li>
									<li class="twitter"><a href="#"><i class="fa-brands fa-twitter"></i><span>Twitter</span></a></li>
									<li class="linkedin"><a href="#"><i class="fa-brands fa-linkedin"></i><span>LinkedIn</span></a></li>
								</ul>
							</div> -->
						</div>
					</div>







				</div>
			</div>

			<div class="col-lg-4 col-12">
				<div class="main-sidebar">

					<div class="single-widget recent-post">
						<h3 class="title">Recent post</h3>
						<!-- Single Post -->
						<?php if (!empty($recent_posts)): ?>
							<?php foreach ($recent_posts as $r): ?>
								<div class="single-post">
									<h5>
										<a href="<?= site_url('blog/' . $r->slug) ?>">
											<?= html_escape(character_limiter(strip_tags($r->title), 30, '…')) ?>

										</a>
									</h5>
									<ul class="comment">
										<li><i class="fa fa-calendar" aria-hidden="true"></i>
											<?= date('M d, Y', strtotime($r->created_at)) ?>
										</li>
									</ul>
								</div>
								<br>

							<?php endforeach; ?>
						<?php else: ?>
							<p class="text-muted mb-0">Belum ada posting.</p>
						<?php endif; ?>


					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Single News -->