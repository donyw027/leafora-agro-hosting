<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data inquiry
                </h4>
            </div>
            <!-- <div class="col-auto">
                <a href="<?= base_url('m_inquiry/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah inquiry
                    </span>
                </a>
            </div> -->
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable4" style="width: 100%;">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Date</th>

                    <th>nama</th>
                    <th>asal negara</th>
                    <!-- <th>deskripsi</th> -->
                    <th>email</th>
                    <th>telp/WA</th>
                    <th>Pesan</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($inquiry) :
                    foreach ($inquiry as $inquiryi) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $inquiryi['created_at']; ?></td>

                            <td><?= $inquiryi['nama']; ?></td>
                            <td><?= $inquiryi['negara']; ?></td>
                            <td><?= $inquiryi['email']; ?></td>
                            <td><?= $inquiryi['no_wa']; ?></td>


                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-info"
                                    data-toggle="modal"
                                    data-target="#msgModal<?= $inquiryi['id'] ?>">
                                    Lihat Pesan
                                </button>
                            </td>
                            <td>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('m_inquiry/delete/') . $inquiryi['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>

                        <!-- Modal Pesan -->
                        <div class="modal fade" id="msgModal<?= $inquiryi['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="msgLabel<?= $inquiryi['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="msgLabel<?= $inquiryi['id'] ?>">
                                            Pesan dari <?= htmlspecialchars($inquiryi['nama'] ?? $inquiryi['nama']) ?>
                                        </h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <strong>Subjek:</strong><br>
                                            <?= htmlspecialchars($inquiryi['subjek'] ?? $inquiryi['subjek'] ?? '-') ?>
                                        </div>
                                        <div>
                                            <strong>Pesan:</strong><br>
                                            <?= nl2br(htmlspecialchars($inquiryi['pesan'] ?? $inquiryi['pesan'] ?? '-')) ?>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <small class="text-muted mr-auto">
                                            <?= !empty($inquiryi['created_at']) && is_numeric($inquiryi['created_at'])
                                                ? date('d M Y H:i', $inquiryi['created_at'])
                                                : htmlspecialchars($inquiryi['created_at'] ?? '') ?>
                                        </small>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak Ada Inquiry</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>