 <nav class=" navbar navbar-expand-lg navbar-dark border-bottom">
        <button class="btn btn-outline-warning" id="menu-toggle">Bật/tắt menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Chào <?= $_SESSION['username'] ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="logout" href="Login/logout">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>