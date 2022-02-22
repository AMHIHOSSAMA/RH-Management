<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container" id="allnav">
            <a class="navbar-brand"><img id="logo" src="logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Les employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">L’entreprise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Recherche</a>
                    </li>
                </ul>
                <button id="btnajout" type="button" class="btn btn-outline-light">Ajouter</button>

            </div>
        </div>
    </nav>
    <select class="select" data-mdb-filter="true">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
    </select>
    <div class="form-outline mb-4">
        <input type="search" class="form-control" id="datatable-search-input">
        <label class="form-label" for="datatable-search-input">Search</label>
    </div>
    <div id="datatable">
    </div>
    <div class="input-group">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Search</label>
        </div>
        <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <form action="" class="">
        <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg" placeholder="Search Here">
            <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>