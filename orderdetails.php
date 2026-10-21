<?php
ob_start();
?>

<!-- Part 1: Header & Order Summary Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Order Details</h2>
        <p class="text-muted mb-0">Order #O001 for Alice Johnson</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-4"><strong>Order Date</strong><br>2026-10-03</div>
            <div class="col-md-4"><strong>Staff</strong><br>Jane Smith</div>
            <div class="col-md-4"><strong>Customer</strong><br>Alice Johnson</div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>