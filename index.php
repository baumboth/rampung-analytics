<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Sign Up</div>
      <form action="proses_tambah_user.php" method="POST" class="form">
        <div class="inputfield">
          <label>Nama</label>
          <input type="text" class="input" name="nama" />
        </div>
        <div class="inputfield">
          <label>Nomor HP</label>
          <input type="text" class="input" name="nomor" />
        </div>
        <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email" />
        </div>
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username" />
        </div>
        <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" />
        </div>
        <div class="inputfield">
          <input type="submit" value="Sign Up" class="btn" name="simpan" />
        </div>
      </form>
    </div>
  </body>
</html>
