<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jabar CorpU Talent</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-teal: #00897b;
            --hover-teal: #00695c;
            --bg-light: #f0fdfa;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: white;
            color: #2d3436;
        }

        /* Sisi Kiri: Branding */
        .branding-side {
            background: linear-gradient(135deg, #f0fdf9 0%, #ccfbf1 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5rem;
            position: relative;
        }

        .branding-side::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url("https://www.transparenttextures.com/patterns/cubes.png");
            opacity: 0.3;
        }

        .branding-content { position: relative; z-index: 1; }
        .branding-title { color: var(--primary-teal); font-weight: 800; font-size: 3.5rem; letter-spacing: -1px; }
        .branding-subtitle { font-weight: 600; font-size: 1.5rem; margin-bottom: 1.5rem; color: #374151; }
        .branding-text { color: #4b5563; line-height: 1.8; font-size: 1.1rem; }

        /* Sisi Kanan: Login Area */
        .login-side {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-box { width: 100%; max-width: 480px; }

        /* Kategori Card Modern */
        .category-item {
            display: flex;
            align-items: center;
            padding: 1.25rem;
            margin-bottom: 1rem;
            background: #ffffff;
            border: 2px solid #f3f4f6;
            border-radius: 16px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: left;
            width: 100%;
        }

        .category-item:hover {
            border-color: var(--primary-teal);
            transform: translateX(8px);
            box-shadow: 0 10px 15px -3px rgba(0, 137, 123, 0.1);
        }

        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1.25rem;
            flex-shrink: 0;
            transition: 0.3s;
        }

        /* Warna Kategori */
        .cat-pemprov .icon-box { background: #e0f2fe; color: #0369a1; }
        .cat-instansi .icon-box { background: #dcfce7; color: #15803d; }
        .cat-kontrak .icon-box { background: #fef3c7; color: #b45309; }
        .cat-umum .icon-box { background: #f3e8ff; color: #7e22ce; }

        .category-text h6 { margin: 0; font-weight: 700; color: #111827; }
        .category-text p { margin: 0; font-size: 0.85rem; color: #6b7280; }

        /* Form Styling */
        .custom-input-group { position: relative; margin-bottom: 1.5rem; }
        .custom-input-group label {
            position: absolute; top: -10px; left: 12px;
            background: white; padding: 0 8px;
            font-size: 0.75rem; font-weight: 700;
            color: var(--primary-teal); z-index: 2;
        }
        .custom-input {
            border: 2px solid #e5e7eb; border-radius: 12px;
            padding: 14px 16px; width: 100%; outline: none;
            transition: 0.3s; background: #f9fafb;
        }
        .custom-input:focus { border-color: var(--primary-teal); background: white; box-shadow: 0 0 0 4px rgba(0, 137, 123, 0.1); }

        .btn-main {
            background: var(--primary-teal); color: white;
            border: none; padding: 14px; border-radius: 12px;
            font-weight: 700; width: 100%; transition: 0.3s;
        }
        .btn-main:hover { background: var(--hover-teal); transform: translateY(-2px); }

        .btn-outline-custom {
            border: 2px solid #e5e7eb; color: #374151;
            padding: 12px; border-radius: 12px; width: 100%;
            font-weight: 600; display: flex; align-items: center;
            justify-content: center; gap: 10px; transition: 0.2s;
            background: white; margin-bottom: 0.75rem;
        }
        .btn-outline-custom:hover { background: #f9fafb; border-color: #d1d5db; }

        .back-link {
            color: #6b7280; text-decoration: none; font-weight: 600;
            display: inline-flex; align-items: center; gap: 8px;
            margin-top: 1.5rem; transition: 0.2s;
        }
        .back-link:hover { color: var(--primary-teal); }

        /* Animations */
        .fade-slide-in { animation: fadeSlide 0.4s ease-out; }
        @keyframes fadeSlide {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hidden { display: none; }

        @media (max-width: 992px) {
            .branding-side { display: none; }
            .login-box { max-width: 100%; }
        }
    </style>
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sisi Kiri: Branding -->
            <div class="col-lg-6 branding-side">
                <div class="branding-content">
                    <img src="https://via.placeholder.com/180x60?text=Logo+JCT" alt="Logo" class="mb-5">
                    <h1 class="branding-title">Jabar CorpU Talent</h1>
                    <h2 class="branding-subtitle">Sistem Pembelajaran Aparatur Jabar Diajar</h2>
                    <p class="branding-text">
                        Akses ribuan materi pembelajaran digital, pelatihan terstruktur, dan sertifikasi dalam satu ekosistem Super App. Dirancang untuk membangun ASN Jawa Barat yang unggul dan kompetitif.
                    </p>
                </div>
            </div>

            <!-- Sisi Kanan: Login Area -->
            <div class="col-lg-6 login-side">
                <div class="login-box">
                    
                    <!-- View 1: Category Selection -->
                    <div id="view-categories" class="fade-slide-in text-center">
                        <div class="mb-4">
                            <h3 class="fw-bold">Selamat Datang</h3>
                            <p class="text-muted">Pilih metode masuk sesuai kategori akun Anda</p>
                        </div>

                        <div class="category-item cat-pemprov" onclick="showForm('ASN Pemprov Jabar', 'bi-building')">
                            <div class="icon-box"><i class="bi bi-building"></i></div>
                            <div class="category-text">
                                <h6>ASN Pemprov Jabar</h6>
                                <p>Gunakan akun SSO TRK / SMART Jabar</p>
                            </div>
                        </div>

                        <div class="category-item cat-instansi" onclick="showForm('ASN Instansi Lainnya', 'bi-globe-asia-australia')">
                            <div class="icon-box"><i class="bi bi-globe-asia-australia"></i></div>
                            <div class="category-text">
                                <h6>ASN Instansi Lainnya</h6>
                                <p>Pegawai Kementerian atau Pemda di luar Jabar</p>
                            </div>
                        </div>

                        <div class="category-item cat-kontrak" onclick="showForm('Tenaga Kontrak', 'bi-person-badge')">
                            <div class="icon-box"><i class="bi bi-person-badge"></i></div>
                            <div class="category-text">
                                <h6>Tenaga Kontrak</h6>
                                <p>Pegawai Non-ASN di lingkungan Pemprov Jabar</p>
                            </div>
                        </div>

                        <div class="category-item cat-umum" onclick="showForm('Masyarakat Umum', 'bi-people')">
                            <div class="icon-box"><i class="bi bi-people"></i></div>
                            <div class="category-text">
                                <h6>Masyarakat Umum</h6>
                                <p>Masyarakat sipil atau pembelajar mandiri</p>
                            </div>
                        </div>
                    </div>

                    <!-- View 2: Form Login -->
                    <div id="view-form" class="hidden fade-slide-in">
                        <div class="text-center mb-4">
                            <div id="form-icon" class="d-inline-flex align-items-center justify-content-center bg-light text-primary rounded-circle mb-3" style="width: 64px; height: 64px; font-size: 2rem;">
                                <i class="bi bi-building"></i>
                            </div>
                            <h4 class="fw-bold mb-1">Masuk Sebagai</h4>
                            <p class="text-teal fw-bold" id="selected-category"></p>
                        </div>

                        <form>
                            <div class="custom-input-group">
                                <label>Username / NIP / Email</label>
                                <input type="text" class="custom-input" placeholder="Contoh: 198809..." required>
                            </div>

                            <div class="custom-input-group">
                                <label>Kata Sandi</label>
                                <div class="position-relative">
                                    <input type="password" id="password" class="custom-input" placeholder="••••••••" required>
                                    <i class="bi bi-eye position-absolute top-50 end-0 translate-middle-y me-3 text-muted" style="cursor: pointer;"></i>
                                </div>
                            </div>

                            <button type="submit" class="btn-main shadow-sm mb-4">Masuk Ke Aplikasi</button>

                            <div class="d-flex align-items-center mb-4">
                                <hr class="flex-grow-1 text-muted opacity-25">
                                <span class="mx-3 text-muted small fw-bold">ATAU MASUK DENGAN</span>
                                <hr class="flex-grow-1 text-muted opacity-25">
                            </div>

                            <button type="button" class="btn-outline-custom">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_Icons-09.svg" width="18"> 
                                Google Account
                            </button>
                            <button type="button" class="btn-outline-custom">
                                <i class="bi bi-shield-check text-success"></i> SMART Jabar
                            </button>

                            <div class="text-center">
                                <a href="javascript:void(0)" onclick="showCategories()" class="back-link">
                                    <i class="bi bi-arrow-left"></i> Kembali ke pilihan kategori
                                </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function showForm(category, iconClass) {
            document.getElementById('selected-category').innerText = category;
            
            // Update ikon di form
            const formIconWrapper = document.getElementById('form-icon');
            formIconWrapper.innerHTML = `<i class="bi ${iconClass}"></i>`;
            
            // Warna dinamis ikon form (opsional)
            if(category.includes('Pemprov')) formIconWrapper.className = "d-inline-flex align-items-center justify-content-center rounded-circle mb-3 bg-primary-subtle text-primary";
            if(category.includes('Lainnya')) formIconWrapper.className = "d-inline-flex align-items-center justify-content-center rounded-circle mb-3 bg-success-subtle text-success";
            
            document.getElementById('view-categories').classList.add('hidden');
            document.getElementById('view-form').classList.remove('hidden');
        }

        function showCategories() {
            document.getElementById('view-form').classList.add('hidden');
            document.getElementById('view-categories').classList.remove('hidden');
        }
    </script>
</body>
</html>