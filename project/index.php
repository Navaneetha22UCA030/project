<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>login</title>
    <style>
        body {
            background-color: rgb(0, 255, 170);
            margin-top: 5%;
        }

        #Registerform {
            text-decoration: none;
        }

        #card {
            background-color: rgb(127, 47, 145);
        }
        body {
        padding-top: 70px;
        padding-bottom: 70px;
        background-image: linear-gradient(to bottom, rgb(255, 136, 0), rgb(75, 47, 30));
    }
    </style>
</head>

<body>
        <div class="butclickchangeform">
            <div class="container mt-5">
                <div class="card p-1 m-3 text-white" id="card">
                    <form action="login.php" method="post">
                        <div class="row form-group m-2 p-3">
                            <div class="col">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" id="input-username">
                            </div>
                        </div>

                        <div class="row form-group m-2 p-3">
                            <div class="col">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    id="input-username">
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col text-center pt-5">
                                <button type="submit" name='submit_login' class="w-25 btn btn-primary mx-auto p-auto"
                                    id=loginbtn>Login</button>

                            </div>
                        </div>
                    </form>

                </div>

                <div class="row">
                    <div class="col" style="text-align: center;">
                        <h3 class="h3">OR</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center pt-3">
                        <button type="submit" name='reg' class="btn btn-secondary w-25 mx-auto" id=registerbtn>Register</button>
                    </div>
                </div>
            </div>
        </div>
</body>

    <script>
    $(document).ready(function() {
        $("#registerbtn").click(function() {
            $("body").html(`
                <div class="container mt-5">
                    <div class="card p-1 m-3 text-white" id="card">
                        <form action='reg.php' method="post">
                            <div class="row form-group m-2 p-3">
                                <div class="col">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group m-2 p-3">
                                <div class="col">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col text-center pt-5">
                                    <button type="submit" name='submit_register' class="btn btn-primary mx-auto p-auto" id="backtologin">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </div>
            `);
        });
    });  
</script>


</html>