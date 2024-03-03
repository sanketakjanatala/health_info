<nav class="back navbar navbar-expand-lg navbar-light bg-light fixed-top mb-4 border-bottom border-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HELTH BABA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">SEEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MEMORY</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ALL SERVICES
                        </a>
                        <ul class="dropdown-menu back" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">SERVICE_1</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">UPLOAD DATA</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">HELP</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ADMIN</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../fruit_data/Uploaddata.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">FRUIT NAME</label>
        <input type="text" class="form-control" id="frname" placeholder="enter fruit name" name="fr_name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="fr_desc" rows="3" name="desc"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">VITAMIN NAME</label>
        <input type="text" class="form-control" id="fr_vit" placeholder="enter vitamin name" name="vitamin">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">UPLOAD IMAGE</label>
        <input class="form-control" type="file" name="image" accept=".jpg, .jpeg, .png">
    </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary" name="save">SAVE NOW</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>
