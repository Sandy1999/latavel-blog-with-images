<h1>SignIn</h1>
<form method="POST" action="/login">
    <?php echo e(csrf_field()); ?>

    <label>Email Id:</label>
    <input type="email" name="email"><br/>
    <label>Password</label>
    <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>