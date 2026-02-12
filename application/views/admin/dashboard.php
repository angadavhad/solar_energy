<main class="content">
  <div class="container-fluid p-4">

    <h1 class="h3 mb-4 fw-bold text-warning">Solar Admin Dashboard</h1>

    <!-- ================= STATS CARDS ================= -->
    <div class="row g-4 mb-4">

      <div class="col-md-3">
        <div class="card dash-card">
          <div class="card-body text-center">
            <h6>Total Reviews</h6>
            <h2 class="fw-bold text-primary">124</h2>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card dash-card">
          <div class="card-body text-center">
            <h6>Positive Reviews</h6>
            <h2 class="fw-bold text-success">96</h2>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card dash-card">
          <div class="card-body text-center">
            <h6>Average Rating</h6>
            <h2 class="fw-bold text-warning">4.5 ⭐</h2>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card dash-card">
          <div class="card-body text-center">
            <h6>Pending Reviews</h6>
            <h2 class="fw-bold text-danger">12</h2>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= REVIEW TABLE ================= -->
    <div class="card dash-card">
      <div class="card-body">

        <h5 class="mb-3">Latest Reviews</h5>

        <div class="table-responsive">
          <table class="table align-middle text-center">
            <thead>
              <tr>
                <th>Name</th>
                <th>Product</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Rahul Patil</td>
                <td>Solar Panel 5kW</td>
                <td>⭐⭐⭐⭐⭐</td>
                <td>Excellent performance!</td>
                <td><span class="badge bg-success">Approved</span></td>
              </tr>
              <tr>
                <td>Priya Sharma</td>
                <td>Solar Water Heater</td>
                <td>⭐⭐⭐⭐</td>
                <td>Very good service.</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
              </tr>
              <tr>
                <td>Amit Joshi</td>
                <td>Solar Pump</td>
                <td>⭐⭐⭐</td>
                <td>Installation was smooth.</td>
                <td><span class="badge bg-success">Approved</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>

  </div>
</main>

<!-- ================= CSS ================= -->
<style>

body{
  background: #f4f7fa;
}

.dash-card{
  border: none;
  border-radius: 18px;
  box-shadow: 0 15px 35px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
}

.dash-card:hover{
  transform: translateY(-6px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.table thead{
  background: linear-gradient(45deg,#ff9800,#ffb74d);
  color:#fff;
}

.table{
  border-radius: 12px;
  overflow: hidden;
}

.badge{
  padding:8px 12px;
  border-radius:20px;
  font-size:12px;
}

h1{
  letter-spacing: 1px;
}

</style>
