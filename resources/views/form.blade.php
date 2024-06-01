<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="assets/style/global.css" />
    <link rel="stylesheet" href="assets/style/form.css" />
</head>

<body>
    <div class="page-orange">
        <header class="d-flex justify-content-center align-items-center navbar-blue">
            <h2 class="text-center text-white">MajorFinder</h2>
        </header>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column content-hero">
                <div class="card p-4 pt-5 p-relative" style="z-index: 2">
                    <h3 class="text-center mb-5">Mohon Isi Data Diri Anda</h3>
                    <form class="mx-auto needs-validation" style="width: 100%; max-width: 600px" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" id="name" class="form-control" placeholder="Nama lengkap Anda"
                                required />
                            <div class="invalid-feedback">Mohon isi nama lengkap.</div>
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label">Asal Sekolah</label>
                            <input type="text" id="school" class="form-control" placeholder="Asal sekolah Anda"
                                required />
                            <div class="invalid-feedback">Mohon isi asal sekolah.</div>
                        </div>
                        <div class="mb-5">
                            <label for="class" class="form-label">Kelas</label>
                            <select id="class" class="form-select" required aria-placeholder="Pilih Kelas">
                                <option value="" disabled selected>Pilih Kelas</option>
                                <option>SMP 1</option>
                                <option>SMP 2</option>
                                <option>SMP 3</option>
                                <option>SMA 1</option>
                                <option>SMA 2</option>
                                <option>SMA 3</option>
                            </select>
                            <div class="invalid-feedback">Mohon pilih salah satu kelas yang tersedia.</div>
                        </div>
                        <div class="container d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-5">
                                Selanjutnya
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="/assets/image/Friends celebrating the New Year.png" alt="hero" class="hero-img" />
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script>
        const forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    </script>
</body>

</html>
