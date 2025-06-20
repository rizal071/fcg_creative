
<style>
    .navbar-nav .nav-link {
        position: relative;
        color: #f8f9fa;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #ffc107;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        display: block;
        margin-top: 5px;
        right: 0;
        background: #55aaff;
        transition: width 0.3s ease;
        top: 100%;
        left: 0;
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%;
        left: 0;
        background: #55aaff;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow"
    style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../assets/images/logo/logo_fcg_it2.png" alt="Logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="#hero">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="#visi-misi">Visi & Misi</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="#service">Layanan kami</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="#testimoni">Testimoni</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="#projects">Project Kami</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#demo">Demo Product</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
