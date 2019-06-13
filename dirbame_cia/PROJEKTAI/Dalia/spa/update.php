<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$paslauga = $trukme = $kaina = "";
$paslauga_err = $trukme_err = $kaina_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    // Validate paslauga
    $input_paslauga = trim($_POST["paslauga"]);
    if(empty($input_paslauga)){
        $paslauga_err = "Please enter a paslauga.";
    } elseif(!filter_var($input_paslauga, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $paslauga_err = "Please enter a valid paslauga.";
    } else{
        $paslauga = $input_paslauga;
    }

    // Validate trukme trukme
    $input_trukme = trim($_POST["trukme"]);
    if(empty($input_trukme)){
        $trukme_err = "Please enter an trukme.";
    } else{
        $trukme = $input_trukme;
    }

    // Validate kaina
    $input_kaina = trim($_POST["kaina"]);
    if(empty($input_kaina)){
        $kaina_err = "Please enter the kaina amount.";
    } elseif(!ctype_digit($input_kaina)){
        $kaina_err = "Please enter a positive integer value.";
    } else{
        $kaina = $input_kaina;
    }

    // Check input errors before inserting in database
    if(empty($paslauga_err) && empty($trukme_err) && empty($kaina_err)){
        // Prepare an update statement
        $sql = "UPDATE paslaugos SET paslauga=?, trukme=?, kaina=? WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_paslauga, $param_trukme, $param_kaina, $param_id);

            // Set parameters
            $param_paslauga = $paslauga;
            $param_trukme = $trukme;
            $param_kaina = $kaina;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM paslaugos WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $paslauga = $row["paslauga"];
                    $trukme = $row["trukme"];
                    $kaina = $row["kaina"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basepaslauga($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($paslauga_err)) ? 'has-error' : ''; ?>">
                            <label>Masažas</label>
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
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Ašaukti</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
