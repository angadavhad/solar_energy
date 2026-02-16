<div class="container mt-4">
    <h3>Quote Requests</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Service</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php foreach($quotes as $q): ?>
        <tr>
            <td><?= $q->id ?></td>
            <td><?= $q->name ?></td>
            <td><?= $q->service_type ?></td>
            <td>
                <?php if($q->status == 'New'): ?>
                    <span class="badge bg-warning">New</span>
                <?php elseif($q->status == 'Approved'): ?>
                    <span class="badge bg-success">Approved</span>
                <?php else: ?>
                    <span class="badge bg-danger">Rejected</span>
                <?php endif; ?>
            </td>
            <td><?= date('d-m-Y', strtotime($q->created_at)) ?></td>
            <td>
                <?php if($q->status == 'New'): ?>
                    <a href="<?= site_url('admin/approve_quote/'.$q->id) ?>" class="btn btn-success btn-sm">Approve</a>
                    <a href="<?= site_url('admin/reject_quote/'.$q->id) ?>" class="btn btn-danger btn-sm">Reject</a>
                <?php endif; ?>

                <a href="<?= site_url('admin/delete_quote/'.$q->id) ?>" 
                   onclick="return confirm('Delete?')" 
                   class="btn btn-dark btn-sm">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
