<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Blog</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="news-single section blog-list-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">

				<div class="blog-heading-card mb-4">
					<div>
						<span class="blog-subtitle">Latest Updates</span>
						<h2 class="blog-title mb-1">News & Articles</h2>
						<p class="blog-desc mb-0">Stay updated with our latest news, insights, and company articles.</p>
					</div>
				</div>

				<div class="blog-list-card">
					<?php if (!empty($posts)): ?>
						<div class="list-group list-group-flush list-article blog-article-list">
							<?php foreach ($posts as $p): ?>
								<a class="list-group-item list-group-item-action blog-item"
									href="<?= site_url('blog/' . $p->slug) ?>">

									<div class="row align-items-center">
										<div class="col-lg-1 col-md-2 col-2">
											<div class="blog-item-icon">
												<i class="fas fa-newspaper" aria-hidden="true"></i>
											</div>
										</div>

										<div class="col-lg-8 col-md-7 col-10">
											<div class="blog-item-content">
												<h6 class="blog-item-title mb-1">
													<?= html_escape($p->title) ?>
												</h6>
												<div class="blog-item-meta d-block d-md-none">
													<i class="fa fa-calendar-alt me-1"></i>
													<?= !empty($p->created_at) ? date('M d, Y', strtotime($p->created_at)) : '-' ?>
												</div>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 d-none d-md-block text-end">
											<div class="blog-item-date">
												<i class="fa fa-calendar-alt me-1"></i>
												<?= !empty($p->created_at) ? date('M d, Y', strtotime($p->created_at)) : '-' ?>
											</div>
										</div>
									</div>
								</a>
							<?php endforeach; ?>
						</div>
					<?php else: ?>
						<div class="empty-blog-state text-center">
							<div class="empty-blog-icon mb-3">
								<i class="fas fa-newspaper"></i>
							</div>
							<h5 class="mb-2">No Blog Posts Yet</h5>
							<p class="mb-0 text-muted"><?= $this->lang->line('no_blog') ?></p>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/ End Single News -->