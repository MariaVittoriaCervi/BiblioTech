<!DOCTYPE html>
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
    <div class="book-main">
        <img src="img/author.jpg" id="image" alt="author image" class="rounded-2 cover">
        <div class="informations">
            <h2 class="title" id="name">author name</h2>
            <div class="details">
                <div class="card info">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <table class="table table-borderless">
                                <tr>
                                    <th>nationality</th>
                                    <td id="nationailty"></th>
                                </tr>
                                <tr>
                                    <th>sex</th>
                                    <td id="sex"></th>
                                </tr>
                                <tr>
                                    <th>comment</th>
                                    <td id="comment"></th>
                                </tr>
                                <tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="additional-info">
                    <h3>books</h3>
                    <table class="table table-striped">
                        <thead id="authorBooksTable">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Original language</th>
                                <th scope="col">Genre</th>
                                <th scope="col">comment</th>
                            </tr>
                        </thead>
                        <tbody id="booksTable"> </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>