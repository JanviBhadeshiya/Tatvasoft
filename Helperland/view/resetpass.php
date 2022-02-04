<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
    <link rel="stylesheet" href="../assets/css/resetpass.css">
</head>
<body>
<section class="resetpassword">

    <h4 class="row text-center">Reset Password</h4>
    <p class="error text-center bg-warning text-white" style="display: block; ">
        
    </p>
    <div class="resetform">
        <form method="POST" id="resetform" action="http://localhost:8080/Final_Homepage/index1.php?controller=Helperland&function=ResetKeyPassword">
            <div class="form-row mb-3">
            <input type="text" class="form-control" id="reset" name="reset" placeholder="ResetKey" value="<?php if(isset($_GET['parameter'])){echo $_GET['parameter'];} ?>" hidden>
            </div>
            <div class="form-row mb-3">
                <label class="resetlabel">New Password</label>
                <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="Password">
                <div class="password-msg"></div>
            </div>
            <div class="form-row mb-3">
                <label class="resetlabel">Confirm Password</label>
                <input type="password" class="form-control" id="newcpassword" name="newcpassword" placeholder="Confirm Password">
                <div class="cpassword-msg"></div>

            </div>


            <div class="form-group mt-3">
                <button type="submit" name="reset_password" class="btn btn-save">Save</button>
            </div>
        </form>
    </div>

</section>
</body>
</html>