<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Popup</title>

    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .close-btn {
            cursor: pointer;
            background-color: #f44336;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php
include('../configuration/config.php');

    if (isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $studentno = $_POST['studentnum'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $type = $_POST['type'];
        $pass = md5($_POST['password']); // Add this line to get the password from the form

        $checkSql = "SELECT * FROM `user` 
                    WHERE (`fullname` = '$fname' AND `student_number` != '$studentno') 
                    AND (`fullname` != '$fname' AND `student_number` = '$studentno')";
                    
                    $checkResult = $conn->query($checkSql);
    
                    if ($checkResult->num_rows > 0) {
                            echo "Account Already Exist.";
                    } else {
                    // Insert user data into 'user' table
                    $userSql = "INSERT INTO `user` (`fullname`, `student_number`, `email`, `course`)
                                VALUES ('$fname', '$studentno', '$email', '$course')";
                
                    $userResult = $conn->query($userSql);
                
                    if ($userResult === TRUE) {
                        echo '<div id="registrationModal" class="modal">';
                        echo '<div class="modal-content">';
                        echo '<p>Account successfully submitted</p>';
                        echo '<button class="close-btn" onclick="closeModal()">Close</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';

                        
                        echo '<meta http-equiv="refresh" content="3;url=../admin/dashboard.php" />';
                        
                        // Get the user ID of the inserted user
                        $userId = $conn->insert_id;
                
                        // Insert account data into 'account' table with the user ID as a foreign key
                        $accountSql = "INSERT INTO `account` (`id`, `username`, `pass`,`user_type`)
                                    VALUES ('$userId', '$studentno', '$pass','$type')";
                
                        $accountResult = $conn->query($accountSql);
                
                        if ($accountResult === TRUE) {
                            echo '<div id="registrationModal" class="modal">';
                            echo '<div class="modal-content">';
                            echo '<p></p>';
                            echo '<button class="close-btn" onclick="closeModal()">Close</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';
                           
                        } else {
                            echo '<div id="registrationModal" class="modal">';
                            echo '<div class="modal-content">';
                            echo "Error: " . $accountSql . "<br>" . $conn->error;
                            echo '<button class="close-btn" onclick="closeModal()">Close</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';
                            
                        }
                    } else {
                        echo '<div id="registrationModal" class="modal">';
                        echo '<div class="modal-content">';
                        echo "Error: " . $userSql . "<br>" . $conn->error;
                        echo '<button class="close-btn" onclick="closeModal()">Close</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '<script>document.getElementById("registrationModal").style.display = "flex";</script>';

                    
                    }
                }

                $conn->close();
            }
?>

</body>
</html>