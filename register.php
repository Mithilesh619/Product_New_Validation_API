<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5">
    <form id="test" method="POST" action="register_info.php">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" id="name1" class="form-control"  placeholder="Enter your name" name="name" required="">
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" id="email1" name="email" required="">
</div>
<div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="Number" class="form-control" placeholder="Enter your mobile number" id="mobile1" name="mobile" required="">
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" id="password1" name="password" required="">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

$('#test').on('submit', function(e) {
    e.preventDefault();

    // var name = document.getElementById('name').value; 
    var name = $('#name1').val();
    var email = $('#email1').val();
    var mobile = $('#mobile1').val();
    var pass = $('#password1').val();

    $.ajax({  
    type: 'POST',  
    url: 'register_info.php', 
    data:{is_ajax:1,name:name,email: email,mobile: mobile,password:pass}, 
    success: function(response) {
      //alert(response);
        console.log("Register Successfully.");
    }
});
});

</script>
 -->



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
input.parsley-success,
select.parsley-success,
textarea.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}

input.parsley-error,
select.parsley-error,
textarea.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}

.parsley-errors-list {
  margin: 2px 0 3px;
  padding: 0;
  list-style-type: none;
  font-size: 0.9em;
  line-height: 0.9em;
  opacity: 0;
  color: #B94A48;

  transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
}

.parsley-errors-list.filled {
  opacity: 1;
}

.hidden {
  display: none;
}

    </style>
  </head>
  <body>
    <div class="container my-5">
      <div class="bs-callout bs-callout-warning hidden">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>

<div class="bs-callout bs-callout-info hidden">
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div>

    <form method="post"id="demo-form"  action="register_info.php">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" id="name1" name="name" required="">
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email"  data-parsley-trigger="change" class="form-control" placeholder="Enter your email" id="email1" onchange="checkusername(this.value)" value="" name="email" required="">
    <span id="emailErrorMsg" style="color: red;"></span>
</div>
<div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="phone" class="form-control" data-parsley-type="number"   placeholder="Enter your mobile number" id="mobile1" name="mobile"  minlength="10" maxlength="12" required="">
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" id="password1" name="password" required="">
</div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>
    </div>
  </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://parsleyjs.org/dist/parsley.min.js"></script>

<script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);

  })
  .on('form:submit', function() {

    alert("dhjdhj");
  });
});

  function checkusername(username){
  //alert('mithilesh');    
    
    if(username!='undefined'){
      //alert('rajbhar');
           
      $.ajax({
        type:'POST',
        url:'checkusername.php',
        data:{duplicate_email:username},
        success:function(response){
          //alert('abc');
          if(response==1){
            $('#emailErrorMsg').text("Email already Exists");
                $("#emailErrorMsg").fadeOut(3000);


            //alert('xyz');
            $('#email1').val('');
            $('#email1').focus();
          }
        }
      });
    }
  }
</script>
