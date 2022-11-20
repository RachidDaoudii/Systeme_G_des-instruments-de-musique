<?php
    include('header.php');
    include('scripts.php');
    include('database.php');
    include('config.php');
?>
    <div class="container">
        <div class="w-50 mx-auto">
            <div class="w-100 mt-5">
                <!-- session erreur -->
                <?php if(isset($_SESSION['message'])):  ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <strong>Erreur!</strong>
                        <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                        ?>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert"></span>
                    </div>
                <?php endif ?>
                <!-- session erreur -->
                <?php if(isset($_SESSION['erreur'])):  ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Erreur!</strong>
                        <?php 
                            echo $_SESSION['erreur']; 
                            unset($_SESSION['erreur']);
                        ?>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert"></span>
                    </div>
                <?php endif ?>
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
                        <form id="form_login" action="scripts.php" method="POST" data-parsley-validate>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                                </button>

                                <div type="button" class="btn btn-link btn-floating mx-1">
                                    <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&redirect_uri=<?= urlencode('http://localhost/Systeme_G_des-instruments-de-musique/connect.php') ?>&response_type=code&client_id=<?= GOOGLE_ID ?>"><i class="fab fa-google"></i>
                                    </a>
                                </div>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <p class="text-center">or:</p>
                            <!-- Email input -->
                            <div class="mb-1">
                                <label class="form-label" for="loginEmail">Email</label>
                                <input type="email" id="loginEmail" name="loginEmail" class="form-control" placeholder="Email" required  />
                            </div>
                            <!-- Password input -->
                            <div class="mb-3">
                                <label class="form-label" for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" name="loginPassword" placeholder="password" class="form-control" required />
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="signup">Sign in</button>
                            <!-- Register buttons -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form id="form_register" action="scripts.php" method="POST" data-parsley-validate novalidate enctype="multipart/form-data">
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

                            <!-- img input -->
                            <div class="mb-1">
                            <!-- <label class="form-label" for="registerName">image profil</label>
                                <input type="file" id="registerName" name="image" class="form-control" required /> -->
                            </div>

                            <!-- Name input -->
                            <div class="mb-1">
                                <label class="form-label" for="registerName">first name</label>
                                <input type="text" id="registerName" name="registerFirstName" class="form-control" required data-parsley-trigger="keyup"/>
                            </div>

                            <!-- Name input -->
                            <div class="mb-1">
                                <label class="form-label" for="registerUsername">last name</label>
                                <input type="text" id="registerUsername" name="registerLastName" class="form-control" required data-parsley-trigger="keyup"/>
                            </div>

                            <!-- date input -->
                            <div class="mb-1">
                                <label class="form-label" for="registerUsername">date of birth</label>
                                <input type="date" id="registerUsername" name="registerDate" class="form-control" required data-parsley-trigger="keyup"/>
                            </div>

                            <!-- city input -->
                            <div class="mb-1">
                                <label class="form-label" for="registerUsername">city</label>
                                <input type="text" id="registerUsername" name="registerCity" class="form-control" required data-parsley-trigger="keyup"/>
                            </div>

                            <!-- Email input -->
                            <div class="mb-1">
                                <label class="form-label" for="registerEmail">Email</label>
                                <input type="email" id="registerEmail" name="registerEmail" class="form-control" required data-parsley-trigger="keyup"/>
                                <span id="msgsql" ></span>
                            </div>

                            <!-- Password input -->
                            <div class="mb-1">
                                <label class="form-label" for="registerPassword">Password</label>
                                <input type="password" id="registerPassword" name="registerPassword" class="form-control" data-equalto="#registerRepeatPassword" data-parsley-trigger="keyup" required />
                            </div>

                            <!-- Repeat Password input -->
                            <div class="mb-2">
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                <input type="password" id="registerRepeatPassword" class="form-control" data-equalto="#registerPassword" data-parsley-trigger="keyup" required />
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-2">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                I have read and agree to the terms
                                </label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-5" name="register">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>
    <!-- MDB -->
<?php 
include('footer.php')
?>