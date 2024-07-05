        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="assets/js/vendor.bundle.js"></script>
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

    </body>
</html>