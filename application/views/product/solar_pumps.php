<style>
    .custom-box {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .custom-header {
        background: #ff7a00;
        color: white;
        padding: 15px;
        border-radius: 8px 8px 0 0;
        text-align: center;
        font-weight: bold;
        font-size: 20px;
    }

    .btn-orange {
        background: #ff7a00;
        color: white;
        border: none;
        padding: 8px 25px;
    }

    .btn-orange:hover {
        background: #e66a00;
        color: white;
    }

    .table thead {
        background: #ff7a00;
        color: white;
    }

    .table-box {
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }
</style>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">

            <!-- FORM SECTION -->
            <div class="custom-header">
                Solar Water Pump
            </div>

            <div class="custom-box">

                <form action="<?= base_url('product/save_solar_water_pump') ?>" 
                      method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="fw-bold">Enter Pump Title</label>
                        <input type="text" name="pump_title" 
                               class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Enter Description</label>
                        <textarea name="pump_description"
                                  rows="4"
                                  class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Applications</label><br>
                        <?php
                        $apps = ['Agriculture','Farms','Gardens','Households','Commercial'];
                        foreach($apps as $app): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="applications[]"
                                       value="<?= $app ?>">
                                <label class="form-check-label"><?= $app ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Upload Image</label>
                        <input type="file" name="pump_image" accept=".jpg,.jpeg,.png"
                               class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-orange px-4">
                            Save
                        </button>
                    </div>

                </form>
            </div>

            <!-- TABLE SECTION -->
            <div class="table-box mt-4">

                <h5 class="mb-3 text-center fw-bold">
                    Solar Water Pump List
                </h5>

                <table class="table table-bordered table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Applications</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($pumps)): $i=1; foreach($pumps as $p): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $p->pump_title ?></td>
                            <td><?= $p->pump_description ?></td>
                            <td>
                                <?php
                                  $apps = explode(',', $p->applications);
                                  foreach($apps as $a){
                                      echo '<span class="badge bg-secondary me-1">'.$a.'</span>';
                                  }
                                ?>
                            </td>
                            <td>
                                <img src="<?= base_url('uploads/'.$p->pump_image) ?>" 
                                     width="60" 
                                     class="rounded shadow-sm">
                            </td>
                            <td>
                                <a href="#" 
                                   class="btn btn-sm btn-danger">
                                   Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="5" class="text-danger">
                                No Pumps Found
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
