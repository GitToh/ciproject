<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?> | Smart Stock</title>

    <?php
        $this->load->view('frontend/includes/default_css');
    ?>
</head>
<body>
    <?php
        $this->load->view('frontend/includes/header');

        $this->load->view($main_content);

        $this->load->view('frontend/includes/footer');
        $this->load->view('frontend/includes/default_script');
    ?>

</body>
</html>