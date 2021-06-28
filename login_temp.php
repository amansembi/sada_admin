<?php include "ind/head.php"; 
?>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">
<!-- logo -->
    <div id="logo">
        <img class="logo" src="assets/media/image/logo-dark.png" alt="image">
    </div>
    <!-- ./ logo -->
    <h5>Sign in</h5>
    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>

    </form>
    <!-- ./ form -->
</div>
<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>
<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>
</html>
