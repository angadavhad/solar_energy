<style>
    .cms-wrapper {
        max-width: 600px;
        margin: auto;
    }

    .cms-header {
        background: #ff7a00;
        color: white;
        padding: 15px;
        border-radius: 8px 8px 0 0;
        text-align: center;
        font-weight: bold;
        font-size: 20px;
    }

    .cms-box {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 0 0 8px 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .btn-orange {
        background: #ff7a00;
        border: none;
        color: white;
    }

    .btn-orange:hover {
        background: #e66a00;
        color: white;
    }

    .table thead {
        background: #ff7a00;
        color: white;
    }

    .table {
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    }
</style>


<div class="container mt-4">

    <!-- FORM WRAPPER -->
    <div class="cms-wrapper">

        <div class="cms-header">
            On Grid Solar CMS
        </div>

        <div class="cms-box">

            <form action="<?= base_url('product/save_on_grid_solar') ?>" 
                  method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label>Main Image</label>
                    <input type="file" name="main_image" class="form-control" required>
                </div>

                <div class="text-center">
                    <button class="btn btn-orange px-4">Save</button>
                </div>

            </form>

        </div>
    </div>

    <!-- TABLE FULL WIDTH -->
    <div class="mt-5">
        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>SrNo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Hero</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php if(!empty($solar)): $i=1; foreach($solar as $s): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $s->title ?></td>
                    <td><?= $s->description ?></td>
                    <td>
                        <img src="<?= base_url('uploads/'.$s->image1) ?>" 
                             width="80" 
                             class="rounded">
                    </td>
                    <td>
                        <a href="<?= base_url('product/edit_on_grid_solar/'.$s->id) ?>"
                           class="btn btn-sm btn-orange">
                           &#9998;
                        </a>

                        <a href="<?= base_url('product/delete_on_grid_solar/'.$s->id) ?>"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Delete this record?')">
                           &#10005;
                        </a>
                    </td>
                </tr>
            <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>

</div>
