<head>
  <style>
    .container{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 6px 20px 0 rgba(0, 0, 0, 0.21);
    }
  </style>
</head>
<?php
include "bot.php";
?>
<div class="content">
<div class="container p-5 rounded" style="background-color: #33334c; width: 800px; margin-top: 10%;">
<h2 class="text-center text-white pb-2">Login to your account</h2>
  <div class="row">
    <div class="col">
      <img src="undraw_hello_re_3evm.svg" width="400" alt="">
    </div>
    <div class="col">
      <form action="login.php" method="post" class="mx-auto">
      <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
        <label for="floatingInput">username</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
        <label for="floatingPassword">Password</label>
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
        <button type="submit" name="login" class="btn btn-dark mt-2">Login</button>
            <small><a href="4gotpassword.php" class="text-white d-flex justify-content-end">forgot password?</a></small>

      </form>
    </div>
  </div>
  <h3 class="text-center text-white">New here?</h3>
  <p class="text-center text-white">Sign up and discover awesome place with us</p>
  <center>
  <a href="induser.php" class="text-white text-center btn btn-dark">Sign up</a>
  </center>
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