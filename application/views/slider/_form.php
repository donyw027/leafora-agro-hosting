<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
                <a href="<?= base_url('m_slider') ?>" class="btn btn-sm btn-secondary">Kembali</a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Badge Text</label>
                    <input type="text" name="badge_text" class="form-control" value="<?= set_value('badge_text', $slider['badge_text'] ?? '') ?>" required>
                    <?= form_error('badge_text', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class="form-group">
                    <label>Judul Slider</label>
                    <textarea name="title_text" rows="3" class="form-control" required><?= set_value('title_text', $slider['title_text'] ?? '') ?></textarea>
                    <?= form_error('title_text', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description_text" rows="4" class="form-control" required><?= set_value('description_text', $slider['description_text'] ?? '') ?></textarea>
                    <?= form_error('description_text', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Judul Card Kanan</label>
                        <input type="text" name="small_title" class="form-control" value="<?= set_value('small_title', $slider['small_title'] ?? '') ?>" required>
                        <?= form_error('small_title', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Urutan Tampil</label>
                        <input type="number" name="sort_order" class="form-control" value="<?= set_value('sort_order', $slider['sort_order'] ?? 1) ?>" required>
                        <?= form_error('sort_order', '<small class="text-danger">', '</small>') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Deskripsi Card Kanan</label>
                    <textarea name="small_description" rows="3" class="form-control" required><?= set_value('small_description', $slider['small_description'] ?? '') ?></textarea>
                    <?= form_error('small_description', '<small class="text-danger">', '</small>') ?>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Primary Button URL</label>
                        <input type="text" name="button_primary_url" class="form-control" value="<?= set_value('button_primary_url', $slider['button_primary_url'] ?? 'produk') ?>" required>
                        <small class="text-muted">Bisa isi: produk, layanan, contact, atau URL lengkap.</small>
                        <?= form_error('button_primary_url', '<small class="text-danger d-block">', '</small>') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Secondary Button URL</label>
                        <input type="text" name="button_secondary_url" class="form-control" value="<?= set_value('button_secondary_url', $slider['button_secondary_url'] ?? 'contact') ?>" required>
                        <?= form_error('button_secondary_url', '<small class="text-danger d-block">', '</small>') ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Status</label>
                        <select name="is_active" class="form-control" required>
                            <option value="1" <?= set_select('is_active', '1', (($slider['is_active'] ?? 1) == 1)) ?>>Aktif</option>
                            <option value="0" <?= set_select('is_active', '0', (($slider['is_active'] ?? 1) == 0)) ?>>Nonaktif</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Background Image <?= empty($slider) ? '<span class="text-danger">*</span>' : '' ?></label>
                        <input type="file" name="background_image" class="form-control-file" <?= empty($slider) ? 'required' : '' ?> accept=".jpg,.jpeg,.png,.webp">
                        <small class="text-muted">Rekomendasi landscape, maksimal 4MB.</small>
                    </div>
                </div>

                <?php if (!empty($slider['background_image'])) : ?>
                    <div class="mb-3">
                        <label>Background saat ini</label><br>
                        <img src="<?= strpos($slider['background_image'], '/') !== false ? base_url($slider['background_image']) : base_url('uploads/slider/' . $slider['background_image']) ?>" alt="slider" class="img-fluid rounded shadow" style="max-width: 360px;">
                    </div>
                <?php endif; ?>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
