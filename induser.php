<head>
  <style>
    .row{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 6px 20px 0 rgba(0, 0, 0, 0.21);
    }
  </style>
</head>
<?php
include "bot.php";
?>
<div class="konten">
<div class="row mx-auto p-5 rounded" style="width: 900px; background-color: #33334c; margin-top: 3%;">
<h2 class="text-center text-white">TRAVEGO</h2>
  <div class="col-4 text-white rounded" style="background-color: #474b68;">
    <h3 class="text-white text-center">Sign up for the best experience in traveling</h3>
    <img src="undraw_developer_activity_re_39tg.svg" class="img-fluid mx-auto mt-5" width="250" alt="">
  </div>
  <div class="col-8 text-white">
  <form action="register.php" method="post">
    <div class="form-group">
      <label for="exampleInputPassword1">username</label>
      <input type="username" name="username" class="form-control" id="username" placeholder="username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">@name</label>
      <input type="name" name="name" class="form-control" id="name" placeholder="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com...">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
    </div>
    <span id="mybutton" onclick="change()" class="input-group-text" style="width: 50px;">

    <!-- icon mata bawaan bootstrap  -->
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
        <path fill-rule="evenodd"
            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
    </svg>
</span>
    <div class="form-group">
      <label for="exampleInputPassword1">no tlp</label>
      <input type="text" class="form-control"  name="no_tlp" placeholder="no tlp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">alamat</label>
      <input type="text" class="form-control"  name="alamat" placeholder="rt/rw, kota">
    </div>
    <br>
    <button type="submit" name="register" class="btn btn-primary">sign up</button><br>
</form>

  </div>
</div>
</div>
<script>
              function change() {
    
    // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
    var x = document.getElementById('pass').type;

    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {

        //ubah form input password menjadi text
        document.getElementById('pass').type = 'text';
        
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                        </svg>`;
    }
    else {

        //ubah form input password menjadi text
        document.getElementById('pass').type = 'password';

        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                        </svg>`;
    }
}
</script>