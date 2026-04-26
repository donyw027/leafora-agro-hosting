    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm mb-4 border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Form <?= $title; ?>
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('M_blog') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                                <span class="icon">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                <span class="text">
                                    Kembali
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_open_multipart(); ?>


                    <div class="row form-group">
                        <label class="col-md-2 text-md-right" for="title">Title</label>
                        <div class="col-md-10">
                            <input value="<?= set_value('title'); ?>" type="text" id="title" name="title" class="form-control" placeholder="Masukan title ...">
                            <?= form_error('title', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>

                    <!-- <div class="row form-group">
                        <label class="col-md-2 text-md-right" for="slug">Slug</label>
                        <div class="col-md-10">
                            <input value="<?= set_value('slug'); ?>" type="text" id="slug" name="slug" class="form-control" placeholder="Masukan slug ...">
                            <?= form_error('slug', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div> -->

                    <div class="row form-group">
                        <label class="col-md-2 text-md-right" for="content">content</label>
                        <div class="col-md-10">
                            <textarea name="content" id="editor" class="form-control"><?= set_value('content'); ?></textarea>


                            <?= form_error('content', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-2 text-md-right" for="foto">foto</label>
                        <div class="col-md-4">
                            <input type="file" id="foto" name="foto" class="form-control">
                            <?= form_error('foto', '<span class="text-danger small">', '</span>'); ?>

                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-2 text-md-right" for="status">status</label>
                        <div class="col-md-10">

                            <select name="status" id="status" class="form-control">
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                            <?= form_error('status', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>






                    <br>
                    <div class="row form-group justify-content-end">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary btn-icon-split">
                                <span class="icon"><i class="fa fa-save"></i></span>
                                <span class="text">Simpan</span>
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Reset
                            </button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>