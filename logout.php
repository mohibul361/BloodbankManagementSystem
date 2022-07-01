
<?php
                session_start();
                if(isset($_SESSION['username']))
                {
                    unset($_SESSION['username']);
                    session_destroy();
                }
                ?>
                <script>window.location.replace("login.php");</script>