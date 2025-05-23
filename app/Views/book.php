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
        <img src="img/bookCover.jpg" alt="cover image" class="rounded-2 cover">
        <div class="book-informations">
            <h2 class="title" id="title"></h2>
            <div class="details">
                <div class="card info">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <table class="table table-borderless">
                                <tr>
                                    <th>author</th>
                                    <td id="authorName"></th>
                                </tr>
                                <tr>
                                    <th>genre</th>
                                    <td id="genre"></th>
                                </tr>
                                <tr>
                                    <th>original language</th>
                                    <td id="language"></th>
                                </tr>
                                <tr>
                                    <th>comment</th>
                                    <td id="comment"></th>
                                </tr>
                            </table>
                        </li>
                        <li class="list-group-item">
                            <button type="button" class="btn btn-primary btn-lg">borrow</button>
                        </li>
                    </ul>
                </div>
                <div class="additional-info">
                    <h3>Plot</h3>
                    <p id="plot"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>