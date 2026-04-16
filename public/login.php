<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Infinite Virtual Real Estate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        /* Sedikit tambahan style agar benar-benar mirip gambar */
        .bg-black-custom { background-color: #0c0d0f; }
        .form-control:focus { box-shadow: none; border-color: #3b4cff; }
        .input-group-text { border-right: none; }
        .form-control { border-left: none; }
    </style>
</head>
<body class="bg-black text-white">

<div class="container-fluid p-0">
    <div class="row g-0 vh-100">
        
        <div class="col-lg-5 bg-black-custom d-flex flex-column justify-content-center align-items-center p-5 position-relative">
            
            <div class="position-absolute top-0 start-0 m-4 opacity-50">
                <i class="bi bi-grid-3x3-gap-fill fs-3"></i>
            </div>

            <div style="max-width: 350px; width: 100%;">
                <h1 class="display-5 mb-5 fw-normal">Sign In</h1>
                
                <form action="../actions/do_login.php" method="POST">
                    
                    <div class="mb-4">
                        <label class="text-secondary small mb-2">User Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-black border-secondary text-secondary">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="text" name="username" class="form-control bg-black border-secondary text-white p-3" placeholder="Enter User Name" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="text-secondary small mb-2">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-black border-secondary text-secondary">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control bg-black border-secondary text-white p-3" placeholder="Enter Password" required>
                        </div>
                    </div>

                    <a href="#" class="text-secondary text-decoration-none small d-block mb-5 mt-2" style="letter-spacing: 1px; font-size: 11px;">FORGOT PASSWORD?</a>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg p-3 fw-bold" style="background-color: #3b4cff; border: none; border-radius: 8px;">SIGN IN</button>
                    </div>
                </form>

                <div class="mt-5 text-secondary">
                    <small>Don't have an account? <a href="register.php" class="text-white text-decoration-none">Sign up</a></small>
                </div>
            </div>
        </div>

        <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center position-relative" 
             style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/foto_mua.jpeg'); background-size: cover; background-position: center;">
            
            <div class="text-start px-5" style="max-width: 500px;">
                <p class="h3 fw-light lh-base mb-4">A new way to experience real estate in the infinite virtual space.</p>
                <a href="#" class="text-white small text-decoration-none border-bottom border-secondary pb-1 opacity-75">LEARN MORE</a>
            </div>

            <div class="position-absolute bottom-0 end-0 m-5 d-flex align-items-center opacity-50">
                <div style="width: 60px; height: 1px; background-color: white;" class="me-3"></div>
                <i class="bi bi-chevron-right fs-4 text-white"></i>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>