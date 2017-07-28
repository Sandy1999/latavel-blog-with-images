<h1>Register</h1>
<form method="POST" action="/register">
    <?php echo e(csrf_field()); ?>

    <label for="name">Name:</label>
    <input type="text" name="name"><br/>
    <label for="email">email:</label>
    <input type="email" name="email"><br/>
    <label for="password">Password:<label>
    <input type="password" name="password"><br/>
    <button type="submit">Create</button>
</form>