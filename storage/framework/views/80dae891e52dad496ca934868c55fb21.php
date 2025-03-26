<?php $__env->startSection('content'); ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-success fw-bold" href="/">Growcery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="/logout">
                                <?php echo csrf_field(); ?>
                                <button class="nav-link btn btn-link" type="submit">Logout</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Background Image -->
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 90vh; background: url('<?php echo e(asset('images/farmers-market.jpg')); ?>') no-repeat center center / cover;">
        <div class="text-center bg-white p-5 rounded-4 shadow-lg" style="max-width: 600px; backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.8);">
            <h1 class="display-4 fw-bold text-success">Welcome to Growcery</h1>
            <p class="lead text-muted">Connecting local farmers directly with consumers. Fresh, organic, and sustainable produce at your fingertips.</p>
            <?php if(auth()->guard()->guest()): ?>
                <a href="/register" class="btn btn-lg btn-success mt-3">Get Started</a>
            <?php else: ?>
                <a href="/products" class="btn btn-lg btn-primary mt-3">Browse Products</a>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\grocery\growcery\resources\views/welcome.blade.php ENDPATH**/ ?>