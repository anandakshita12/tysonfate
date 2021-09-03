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
    <title>Tyson Store</title>
</head>

<body>
    <!-- logo    -->
    <div class="logo">
        <img src="https://cdn.dribbble.com/users/1784961/screenshots/4761465/tf-logo-dribbble.jpg" height="150" width="250" />
    </div>
    <!-- marquee   -->
    <div class="mar">
        <marquee loop="-2" scrollamount="15" width="100%">
            Welcome to Tyson's Fate, The World of dogs..!!
        </marquee>
    </div>
    <!-- navbar  -->
    <div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="collar.php">WHAT's NEW</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- container with 2 block   -->
    <div class="containe">
        <!-- block 1 -->
        <div class="containe1">
            <div class="img1">
                <img src="https://images.unsplash.com/photo-1551239262-61cf00f7f55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
            </div>
            <!-- login form   -->
            <div class="loginbox">
                <form action="#" method="post">
                    <div class="loginheading">LOGIN</div>
                    <label for="username">Enter Your UserName:</label>
                    <input type="text" name="username" placeholder="Enter UserName"><br>
                    <label for="password">Enter Your Password:</label>
                    <input type="password" name="password" placeholder="Enter Password">
                </form>
                <div class="btn mt-lg-3 w-100 m-auto">
                    <button type="submit" class="btn btn-dark ">Login</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">SignUp
                    </button>
                </div>
            </div>
            <!-- signup form -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- modal body   -->
                        <div class="modal-body">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="name">First Name:</label>
                                        <input type="Name" class="form-control" id="Name" placeholder="First" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name:</label>
                                        <input type="Name" class="form-control" id="Name" placeholder="Last" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="mail">Email:</label>
                                        <input type="mail" class="form-control" id="mail" placeholder="Email" name="mail">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Contact Number:</label>
                                        <input type="phone" class="form-control" id="phone" placeholder="Phone" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Gender:</label>

                                        <select class="form-control" id="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Transgender</option>
                                            <option>Other</option>
                                        </select>
                                        <br>
                                        <div class="form-group">
                                            <label for="address">Complete Address:</label>
                                            <input type="address" class="form-control" id="address" placeholder="Address" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State:</label>
                                            <input type="state" class="form-control" id="State" placeholder="Area" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <input type="city" class="form-control" id="city" placeholder="city" name="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="code">Pin Code:</label>
                                            <input type="code" class="form-control" id="code" placeholder="code" name="code">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" id="password" placeholder="password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Re-Enter Password:</label>
                                            <input type="password" class="form-control" id="password" placeholder="password" name="password">
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                    </div>
                                </form>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Create Account</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div></div>

        <!-- block 2 -->
        <div class="containe2">
            <div class="textpara1 ">
                <strong>Tyson's Fate</strong> is established in Delhi,India is ideally <br>
                located for shipments to any part of the world.<br>
                Tyson's Fate provide help to pet lovers.<br>
                Our aim to provide best products for your dog.<br>
                We can suggest you best clinic facility such as doctor,<br>
                laboratory, treatment, beauty care treatment and lot more.<br>
                Regardless of how much you love your pooch,<br>
                there will come a time when you’ll have to leave them behind,<br> be it for travel, emergencies, or
                illness.<br>
            </div>
            <div class="img2">
                <img src="http://4.bp.blogspot.com/-P28_A4i5F0c/UJJtD9BU0PI/AAAAAAAAAic/6fBOfCU5ero/s1600/3+Cute+Dogs+HD+Wallpapers.jpg" alt="DOG IMAGE">
            </div>
        </div>
    </div>

    <!-- after container  -->
    <div class="par2">
        Your first instinct may be to bring them along with you, only to find out that<br> your hotel has a no-pets
        policy,
        or your dog has suddenly become violently ill in the middle of your vacation.<br>
        Not to mention, pet travel isn’t exactly cheap.<br>
        Instead, some pet owners resort to leaving them with neighbors who, unfortunately,<br> may not even be able to
        tell the difference between dog food and cat food.
        Home dog boarding is<br> often a better alternative if you can find a good candidate for the job.
    </div>
    <!-- items  -->
    <div>
        <h3 class="loginheading">ITEMS</h3>
        <div class="item1 ">
            <form action="collar.php" method="POST"><button type="submit" class="btn  text-light bg-info">Collar</button></form>
            <form action="house.php" method="POST"><button type="submit" class="btn  text-light bg-info">House</button></form>
            <form action="waterbottles.php" method="POST"><button type="submit" class="btn  text-light bg-info">Dog Food</button></form>
            <form action="bed.php" method="POST"><button type="submit" class="btn  text-light bg-info">Bed</button></form>
            <form action="bowl.php" method="POST"><button type="submit" class="btn  text-light bg-info">Bowl</button></form>
        </div>
        <div class="item2">
            <form action="disable.php" method="POST"><button type="submit" class="btn  text-light bg-info">Disabled Support</button></form>
            <form action="boots.php" method="POST"><button type="submit" class="btn  text-light bg-info">Boots</button></form>
            <form action="coat.php" method="POST"><button type="submit" class="btn  text-light bg-info">Coats</button></form>
            <form action="funny.php" method="POST"><button type="submit" class="btn  text-light bg-info">Funny Costumes</button></form>
        </div>
        <div class="item3 mb-5">
            <form action="shampoo.php" method="POST"><button type="submit" class="btn  text-light bg-info">Boots</button></form>
            <form action="waterbottles.php" method="POST"><button type="submit" class="btn  text-light bg-info">Dog Food</button></form>
            <form action="toys.php" method="POST"><button type="submit" class="btn  text-light bg-info">Toys</button></form>
        </div>
    </div>
    </div>

    <!-- footer   -->
    <footer class="">
        <div class="foot p-4 ">
            <p>Posted by: Akshita Anand & Mandeep Seehra</p>
            <p>Contact us:
                <a href="anandakshita12@gmail.com"><b class="text-info">anandakshita12@gmail.com</b></a>,
                <a href="manu36126@gmail.com"><b class="text-info">manu36126@gmail.com</b></a>
            </p>
            <p>Call us: <strong>8588036085,9873873417</strong></p>
            <p><strong>Note:</strong><b class="text-info">Terms & Conditions apply.</b></p>
        </div>
        <p class="fixed-bottom mb-0 p-1 text-light text-center" style="background-color: #000000;">Any Queries? Whatsapp Us..!!</p>
    </footer>

</body>

</html>