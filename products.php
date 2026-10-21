<?php
ob_start();
?>

<!-- Header Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your cat scratching post products</p>
    </div>
</div>

<!-- Product Form Card -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a product</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
        
        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                
                <!-- Row 1 -->
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" required>
                </div>

                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" required>
                </div>

                <div class="col-md-3">
                    <label for="price" class="form-label">Price (RM) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" required min="0" step="0.01">
                </div>

                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Catit">Catit</option>
                        <option value="Frisco">Frisco</option>
                        <option value="Petfusion">Petfusion</option>
                        <option value="Armarkat">Armarkat</option>
                        <option value="Generic">Generic</option>
                    </select>
                </div>

                <!-- Row 2 -->
                <div class="col-md-3">
                    <label for="material" class="form-label">Material <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_material" id="material" class="form-select" required>
                        <option value="">Select Material</option>
                        <option value="Sisal Rope">Sisal Rope</option>
                        <option value="Cardboard">Cardboard</option>
                        <option value="Carpet">Carpet</option>
                        <option value="Jute">Jute</option>
                        <option value="Wood">Wood</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="height" class="form-label">Height <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_height" id="height" class="form-select" required>
                        <option value="">Select Height</option>
                        <option value="Small (< 50cm)">Small (&lt; 50cm)</option>
                        <option value="Medium (50-80cm)">Medium (50-80cm)</option>
                        <option value="Tall (81-120cm)">Tall (81-120cm)</option>
                        <option value="Extra Tall (> 120cm)">Extra Tall (&gt; 120cm)</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" required min="0">
                </div>

                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename">
                </div>

            </div>
            
            <hr class="mt-4 mb-3">
            
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>