  <div class="container">
      <div class="row mt-4">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <div class="card">
                  <div class="card-header">
                  <a class="btn btn-sm btn-warning" href="/berita/add_new">+ Add New</a>
                  </div>
                  <div class="card-body">
                    
                    <table class="table" width="100%">
                        <thead>
                            <tr>
                                <th width="10%">Title</th>
                                <th width="40%">Description</th>
                                <th width="10%">Image</th>
                                <th width="10%">Author</th>
                                <th width="10%">Created At</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($berita as $row):?>
                            <tr>
                                <td><?= $row['title'];?></td>
                                <td><?= $row['description'];?></td>
                                <td>
                                <img src="<?=base_url('uploads/image/'.$row['image']);?>" width="100">
                                </td>
                                <td><?= $row['author'];?></td>
                                <td><?= $row['created_at'];?></td>
                                <td>
                                    <a href="/berita/edit/<?= $row['id'];?>">Edit</a>
                                    <a href="/berita/delete/<?= $row['id'];?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                  </div>
              </div> 
          </div>
      </div>  
  </div>