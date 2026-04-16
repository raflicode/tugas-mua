<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Infinite Virtual Real Estate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        /* Konsistensi warna dengan halaman login */
        .bg-black-custom { background-color: #0c0d0f; }
        .form-control:focus { box-shadow: none; border-color: #28a745; } /* Hijau untuk register */
        .input-group-text { border-right: none; }
        .form-control { border-left: none; }
    </style>
</head>
<body class="bg-black text-white">

<div class="container-fluid p-0">
    <div class="row g-0 vh-100">
        
        <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center position-relative" 
             style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/foto_mua.jpeg'); background-size: cover; background-position: center;">
            
            <div class="text-start px-5" style="max-width: 500px;">
                <p class="h3 fw-light lh-base mb-4">Join the future of real estate. Create your account to start your journey.</p>
                <a href="#" class="text-white small text-decoration-none border-bottom border-secondary pb-1 opacity-75">COMMUNITY GUIDELINES</a>
            </div>
        </div>

        <div class="col-lg-5 bg-black-custom d-flex flex-column justify-content-center align-items-center p-5 position-relative">
            
            <div class="position-absolute top-0 end-0 m-4 opacity-50">
                <i class="bi bi-grid-3x3-gap-fill fs-3"></i>
            </div>

            <div style="max-width: 350px; width: 100%;">
                <h1 class="display-5 mb-5 fw-normal">Sign Up</h1>
                
                <form action="../actions/do_register.php" method="POST">
                    
                    <div class="mb-4">
                        <label class="text-secondary small mb-2">User Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-black border-secondary text-secondary">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" name="username" class="form-control bg-black border-secondary text-white p-3" placeholder="Create Username" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="text-secondary small mb-2">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-black border-secondary text-secondary">
                                <i class="bi bi-shield-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control bg-black border-secondary text-white p-3" placeholder="Create Password" required>
                        </div>
                    </div>

                    <div class="mb-5 mt-2">
                        <div class="form-check">
                            <input class="form-check-input bg-black border-secondary" type="checkbox" id="terms" required>
                            <label class="form-check-label text-secondary" style="font-size: 11px;" for="terms">
                                I AGREE TO THE TERMS AND PRIVACY POLICY
                            </label>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg p-3 fw-bold" style="border: none; border-radius: 8px;">CREATE ACCOUNT</button>
                    </div>
                </form>

                <div class="mt-5 text-secondary">
                    <small>Already have an account? <a href="login.php" class="text-white text-decoration-none border-bottom">Sign in</a></small>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>