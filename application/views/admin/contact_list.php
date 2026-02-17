<div class="container mt-4">
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-header bg-warning text-dark fw-bold">
      Contact Messages
    </div>

    <div class="card-body table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-warning">
          <tr>
            <th width="5%">#</th>
            <th width="15%">Name</th>
            <th width="15%">Phone</th>
            <th width="20%">Email</th>
            <th>Message</th>
            <th width="10%">Action</th>
          </tr>
        </thead>

        <tbody>
          <?php if(!empty($contacts)): $i=1; foreach($contacts as $c): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $c->name ?></td>
            <td><?= $c->phone ?></td>
            <td><?= $c->email ?></td>
            <td class="text-start"><?= $c->message ?></td>
            <td>
              <a href="<?= base_url('contact/delete/'.$c->id) ?>"
                 class="btn btn-danger btn-sm"
                 onclick="return confirm('Delete this message?')">
                 Delete
              </a>
            </td>
          </tr>
          <?php endforeach; else: ?>
          <tr>
            <td colspan="6">No Messages Found</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
