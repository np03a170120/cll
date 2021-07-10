<?php include 'header.php' ?>
<section class="inner-breadcrumb" style="background-image: url(images/breadcrumb-img.webp);">
    <div class="container">
        <div class="sec-title-breadcrumb">
            <h3>ABOUT US</h3>
        </div>
        <div class="ib-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Library</a></li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="inner-library section-padding">
    <div class="container">
        <div class="ms-content">
            <form>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <input type="text" class="form-control" placeholder="Author">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <input type="text" class="form-control" placeholder="Publisher">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search">
                                <span>Search</span></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="il-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">Publisher</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row" data-field="snum" data-formatter="LinkFormatter">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="table-pagination">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</section>
<?php include 'footer.php' ?>