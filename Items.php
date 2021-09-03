<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="logo">
        <img src="https://cdn.dribbble.com/users/1784961/screenshots/4761465/tf-logo-dribbble.jpg" height="150" width="250" />
    </div>
    <div class="mar">
        <marquee loop="-2" scrollamount="15" width="100%">
            Welcome to Tyson's Fate, The World of dogs..!!
        </marquee>
    </div>
    <div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="collar.php" class="nav-link">Collar</a>
                    </li>
                    <li class="nav-item">
                        <a href="bed.php" class="nav-link">Bed</a>
                    </li>
                    <li class="nav-item">
                        <a href="house.php" class="nav-link">House</a>
                    </li>
                    <li class="nav-item">
                        <a href="waterbottles.php" class="nav-link">Dog Food</a>
                    </li>
                    <li class="nav-item">
                        <a href="bowl.php" class="nav-link">Bowl</a>
                    </li>
                    <li class="nav-item">
                        <a href="boots.php" class="nav-link">Boots</a>
                    </li>
                    <li class="nav-item">
                        <a href="coat.php" class="nav-link">Coats</a>
                    </li>
                    <li class="nav-item">
                        <a href="disable.php" class="nav-link">Disabled Support</a>
                    </li>
                    <li class="nav-item">
                        <a href="funny.php" class="nav-link">Funny Costumes</a>
                    </li>
                    <li class="nav-item">
                        <a href="shampoo.php" class="nav-link">Shampoo</a>
                    </li>
                    <li class="nav-item">
                        <a href="toys.php" class="nav-link">Toys</a>
                    </li>
                </ul>
            </div>

            <div class="cart">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Cart & Payment
                </button>

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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="./shipping.php" method="PoST">
                                    <button type="submit" action="shipping.html" class="btn btn-primary">Make Payment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>

</html>