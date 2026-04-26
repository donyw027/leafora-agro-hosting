<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data produk
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('m_produk/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah produk
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
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <!-- <th>Detail Produk</th> -->


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($produk) :
                    foreach ($produk as $produki) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <img src="<?= base_url('uploads/produk/' . $produki['foto']) ?>" alt="Foto" width="80" class="img-thumbnail">
                            </td>
                            <td><?= $produki['nama_produk']; ?></td>
                            <!-- <td><?= $produki['detail']; ?></td> -->
                            <td>

                                <a href="<?= base_url('m_produk/edit/') . $produki['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('m_produk/delete/') . $produki['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan produk</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>