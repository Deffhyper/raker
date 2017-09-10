<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="col-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row no-gutters">
        <div class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequatur, explicabo
            itaque iusto minus mollitia nobis sapiente sunt ullam vel. Assumenda aut enim laudantium praesentium
            provident, temporibus voluptatem! Laboriosam, sequi!
        </div>
        <div class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi corporis culpa
            dicta doloremque exercitationem ipsum quasi quos similique vero. At consequuntur earum id inventore optio
            quos vitae voluptas, voluptatibus?
        </div>
    </div>
</div>


<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>