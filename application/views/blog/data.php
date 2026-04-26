<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data blog
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('m_blog/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah blog
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable4" style="width: 100%;">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Date</th>

                    <th>Judul Blog</th>
                    <!-- <th>deskripsi</th> -->
                    <th>Status</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($blog) :
                    foreach ($blog as $blogi) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <!-- <td>
                                <img src="<?= base_url('uploads/blog/' . $blogi['foto']) ?>" alt="Foto" width="80" class="img-thumbnail">
                            </td> -->
                            <td><?= $blogi['created_at']; ?></td>
                            <td><?= $blogi['title']; ?></td>
                            <td><?= $blogi['status']; ?></td>
                            <td>

                                <a href="<?= base_url('m_blog/edit/') . $blogi['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('m_blog/delete/') . $blogi['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan blog</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>