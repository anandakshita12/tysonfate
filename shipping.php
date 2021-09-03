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
    <title>Shipping</title>
</head>

<body>
    <div class="logo text-center">
        <img src="data:image/png;base64,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" width="350" />
        <p class="display-5 text-center">Payment Gateway, 100% Secure, Powered by Norton Security</p>
    </div>
    </div>

    <div class="container d-flex justify-content-center w-50 bg-light m-auto">
        <div class=" text-dark">
            <div class="loginbox">
                <form action="#" method="post">
                    <div class="loginheading">Payment</div>
                    <label for="credit">Credit Card:</label>
                    <input type="text" name="credit" placeholder="Credit Number"><br>
                    <label for="Debit">Debit Card:</label>
                    <input type="text" name="Debit" placeholder="Debit Number"><br>
                    <label for="Mode">Net Banking mode:</label>
                    <select>
                        <option>Paypal</option>
                        <option>Paytm</option>
                        <option>Phone pe</option>
                        <option>Google Pay</option>
                    </select><br>
                    <input type="radio" name="other"><label>Urban Buy coupons</label></input>
                    <input type="radio" name="other"><label>Cash On Delivery</label></input>
                </form>
                <div class="btn mt-lg-3 w-100 m-auto">
                    <button type="submit" class="btn btn-dark ">Submit</button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>