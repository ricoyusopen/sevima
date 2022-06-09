  <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card ">
                    <div class="card-header ">
                    POSTING <p><?=$date?></p> <a href="/berita">Back</a>
                    </div>
                    <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <form method="post" action="<?= base_url(); ?>/berita/save" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-sm" id="title" name="title" value="<?= $berita->title;?>">
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Description</label>
                                <textarea class="form-control form-control-sm" id="description" name="description" rows="3"><?=  $berita->description;?>"</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="berkas" class="form-label">Image</label>
                                <input type="file" class="form-control form-control-sm" id="image" name="image">
                            </div>                            
                            <div class="mb-3">
                                <input type="submit" class="btn btn-warning" value="Submit" />
                                <a href="/berita" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
  </div>

