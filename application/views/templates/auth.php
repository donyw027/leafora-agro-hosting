<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/img/logo.jpg'); ?>">


    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        :root {
            --leafora-primary: #174c70;
            --leafora-secondary: #27ae60;
            --leafora-accent: #8dc63f;
            --leafora-light: #f5f8fb;
            --leafora-text: #243142;
        }

        body.bg-gradient-primary {
            background:
                linear-gradient(135deg, rgba(141, 198, 63, 0.88), rgba(23, 76, 112, 0.92)),
                url("<?= base_url('assets/img/logo4.jpg'); ?>") center center / cover no-repeat;
            min-height: 100vh;
        }

        .bg-login-image {
            background-image: url("<?= base_url('assets/img/logo4.jpg'); ?>");
            background-repeat: no-repeat;
            background-size: 80%;
        }
    </style>
</head>


<body class="bg-gradient-primary">

    <div class="container">

        <?= $contents; ?>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html>