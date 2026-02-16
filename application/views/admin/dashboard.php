<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.custom-card {
    padding: 45px 20px;
    border-radius: 22px;
    text-align: center;
    color: #fff;
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.custom-card::before {
    content: "";
    position: absolute;
    top: -40%;
    left: -40%;
    width: 180%;
    height: 180%;
    background: rgba(255,255,255,0.07);
    transform: rotate(25deg);
}

.custom-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.25);
}

.custom-card p {
    font-size: 14px;
    letter-spacing: 1px;
    opacity: 0.9;
    margin-bottom: 12px;
}

.custom-card h2 {
    font-size: 36px;
    font-weight: 700;
    margin: 0;
}

.card-icon {
    font-size: 28px;
    margin-bottom: 10px;
}

/* Gradients */
.primary-card { background: linear-gradient(135deg, #4e73df, #224abe); }
.success-card { background: linear-gradient(135deg, #1cc88a, #13855c); }
.warning-card { background: linear-gradient(135deg, #f6c23e, #dda20a); }
.info-card    { background: linear-gradient(135deg, #36b9cc, #258391); }
.danger-card  { background: linear-gradient(135deg, #e74a3b, #be2617); }

</style>
<div class="row g-4 mt-3">

<div class="row g-4 mt-3">

    <div class="col-lg-3 col-md-6 px-4">
        <div class="custom-card primary-card" onclick="window.location='<?= site_url('admin/quotes') ?>'">
            <div class="card-icon">📊</div>
            <p>Total Quotes</p>
            <h2 class="counter" data-target="<?= $total_quotes ?>">0</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 px-4">
        <div class="custom-card success-card">
            <div class="card-icon">📅</div>
            <p>Today Quotes</p>
            <h2 class="counter" data-target="<?= $today_quotes ?>">0</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 px-4">
        <div class="custom-card warning-card">
            <div class="card-icon">🆕</div>
            <p>New Quotes</p>
            <h2 class="counter" data-target="<?= $new_quotes ?>">0</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 px-4">
        <div class="custom-card info-card">
            <div class="card-icon">✅</div>
            <p>Approved</p>
            <h2 class="counter" data-target="<?= $approved_quotes ?>">0</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 px-4">
        <div class="custom-card danger-card">
            <div class="card-icon">❌</div>
            <p>Rejected</p>
            <h2 class="counter" data-target="<?= $rejected_quotes ?>">0</h2>
        </div>
    </div>

</div>
<div class="card shadow-sm mt-4 border-0">
    <div class="card-body">
        <h5 class="fw-bold mb-3">Monthly Quote Activity</h5>
        <div style="height:320px;">
            <canvas id="monthlyChart"></canvas>
        </div>
    </div>
</div>

<script>
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 60;

        if(count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});





const ctx = document.getElementById('monthlyChart').getContext('2d');

const months = <?= $months ?>;
const totals = <?= $totals ?>;

new Chart(ctx, {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            label: "Monthly Quotes",
            data: totals,
            borderColor: '#007bff',
            backgroundColor: 'rgba(0,123,255,0.2)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});
</script>



