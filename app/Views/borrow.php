<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="card-header header">
        <img src="img\Logo.png" class="rounded-circle logo" alt="img logo">
        <h1><b>BiblioTech</b></h1>
    </div>
    <h2>borrows</h2>
    <div id="borrow-main">
        <form class="row g-3 needs-validation was-validated" novalidate="">
            <div class="col-md-4">
                <label for="title" class="form-label">Book title</label>
                <!--se si va a questa pagina dalla pagina del libro allora si mette il titolo del libro e lo si rende non modificabile-->
                <input class="form-control" id="title" list="books" placeholder="Type to search book..." required="" />
                <datalist id="books">
                    <option value="book 1"></option>
                    <option value="book 11"></option>
                    <option value="book 2"></option>
                    <option value="book 3"></option>
                    <option value="book 4"></option>
                    <option value="book 5"></option>
                </datalist>

                <div class="invalid-feedback">Select a book</div>
            </div>

            <div class="col-md-4">
                <label for="location" class="form-label">location</label>
                <!--se si va a questa pagina dalla pagina della sede allora si mette il nome della sede e lo si rende non modificabile-->
                <input class="form-control" id="location" list="locations" placeholder="Type to search location..."
                    required="" />
                <datalist id="locations">
                    <option value="location 1"></option>
                    <option value="location 11"></option>
                    <option value="location 2"></option>
                    <option value="location 3"></option>
                    <option value="location 4"></option>
                    <option value="location 5"></option>
                </datalist>

                <div class="invalid-feedback">Select a location</div>
            </div>

            <div class="col-md-4">
                <label for="author" class="form-label">author</label>
                <input class="form-control" id="author" list="authors" placeholder="Type to search author..."
                    required="" />
                <datalist id="authors">
                    <option value="author 1"></option>
                    <option value="author 11"></option>
                    <option value="author 2"></option>
                    <option value="author 3"></option>
                    <option value="author 4"></option>
                    <option value="author 5"></option>
                </datalist>

                <div class="invalid-feedback">Select an author</div>
            </div>

            <div class="col-md-4">
                <label for="id" class="form-label">client's ID</label>
                <div class="input-group has-validation">
                    <input class="form-control" id="id" placeholder="example: 0" aria-describedby="inputGroupPrepend"
                        required="" />
                    <div class="invalid-feedback">Please choose a valid client ID.</div>
                </div>
            </div>

            <div class="col-md-4">
                <label for="name" class="form-label">client's name</label>
                <div class="input-group has-validation">
                    <input class="form-control" id="name" placeholder="example: Jonathan"
                        aria-describedby="inputGroupPrepend" required="" />
                    <div class="invalid-feedback">Please insert a valid name.</div>
                </div>
            </div>

            <div class="col-md-4">
                <label for="mail" class="form-label">client's mail</label>
                <div class="input-group has-validation">
                    <input class="form-control" id="mail" placeholder="example: name.surname@mail.ex"
                        aria-describedby="inputGroupPrepend" required="" />
                    <div class="invalid-feedback">Please insert a valid mail.</div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>