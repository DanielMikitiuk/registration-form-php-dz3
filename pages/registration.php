<h1>Registration</h1>
<form action="index.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputLogin1" class="form-label">Login:</label>
        <input type="text" class="form-control" id="exampleInputLogin1" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>