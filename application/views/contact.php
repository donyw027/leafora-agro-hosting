<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<section class="contact-section py-5">
	<div class="container">

		<div class="row text-center mb-4">
			<div class="col">
				<!-- <h2 class="section-title text-primary">Contact Us</h2> -->
				<p class="text-muted">
					Contact us for modern agricultural solutions, product inquiries,
					equipment sourcing, and hydroponic supply needs.
				</p>
			</div>
		</div>

		<div class="row mt-5 align-items-stretch">

			<!-- MAP -->
			<div class="col-md-6 col-lg-6 mt-0 d-flex">
				<div class="map-container rounded overflow-hidden shadow-sm w-100 h-100">


					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.2544268974525!2d112.60884872051324!3d-7.8911133705366225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78817d712fcf93%3A0xbe087a28b7c0ada0!2sAgrow%20Pacific!5e0!3m2!1sen!2sid!4v1777173542071!5m2!1sen!2sid"
						class="w-100 h-100 border-0 rounded"
						loading="lazy">
					</iframe>
				</div>
			</div>

			<!-- FORM -->
			<div class="col-md-6 col-lg-6 d-flex">
				<div class="card shadow-sm border-0 p-4 w-100">

					<div class="text-center mb-4">
						<h2 class="fw-bold mb-2">Send Inquiry</h2>
						<p class="text-muted small">
							Tell us your specific needs — from hydroponic produce volume
							to equipment specifications or raw material requirements.
						</p>
					</div>

					<form action="<?= site_url('m_inquiry/add') ?>" method="post">

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nama">Full Name</label>
								<input type="text" name="nama" id="nama" class="form-control" required>
							</div>

							<div class="form-group col-md-6">
								<label for="email">Active Email</label>
								<input type="email" name="email" id="email" class="form-control" required>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="negara">Country</label>
								<input type="text" name="negara" id="negara" class="form-control" required>
							</div>

							<div class="form-group col-md-6">
								<label for="no_wa">Phone / WhatsApp</label>
								<input type="text" name="no_wa" id="no_wa" class="form-control" required>
							</div>
						</div>

						<div class="form-group">
							<label for="subjek">Subject</label>
							<input type="text" name="subjek" id="subjek" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="pesan">Your Message</label>

							<label
								for="pesan"
								class="text-primary"
								data-toggle="tooltip"
								data-placement="right"
								data-bs-html="true"
								title="Fill in your message with details such as product name, quantity needed, specifications, quality requirements, quotation request, and delivery terms.">

								"Click Here"
							</label>

							<textarea
								name="pesan"
								id="pesan"
								rows="5"
								class="form-control"
								required></textarea>
						</div>

						<button type="submit" class="btn btn-primary px-4">
							Send Message
						</button>

					</form>
				</div>
			</div>

		</div>

		<div class="row gy-4 mt-5">

			<!-- WhatsApp -->
			<div class="col-md-4">
				<div class="contact-box shadow-sm p-4 rounded text-center h-100">
					<div class="icon mb-3">
						<i class="icofont-whatsapp text-success" style="font-size: 30px;"></i>
					</div>

					<h5>WhatsApp</h5>

					<p class="mb-0">+62 819-9042-0823</p>
				</div>
			</div>

			<!-- Address -->
			<div class="col-md-4">
				<div class="contact-box shadow-sm p-4 rounded text-center h-100">
					<div class="icon mb-3">
						<i class="icofont-google-map text-primary" style="font-size: 30px;"></i>
					</div>

					<h5>Address</h5>

					<p class="mb-0">
						Indonesia
					</p>

					<a
						class="d-block mt-2"
						href="https://maps.app.goo.gl/dBDH23tLEUiXaxsNA"
						target="_blank">

						View Map
					</a>
				</div>
			</div>

			<!-- Email -->
			<div class="col-md-4">
				<div class="contact-box shadow-sm p-4 rounded text-center h-100">
					<div class="icon mb-3">
						<i class="icofont-email text-danger" style="font-size: 30px;"></i>
					</div>

					<h5>Email</h5>

					<p>agrowpacific@gmail.com</p>
				</div>
			</div>

		</div>

	</div>
</section>