<!-- End Header Area -->

<!-- Hero Area -->
<section class="slider leafora-hero">
	<div class="hero-slider">
		<?php if (!empty($sliders)) : ?>
			<?php foreach ($sliders as $index => $slide) : ?>
				<?php
				$primary_label = 'See Products';
				$secondary_label = 'Send Inquiry';

				if ($index === 0) {
					$primary_label = 'View Products';
					$secondary_label = 'Contact Us';
				} elseif ($index === 2) {
					$primary_label = 'Our Services';
					$secondary_label = 'Request a Quote';
				}

				$primary_url = preg_match('/^https?:\/\//i', $slide['button_primary_url']) ? $slide['button_primary_url'] : site_url(trim($slide['button_primary_url'], '/'));
				$secondary_url = preg_match('/^https?:\/\//i', $slide['button_secondary_url']) ? $slide['button_secondary_url'] : site_url(trim($slide['button_secondary_url'], '/'));
				$bg_path = strpos($slide['background_image'], '/') !== false ? base_url($slide['background_image']) : base_url('uploads/slider/' . $slide['background_image']);
				?>
				<div class="single-slider" style="background-image:url('<?= $bg_path ?>')">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-7">
								<div class="text hero-modern-card">
									<div class="hero-badge mb-3">
										<span><?= html_escape($slide['badge_text']) ?></span>
									</div>

									<h1 class="hero-title mb-3">
										<?= nl2br(html_escape($slide['title_text'])) ?>
									</h1>

									<p class="hero-desc mb-4">
										<?= nl2br(html_escape($slide['description_text'])) ?>
									</p>

									<div class="button d-flex flex-wrap gap-2">
										<a href="<?= $primary_url ?>" class="btn primary"><?= $primary_label ?></a>
										<a href="<?= $secondary_url ?>" class="btn"><?= $secondary_label ?></a>
									</div>
								</div>
							</div>

							<div class="col-lg-5 d-none d-lg-block">
								<div class="hero-side-card">
									<div class="mini-feature-box">
										<h6><?= html_escape($slide['small_title']) ?></h6>
										<p class="mb-0"><?= nl2br(html_escape($slide['small_description'])) ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="single-slider" style="background-image:url('<?= base_url('assets/img/bg2.png') ?>')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<div class="text hero-modern-card">
								<div class="hero-badge mb-3">
									<span>Fresh • Clean • Reliable</span>
								</div>
								<h1 class="hero-title mb-3">Premium Hydroponic Produce for Fresh and Reliable Supply</h1>
								<p class="hero-desc mb-4">Fresh, pesticide-free, and nutrient-rich vegetables such as Kyuri, Cherry Tomatoes, and specialty greens grown with high hygiene standards for retail, supermarkets, and commercial markets.</p>
								<div class="button d-flex flex-wrap gap-2">
									<a href="<?= site_url('produk') ?>" class="btn primary">See Products</a>
									<a href="<?= site_url('contact') ?>" class="btn">Send Inquiry</a>
								</div>
							</div>
						</div>
						<div class="col-lg-5 d-none d-lg-block">
							<div class="hero-side-card">
								<div class="mini-feature-box">
									<h6>Fresh Harvest Standards</h6>
									<p class="mb-0">High hygiene standards with premium quality control for modern food supply.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- End Hero Area -->


<!-- End Hero Area -->


<!-- Intro / Featured -->
<section class="features-section py-5 leafora-section-soft">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-9">
				<div class="section-intro-card mx-auto">
					<div class="section-mini-logo mb-3">
						<img src="<?= base_url('assets/img/logoagro.jpg') ?>" alt="Leafora Agro Industri" style="max-width: 72px;" class="rounded-circle shadow-sm">
					</div>
					<h2 class="text-uppercase fw-bold mb-3">Leafora Agro Industri</h2>
					<p class="text-muted mb-0">
						Integrated Solutions for Modern Hydroponics and Agricultural Supplies.
						An Indonesia-based agri-business dedicated to the modern farming ecosystem. We produce premium hydroponic vegetables, distribute professional farming equipment, and manage the sourcing of imported raw materials to ensure high-quality inputs for the national agricultural industry.

					</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center text-center mb-4">
			<div class="col-lg-8">
				<h4 class="fw-semibold text-dark">Our Featured Products</h4>
				<p class="text-muted">
					Three core product categories designed to support modern cultivation and agricultural supply needs.
				</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-md-4">
				<div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 leafora-card">
					<div class="feature-icon mb-3">
						<i class="icofont-plant text-success" style="font-size: 40px;"></i>
					</div>
					<h5 class="fw-bold mb-3">Premium Hydroponic Produce</h5>
					<p class="text-muted small mb-0">
						Fresh, pesticide-free, and nutrient-rich vegetables such as Kyuri,
						Cherry Tomatoes, Lettuce, and specialty greens grown with high hygiene standards
						for modern retail and commercial markets.
					</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 leafora-card">
					<div class="feature-icon mb-3">
						<i class="icofont-tools-alt-2 text-primary" style="font-size: 40px;"></i>
					</div>
					<h5 class="fw-bold mb-3">Professional Farming Equipment</h5>
					<p class="text-muted small mb-0">
						Providing modern agricultural hardware including pH/TDS meters,
						specialized irrigation pumps, LED grow lights, and modular hydroponic system components.
					</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 leafora-card">
					<div class="feature-icon mb-3">
						<i class="icofont-laboratory text-info" style="font-size: 40px;"></i>
					</div>
					<h5 class="fw-bold mb-3">Imported Agricultural Raw Materials</h5>
					<p class="text-muted small mb-0">
						Direct sourcing of essential high-quality inputs including Urea N46%,
						GA3, NAA-Na, Fe, premium AB Mix nutrients, and superior growing media.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Intro / Featured -->


<!-- Why Choose Us -->
<section class="leafora-highlight-section py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-8">
				<div class="mb-3">
					<i class="icofont-handshake-deal text-white" style="font-size: 48px;"></i>
				</div>
				<h2 class="fw-bold text-white">Why Choose Us</h2>
				<p class="text-white-50 mb-0">
					We deliver more than just products; we provide innovation, quality, and reliability.
				</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-md-6 col-lg-3">
				<div class="leafora-glass-card h-100 text-center p-4">
					<div class="mb-3">
						<i class="icofont-check-circled text-white" style="font-size: 34px;"></i>
					</div>
					<h5 class="text-white">Guaranteed Freshness & Quality</h5>
					<p class="text-white-50 small mb-0">
						Our hydroponic produce meets strict standards for safety, taste, and nutritional value.
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="leafora-glass-card h-100 text-center p-4">
					<div class="mb-3">
						<i class="icofont-ui-settings text-white" style="font-size: 34px;"></i>
					</div>
					<h5 class="text-white">Comprehensive Supply Chain</h5>
					<p class="text-white-50 small mb-0">
						A one-stop solution for farming tools and imported raw materials that are often difficult to source locally.
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="leafora-glass-card h-100 text-center p-4">
					<div class="mb-3">
						<i class="icofont-education text-white" style="font-size: 34px;"></i>
					</div>
					<h5 class="text-white">Technical Expertise</h5>
					<p class="text-white-50 small mb-0">
						Backed by a team with deep knowledge of modern cultivation technology and agricultural input specifications.
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="leafora-glass-card h-100 text-center p-4">
					<div class="mb-3">
						<i class="icofont-chart-growth text-white" style="font-size: 34px;"></i>
					</div>
					<h5 class="text-white">Scalable Solutions</h5>
					<p class="text-white-50 small mb-0">
						Serving a wide range of clients from urban farming enthusiasts to industrial greenhouse operations.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose Us -->


<!-- Services -->
<section class="services py-5 bg-white">
	<div class="container">
		<div class="text-center mb-5">
			<span class="leafora-section-label">Our Services</span>
			<h2 class="section-title text-uppercase text-dark mt-2">From Premium Harvests to Professional Supply Management</h2>
			<p class="text-muted">
				Integrated services designed to support productivity, consistency, and modern agricultural growth.
			</p>
		</div>

		<div class="row g-4">
			<div class="col-md-6 col-lg-3">
				<div class="card service-card h-100 border-0 shadow-sm p-4 rounded-4 leafora-card">
					<div class="service-icon mb-3">
						<i class="icofont-food-basket text-success" style="font-size: 38px;"></i>
					</div>
					<h5 class="mb-3">Fresh Produce Distribution</h5>
					<p class="text-muted small mb-0">
						Supplying high-quality hydroponic vegetables to local markets, supermarkets, and B2B clients.
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card service-card h-100 border-0 shadow-sm p-4 rounded-4 leafora-card">
					<div class="service-icon mb-3">
						<i class="icofont-ui-settings text-primary" style="font-size: 38px;"></i>
					</div>
					<h5 class="mb-3">Equipment Sourcing & Supply</h5>
					<p class="text-muted small mb-0">
						Distributing the latest farming technology and precision tools to optimize agricultural efficiency.
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card service-card h-100 border-0 shadow-sm p-4 rounded-4 leafora-card">
					<div class="service-icon mb-3">
						<i class="icofont-globe-alt text-info" style="font-size: 38px;"></i>
					</div>
					<h5 class="mb-3">Global Raw Material Procurement</h5>
					<p class="text-muted small mb-0">
						Managing international sourcing and imports of essential agricultural chemicals and nutrients.
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="card service-card h-100 border-0 shadow-sm p-4 rounded-4 leafora-card">
					<div class="service-icon mb-3">
						<i class="icofont-support text-success" style="font-size: 38px;"></i>
					</div>
					<h5 class="mb-3">Farm System Consultation</h5>
					<p class="text-muted small mb-0">
						Providing technical guidance on hydroponic system design (NFT/DFT) and crop management strategies.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Services -->


<!-- Our Network -->
<section class="py-5 leafora-network-section">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-8">
				<span class="leafora-section-label light">Our Network</span>
				<h2 class="fw-bold text-white mt-2">Bridging Global Innovation with Local Agricultural Excellence</h2>
				<p class="text-white-50 mb-0">
					Strong sourcing, reliable distribution, and strategic partnerships for sustainable growth.
				</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-md-4">
				<div class="network-card h-100 p-4">
					<div class="mb-3">
						<i class="icofont-globe text-info" style="font-size: 38px;"></i>
					</div>
					<h5>Global Sourcing</h5>
					<p class="mb-0">
						Partnering with world-class suppliers from Europe, North America, and Asia to bring premium materials to Indonesia.
					</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="network-card h-100 p-4">
					<div class="mb-3">
						<i class="icofont-truck-loaded text-success" style="font-size: 38px;"></i>
					</div>
					<h5>National Distribution</h5>
					<p class="mb-0">
						Delivering fresh produce and agricultural supplies to clients across the Indonesian archipelago.
					</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="network-card h-100 p-4">
					<div class="mb-3">
						<i class="icofont-handshake-deal text-primary" style="font-size: 38px;"></i>
					</div>
					<h5>Strategic Partnerships</h5>
					<p class="mb-0">
						Collaborating with international agri-tech manufacturers to ensure access to the latest farming advancements.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Our Network -->


<!-- CTA Contact -->
<section class="appointment py-5 leafora-cta-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="cta-modern-box text-center">
					<div class="section-mini-logo mb-3">
						<img src="<?= base_url('assets/img/logoagro.jpg') ?>" alt="Leafora Agro Industri" style="max-width: 78px;" class="rounded-circle shadow-sm">
					</div>

					<h2 class="fw-bold mb-3">Contact Us for Modern Agricultural Solutions</h2>
					<p class="text-muted mb-4">
						Tell us your specific needs — from hydroponic produce volume to equipment specifications
						or raw material requirements. Our team will provide competitive pricing and technical details
						tailored to your business scale.
					</p>

					<div class="d-flex justify-content-center flex-wrap gap-2">
						<a href="<?= site_url('contact') ?>" class="btn primary">Send Inquiry</a>
						<a href="<?= site_url('contact') ?>" class="btn">Request a Quote</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End CTA Contact -->