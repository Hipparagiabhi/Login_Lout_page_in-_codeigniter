<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <style>
        .box{
        /* align-items:center;
        justify-content:center; */
        border:solid;
        padding:10px;
        height:200px;
        width:300px;
        }
        body{
        height:90vh;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;  
        }
    </style>
</head>
<body>

    <h3>Register for this</h3>
    <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
    <div class="box">
    <form action="<?php echo base_url(); ?>/UserController/store" method="post">
        <!-- <label for="">Name</label> -->
        Name: <input type="text" name="name"  value="<?= set_value('name') ?>" ></br></br>
        Email: <input type="email" name="email"  value="<?= set_value('email') ?>" ></br></br>
        Password: <input type="password"></br></br>
        Confirmpassword: <input type="password"></br></br>
        <input type="Submit" value="Submit">
    </form>
    </div>
</body>
</html>