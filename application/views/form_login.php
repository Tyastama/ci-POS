<?php
echo form_open('auth/login');
?>
<table class="table table-bordered">
<tr><td>Username</td>
<td><input type="text" class="form-control" name="username" placeholder="username"></td></tr>
<tr><td>Password</td>
<td><input type="text" class="form-control" name="password" placeholder="password"></td></tr>
<tr><td><button type="submit" class="btn btn-default" name="submit">Login</button></td></tr>
</table>
</form>