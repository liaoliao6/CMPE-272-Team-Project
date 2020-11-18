<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" onsubmit="return validate(this)">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder=" Enter Password">
                    </div>
                    <button type="submit" name='login' class="btn btn-primary float-right">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validate(form) {
        const {password, username} = form;

        if (password.value.trim().length > 0 && username.value.trim().length > 0) {
            return true;
        } else {
            alert('Please enter required fields');
            return false;
        }
    }
</script>

<?php

loginForm();

function loginForm()
{
    if (isset($_POST["login"])) {
        echo $_POST['email'];
        echo $_POST['password'];
    }
}
?>