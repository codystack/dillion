        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="assets/js/vendor.bundle.js"></script>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/pay.js"></script>
        <script src="assets/js/view.js"></script>
        <script src="assets/js/theme.bundle.js"></script>

        <!-- Password Matching-->
        <script>
            $('#confirmpassword').on('keyup', function () {
                if ($('#newpassword').val() == $('#confirmpassword').val()) {
                    $('#message').html('Password matched').css('color', 'green');
                } else
                    $('#message').html('Password did not match').css('color', 'red');
            });
        </script>

        <script>
            //Pament Method Trigger
            function selectPaymentMethod(self) {
                var id = self.getAttribute("data-id");

                document.getElementById("form-select-payment").id.value = id;
                $("#paymentMethodModal").modal("show");
            }
        </script>

        <?php
            if (isset($_SESSION['success_message'])) {
        ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['success_message_title']; ?>",
                    text: "<?php echo $_SESSION['success_message']; ?>",
                    icon: "success",
                    buttons: false,
                    timer: 4000
                });
            </script>
        <?php
            unset($_SESSION['success_message']);
            }
        ?>


        <?php
            if (isset($_SESSION['error_message'])) {
        ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['error_message_title']; ?>",
                    text: "<?php echo $_SESSION['error_message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 5000
                });
            </script>
        <?php
            unset($_SESSION['error_message']);
        }
        ?>

    </body>
</html>