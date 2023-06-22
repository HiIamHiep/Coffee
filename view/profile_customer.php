<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/css/style.css">
    <link rel="stylesheet" href="./view/assets/css/profile_customer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="./view/assets/css/profile_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Blabla Coffee</title>
    <style>
        header {
            display: flex;
            flex-direction: row;
            position: relative;
            background: #333;
        }

        nav a {
            color: #fff;
        }

        nav a:hover {
            text-decoration: none;
            color: #fff;
        }

        header .header-right .item a {
            color: #fff;
        }
    </style>
</head>
<body>
<?php require 'header.php' ?>
<form method="post" action="?controller=update_profile" enctype="multipart/form-data">
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                                                                                             src="<?php echo $object->get_photo() ?>"
                                                                                             width="90"><span
                            class="font-weight-bold"><?php echo $object->get_fullname() ?></span><span
                            class="text-black-50"><?php echo $object->get_email() ?></span>
                    <span><a href="#">Change avatar</a></span></div>
            </div>
            <div class="col-md-8">
                <input type="hidden" name="id" value="<?php echo $object->get_id() ?>">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i
                                    class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6><a href="?controller=base">Back to home</a></h6>
                        </div>
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input name="first_name" type="text" class="form-control" placeholder="first name"
                                                     value="<?php echo $object->get_first_name() ?>">
                        </div>
                        <div class="col-md-6"><input name="last_name" type="text" class="form-control" placeholder="Doe"
                                                     value="<?php echo $object->get_last_name() ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input name="email" type="text" class="form-control" placeholder="Email"
                                                     value="<?php echo $object->get_email() ?>" readonly></div>
                        <div class="col-md-6"><input name="phone_number" type="text" class="form-control"
                                                     value="<?php echo $object->get_phone_number() ?>"
                                                     placeholder="Phone number"></div>
                    </div>
                    <div class="row mt-3">
                        <input type="hidden" name="old_photo" value="<?php echo $object->get_photo() ?>">
                        <div class="col-md-6"><input name="photo" type="file" class="form-control"
                                                     placeholder="Photo"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input name="password" type="password" class="form-control"
                                                     placeholder="Password" value="<?php echo $object->get_password() ?>" readonly></div>
                        <div class="col-md-6"><a href="#">Change password</a></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><textarea name="address" class="form-control"><?php echo $object->get_address() ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input name="birth_date" class="form-control" type="date"
                                                     value="<?php echo $object->get_birth_date() ?>"></
                        >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">Male<input name="gender" type="radio" class="form-control" value="0"
                            <?php if ($object->get_gender() == 0) {
                                echo "checked";
                            } ?>></div>
                    <div class="col-md-6">Female<input name="gender" type="radio" class="form-control" value="1"
                            <?php if ($object->get_gender() == 1) {
                                echo "checked";
                            } ?>></div>
                </div>
                <div class="mt-5 text-right">
                    <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

<?php require 'footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>