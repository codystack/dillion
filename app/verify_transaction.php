<?php
    session_start();

    $ref = $_GET['reference']; 
    if ($ref == "") {
        header("Location:javascript://history.go(-1)");
    }
?>

<?php
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_41b9d40557eb413b86d639013626c39437684628",
        "Cache-Control: no-cache",
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // echo $response;
        $result = json_decode($response);
    }

    if ($result->data->status == 'success') {

        $userID = $_SESSION['user_id'];
        $status = $result->data->status;
        $property_title = $result->data->metadata->custom_fields[0]->value;
        $transaction_ref = $result->data->reference;
        $amount = $result->data->amount / 100;
        $payment_method = $result->data->channel;
        $invoice_id = '#' . rand(1000, 9999);

        //Connect database
        include "./config/db.php";


        $check_user_query = "SELECT * FROM users WHERE user_id ='$userID'";
        $result = mysqli_query($conn, $check_user_query);
        if (mysqli_num_rows($result) > 0) {
            
  
            $query = "INSERT INTO transactions (userID, status, transaction_ref, amount, payment_method, invoice_id, property_title)
                VALUES ('$userID', '$status', '$transaction_ref', '$amount', '$payment_method', '$invoice_id', '$property_title')";
            
            mysqli_query($conn, $query);
            if (mysqli_affected_rows($conn) > 0) {
                $_SESSION['success_message_title'] = "Payment Successful";
                $_SESSION['success_message'] = "Your payment for $property_title was successful";
                echo "<meta http-equiv='refresh' content='0; URL=portfolio?status=success'>";
            } else {
                $_SESSION['error_message_title'] = "Payment not Successful";
                $_SESSION['error_message'] = mysqli_error($conn);
                echo "<meta http-equiv='refresh' content='0; URL=properties'>";
                exit;
            }
        }else {
            $_SESSION['error_message_title'] = "Error Occurred";
            $_SESSION['error_message'] = mysqli_error($conn);
            echo 'Error Occured'. mysqli_error($conn);
            exit;
        }
    }elseif ($result->data->status == 'failed') {
        $userID = $_SESSION['user_id'];
        $status = $result->data->status;
        $property_title = $result->data->metadata->custom_fields[0]->value;
        $transaction_ref = $result->data->reference;
        $amount = $result->data->amount / 100;
        $payment_method = $result->data->channel;
        $invoice_id = '#' . rand(1000, 9999);

        //Connect database
        include "./config/db.php";


        $check_user_query = "SELECT * FROM users WHERE user_id ='$userID'";
        $result = mysqli_query($conn, $check_user_query);
        if (mysqli_num_rows($result) > 0) {
            
  
            $query = "INSERT INTO transactions (userID, status, transaction_ref, amount, payment_method, invoice_id, property_title)
                VALUES ('$userID', '$status', '$transaction_ref', '$amount', '$payment_method', '$invoice_id', '$property_title')";
            
            mysqli_query($conn, $query);
            if (mysqli_affected_rows($conn) > 0) {
                $_SESSION['error_message_title'] = "Payment not Successful";
                $_SESSION['error_message'] = mysqli_error($conn);
                echo "<meta http-equiv='refresh' content='0; URL=properties'>";
                exit;
            }
        }
    }
?>