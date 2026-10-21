<?php
ob_start();
?>

<!-- Welcome Banner -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-6 fw-bold mb-2">Welcome to Scratch & Post Inventory System</h1>
                <p class="lead text-muted mb-0">Manage cat scratching posts, customer orders, staff details, and inventory seamlessly.</p>
            </div>
            <div class="col-md-4 text-md-end d-none d-md-block">
                <i class="bi bi-box-seam text-primary display-1"></i>
            </div>
        </div>
    </div>
</div>

<!-- Quick Statistics Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-primary text-white h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1 small fw-bold text-white-50">Total Products</h6>
                    <h2 class="mb-0 fw-bold">12</h2>
                </div>
                <i class="bi bi-box-seam fs-1 text-white-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-success text-white h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1 small fw-bold text-white-50">Total Orders</h6>
                    <h2 class="mb-0 fw-bold">8</h2>
                </div>
                <i class="bi bi-cart-check fs-1 text-white-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-info text-white h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1 small fw-bold text-white-50">Customers</h6>
                    <h2 class="mb-0 fw-bold">15</h2>
                </div>
                <i class="bi bi-people fs-1 text-white-50"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-warning text-dark h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase mb-1 small fw-bold text-black-50">Staff Members</h6>
                    <h2 class="mb-0 fw-bold">4</h2>
                </div>
                <i class="bi bi-person-badge fs-1 text-black-50"></i>
            </div>
        </div>
    </div>
</div>

<!-- Carousel & Quick Actions Row -->
<div class="row g-4 mb-4">
    <div class="col-lg-8">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title mb-3"><i class="bi bi-stars text-primary me-2"></i>Featured Catalog</h5>
                
                <div id="homeCarousel" class="carousel slide rounded overflow-hidden shadow-sm" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
                    </div>
                    <div class="carousel-inner bg-dark text-white" style="height: 240px;">
                        <div class="carousel-item active h-100 p-5 text-center">
                            <i class="bi bi-tree fs-1 text-warning mb-2 d-block"></i>
                            <h4>Sisal Rope Scratching Towers</h4>
                            <p class="text-white-50">Durable natural sisal posts designed for heavy claw grinding.</p>
                        </div>
                        <div class="carousel-item h-100 p-5 text-center">
                            <i class="bi bi-house-door fs-1 text-info mb-2 d-block"></i>
                            <h4>Cardboard Scratcher Lounges</h4>
                            <p class="text-white-50">Eco-friendly honeycomb cardboard scratchers with lounge beds.</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title mb-3"><i class="bi bi-lightning-charge text-primary me-2"></i>Quick Actions</h5>
                <div class="d-grid gap-2">
                    <a href="products.php" class="btn btn-outline-primary text-start p-3">
                        <i class="bi bi-box-seam me-2"></i>Manage Products
                    </a>
                    <a href="customers.php" class="btn btn-outline-primary text-start p-3">
                        <i class="bi bi-people me-2"></i>Manage Customers
                    </a>
                    <a href="staffs.php" class="btn btn-outline-primary text-start p-3">
                        <i class="bi bi-person-badge me-2"></i>Manage Staffs
                    </a>
                    <a href="orders.php" class="btn btn-outline-primary text-start p-3">
                        <i class="bi bi-cart me-2"></i>Manage Orders
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>