<?php

//admin_login.php

include 'database_connection.php';


$message = '';

if(isset($_POST["login_button"]))
{
    $formdata = array();

    if(empty($_POST["admin_email"]))
    {
        $message .= '<li>Email Address is required</li>';
    }
    else
    {
        if(!filter_var($_POST["admin_email"], FILTER_VALIDATE_EMAIL))
        {
           $message .=  '<li>Invalid Email Address</li>';
        }
        else
        {
            $formdata['admin_email'] = $_POST['admin_email']; 
        }    
    }

    if(empty($_POST['admin_password']))
    {
        
    }
    else
    {

    }
}

include 'header.php';

?>

<div class="d-flex align-items-center justify-content-center" styles="min-height:700px;">


<div class="card">

    <div class="card-header">Admin Login</div>

    <div class="card-body">

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Email Address</label>

                <input type="text" name="admin_email" id="admin_email" class="form-control" />

            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>

                <input type="password" name="admin_password" id="admin_password" class="form-control">

            </div>

        <div class="id-flex align-items-center justify-content-between mt-4 mb-0">


                <input type="submit" name="log_button" class="btn btn-primary" value="Login"/>
            </div>


            </div>





        </form>

    </div>
</div>

<?php

include 'footer.php';

?>