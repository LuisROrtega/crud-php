<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">CRUD PHP, PDO, AJAX & DATATABLES.JS</h1>

        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#user-modal" id="create-button">
                        <i class="fa-solid fa-check"></i>Create
                    </button>
                </div>
            </div>
        </div>
    </div>

    <main class="table-responsive">
        <table id="user" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Date of creation</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
        </table>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="user-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form" enctype="multipart/form-data" method="POST">
                        <div class="modal-content">
                            <label for="name">Insert name</label>
                            <input id="name" type="text" name="name" class="form-control">

                            <label for="lastname">Insert lastname</label>
                            <input id="lastname" type="text" name="lastname" class="form-control">

                            <label for="phone">Insert phone</label>
                            <input id="phone" type="text" name="phone" class="form-control">

                            <label for="email">Insert email</label>
                            <input id="email" type="email" name="email" class="form-control">

                            <label for="photo">Insert photo</label>
                            <input type="file" id="photo" name="photo" accept="image/*" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/419f597d73.js" crossorigin="anonymous"></script>

</html>