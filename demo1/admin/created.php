<?php
include 'konek.php';
$pdo = '';
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['password']) ? $_POST['password'] : '';
    $phone = isset($_POST['email']) ? $_POST['email'] : '';
    $title = isset($_POST['phone']) ? $_POST['phone'] : '';
    $title = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $title = isset($_POST['rt']) ? $_POST['rt'] : '';
    $title = isset($_POST['role']) ? $_POST['role'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO contacts VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $username, $password, $phone, $alamat, $rt, $role]);
    // Output message
    $msg = 'Created Successfully!';
}
?>



<div class="content update">
	<h2>Create Contact</h2>
    <form action="created.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="nama" placeholder="John Doe" id="nama">
        <label for="username">Username</label>
        <label for="password">Password</label>
        <input type="text" name="username" placeholder="johndoe@example.com" id="username">
        <input type="password" name="password" placeholder="2025550143" id="password">
        <label for="email">Email</label>
        <label for="phone">Phone</label>
        <input type="text" name="email" placeholder="Example@gmail.com" id="email">
        <input type="number" name="phone" id="phone">
        <label for="alamat">Alamat</label>
        <label for="rt">Rt</label>
        <input type="text" name="alamat" placeholder="Rumah blok h23" id="alamat">
        <input type="number" name="rt" id="rt">
        <label for="role">Role</label>
        <label for="phone">Created</label>
        <input type="text" name="role" id="role">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

