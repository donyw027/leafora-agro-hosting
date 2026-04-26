<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Master Slider Home</h6>
        <a href="<?= base_url('m_slider/add') ?>" class="btn btn-sm btn-primary">
            <i class="fa fa-plus"></i> Tambah Slider
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th width="140">Image</th>
                        <th>Konten</th>
                        <th width="90">Urutan</th>
                        <th width="90">Status</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($sliders)) : ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data slider.</td>
                        </tr>
                    <?php else : ?>
                        <?php $no = 1; foreach ($sliders as $slider) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <img src="<?= strpos($slider['background_image'], '/') !== false ? base_url($slider['background_image']) : base_url('uploads/slider/' . $slider['background_image']) ?>" alt="slider" class="img-fluid rounded shadow-sm">
                                </td>
                                <td>
                                    <div class="font-weight-bold text-primary mb-1"><?= html_escape($slider['badge_text']); ?></div>
                                    <div class="font-weight-bold mb-1"><?= html_escape($slider['title_text']); ?></div>
                                    <div class="text-muted small mb-2"><?= character_limiter(strip_tags($slider['description_text']), 120); ?></div>
                                    <span class="badge badge-light border"><?= html_escape($slider['small_title']); ?></span>
                                </td>
                                <td><?= (int) $slider['sort_order']; ?></td>
                                <td>
                                    <?php if ((int) $slider['is_active'] === 1) : ?>
                                        <span class="badge badge-success">Aktif</span>
                                    <?php else : ?>
                                        <span class="badge badge-secondary">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('m_slider/edit/' . $slider['id']) ?>" class="btn btn-sm btn-warning mb-1"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url('m_slider/delete/' . $slider['id']) ?>" onclick="return confirm('Yakin ingin menghapus slider ini?')" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
