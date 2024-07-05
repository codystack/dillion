<?php
session_start();
include "../config/db.php";
?>

<div class="row">
    <?php
    $user_id=$_POST['view_id_card_id'];
    $select_query = "SELECT * FROM users WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach($result as $row) {
            $user_id = $row['user_id'];
            $proof_of_identification = $row['proof_of_identification'];
    ?>
    <div class="card m-0 p-0 border-0">
        <div class="card-body p-0 border-0" style="background: url('<?php echo $proof_of_identification; ?>'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 400px; border-radius: 0.5rem;">
            <img src="" height="100%" class="avatar-sm w-rem-48 h-rem-48">
        </div>
    </div>
    <?php
        }
    }
    ?>
</div>