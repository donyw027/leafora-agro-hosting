<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Products</h2>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
<br><br>
<section class="Feautes section">
	<div class="container">
		<div class="row">
			<?php foreach ($produk as $p): ?>
				<div class="col-md-4 mb-4">
					<div class="card h-100 shadow-sm">
						<div class="card-header">
							<h5 class="card-title text-center"><?= $p['nama_produk'] ?></h5>
						</div>
						<div class="card-body text-center leafora-product-card-body">
							<img
								src="<?= base_url('uploads/produk/' . $p['foto']) ?>"
								class="img-fluid product-thumb mb-3"
								alt=""
								style="height: 300px; width: 100%; object-fit: cover;">

							<div class="product-action-wrap">
								<!-- Detail Produk -->
								<button type="button"
									class="btn leafora-btn-main"
									data-toggle="modal"
									data-target="#produkModal<?= $p['id'] ?>">
									<?= $this->lang->line('p_detail_produk') ?>
								</button>

								<!-- Request Quotation -->
								<button type="button"
									class="btn leafora-btn-secondary btn-request-quotation"
									data-toggle="modal"
									data-target="#requestQuotationModal"
									data-produk-id="<?= $p['id'] ?>">
									<?= $this->lang->line('p_request') ?>
								</button>

								<!-- <div class="marketplace-row">
									<a href="#" target="_blank" class="btn leafora-market-btn shopee-btn">
										<i class="icofont-shopping-cart"></i>
										<span>Shopee</span>
									</a>

									<a href="#" target="_blank" class="btn leafora-market-btn tokped-btn">
										<i class="icofont-shopping-cart"></i>
										<span>Tokopedia</span>
									</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>

				<!-- modal request -->

				<div class="modal fade" id="requestQuotationModal" tabindex="-1" role="dialog" aria-labelledby="requestQuotationModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="requestQuotationModalLabel">Form Request Quotation - <?= $this->lang->line('produk') ?> <?= $p['nama_produk'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="alert alert-info" role="alert">
								<h4 class="alert-heading"><?= $this->lang->line('p_note') ?></h4>
								<p><?= $this->lang->line('p_note1') ?></p>
								<hr>
								<p class="mb-0"><?= $this->lang->line('p_note2') ?></p>
							</div>
							<form action="<?= site_url('m_quotation/add') ?>" method="post">
								<div class="modal-body">
									<input type="hidden" name="produk" value="<?= $p['nama_produk'] ?>" id="produk">

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="nama"><?= $this->lang->line('nama_lengkap') ?></label>
											<input type="text" name="nama" id="nama" class="form-control" required>
										</div>
										<div class="form-group col-md-6">
											<label for="email"><?= $this->lang->line('email') ?></label>
											<input type="email" name="email" id="email" class="form-control" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="negara"><?= $this->lang->line('negara') ?></label>
											<input type="text" name="negara" id="negara" class="form-control" required>
										</div>
										<div class="form-group col-md-6">
											<label for="no_wa"><?= $this->lang->line('whatsapp') ?></label>
											<input type="text" name="no_wa" id="no_wa" class="form-control" required>
										</div>
									</div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal"><?= $this->lang->line('tutup') ?></button>
									<button type="submit" class="btn btn-primary"><?= $this->lang->line('p_kirim_quotation') ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Modal Detail Produk -->
				<div class="modal fade" id="produkModal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="produkModalLabel<?= $p['id'] ?>" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="produkModalLabel<?= $p['id'] ?>"><?= $p['nama_produk'] ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<!-- <img src="<?= base_url('uploads/produk/' . $p['foto']) ?>" class="img-fluid mb-3 rounded" alt=""> -->
								<p><?= nl2br($p['detail']) ?></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

								<!-- <button type="button" class="btn btn-sm btn-outline-success mt-2 btn-request-quotation" data-toggle="modal" data-target="#requestQuotationModal" data-produk-id="<?= $p['id'] ?>">
									Request Quotation
								</button> -->
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

			<!-- Baris pagination terpisah -->

		</div>
		<div class="row mt-4">
			<div class="col-12 d-flex justify-content-end">
				<?= $pagination ?>
			</div>
		</div>
	</div>

</section>