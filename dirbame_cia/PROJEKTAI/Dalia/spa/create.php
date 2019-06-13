<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$paslauga = $trukme = $kaina = "";
$paslauga_err = $trukme_err = $kaina_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate paslauga
    $input_paslauga = trim($_POST["paslauga"]);
    if(empty($input_paslauga)){
        $paslauga_err = "Įveskite masažo pavadinimą.";
    } elseif(!filter_var($input_paslauga, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $paslauga_err = "Įveskite teisingą masažo pavadinimą.";
    } else{
        $paslauga = $input_paslauga;
    }

    // Validate trukme
    $input_trukme = trim($_POST["trukme"]);
    if(empty($input_trukme)){
        $trukme_err = "Įveskite masažo laiką minutėmis.";
    } else{
        $trukme = $input_trukme;
    }

    // Validate kaina
    $input_kaina = trim($_POST["kaina"]);
    if(empty($input_kaina)){
        $kaina_err = "Įveskite kainą.";
    } elseif(!ctype_digit($input_kaina)){
        $kaina_err = "Įveskite sveiką skaičių.";
    } else{
        $kaina = $input_kaina;
    }

    // Check input errors before inserting in database
    if(empty($paslauga_err) && empty($trukme_err) && empty($kaina_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO paslaugos (paslauga, trukme, kaina) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_paslauga, $param_trukme, $param_kaina);

            // Set parameters
            $param_paslauga = $paslauga;
            $param_trukme = $trukme;
            $param_kaina = $kaina;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Ups.. kažkas blogai, pabandykite vėliau..";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Pridėti masažą</h2>
                    </div>
                    <p>Norėdami pridėti naują masažą, užpildykite šią formą.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($paslauga_err)) ? 'has-error' : ''; ?>">
                            <label>Masažo pavadinimas</label>
                            <input type="text" name="paslauga" class="form-control" value="<?php echo $paslauga; ?>">
                            <span class="help-block"><?php echo $paslauga_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($trukme_err)) ? 'has-error' : ''; ?>">
                            <label>Trukmė</label>
                            <textarea name="trukme" class="form-control"><?php echo $trukme; ?></textarea>
                            <span class="help-block"><?php echo $trukme_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($kaina_err)) ? 'has-error' : ''; ?>">
                            <label>Kaina</label>
                            <input type="text" name="kaina" class="form-control" value="<?php echo $kaina; ?>">
                            <span class="help-block"><?php echo $kaina_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Patvirtinti">
                        <a href="index.php" class="btn btn-default">Atšaukti</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
