<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
    <title>Musique</title>
    <!-- bootstrap -->
</head>
<body>
    <div class="container">
        <div class="w-50 mx-auto">
            <div class="w-100 mt-5">
                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
                </ul>
                <!-- Pills navs -->
                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form id="form_login" action="scripts.php" method="POST" class="needs-validation" novalidate>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <p class="text-center">or:</p>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="loginName" name="loginName" class="form-control" required  />
                                <label class="form-label" for="loginName">Email or username</label>
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" name="loginPassword" class="form-control" required />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#!">Register</a></p>
                                
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form id="form_register" action="scripts.php" method="POST" class="needs-validation" novalidate>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                                </button>
                                <button type="" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" name="registerName" class="form-control" required />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" name="registerUsername" class="form-control" required/>
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" required />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" required />
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" required />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                I have read and agree to the terms
                                </label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
    <!-- MDB -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
<!-- <script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script> -->
<!-- <script src="assets/js/jquery-3.6.1.min.js"></script> -->
<script src="assets/js/main.js"></script>
<!-- <script src="assets/js/parsley.js"></script> -->
<!-- <script src="https://parsleyjs.org/dist/parsley.js"></script> -->
</body>
</html>