  <div class="container">
      <div class="row mt-4">
          <div class="col-md-12 col-sm-12 col-lg-12">
          <a class="btn btn-sm btn-info" href="/product/add_new">Add New</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($product as $row):?>
                    <tr>
                        <td><?= $row['product_name'];?></td>
                        <td><?= $row['product_price'];?></td>
                        <td>
                            <a href="/product/edit/<?= $row['product_id'];?>">Edit</a>
                            <a href="/product/delete/<?= $row['product_id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
          </div>
      </div>
  </div>
