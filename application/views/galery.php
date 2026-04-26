<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>Galery</h2>

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
			<?php foreach ($galeri as $g): ?>
				<div class="col-md-4 mb-4 d-flex align-items-stretch">
					<div class="gallery-item shadow-sm rounded overflow-hidden w-100">
						<a href="<?= base_url('uploads/galery/' . $g['foto']) ?>" data-lightbox="galeri" data-title="<?= $g['title'] ?>" )>
							<img src="<?= base_url('uploads/galery/' . $g['foto']) ?>" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
						</a>
						<p class="text-center mt-2 mb-0 h7 text-muted"><?= $g['title'] ?></p>
					</div>
				</div>


			<?php endforeach; ?>
		</div> <!-- Tutup row galeri -->

		<!-- Baris pagination terpisah -->
		<div class="row mt-4">
			<div class="col-12 d-flex justify-content-end">
				<?= $pagination ?>
			</div>
		</div>





	</div>



</section>