<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data quotation
                </h4>
            </div>
            <!-- <div class="col-auto">
                <a href="<?= base_url('m_quotation/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah quotation
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
                    <th>produk</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($quotation) :
                    foreach ($quotation as $quotationi) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $quotationi['created_at']; ?></td>

                            <td><?= $quotationi['nama']; ?></td>
                            <td><?= $quotationi['negara']; ?></td>
                            <td><?= $quotationi['email']; ?></td>
                            <td><?= $quotationi['no_wa']; ?></td>
                            <td><?= $quotationi['produk']; ?></td>



                            <td>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('m_quotation/delete/') . $quotationi['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>

                        <!-- Modal Pesan -->




                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak Ada Request</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>