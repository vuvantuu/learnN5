<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<base href="{{asset('')}}/">
<link href="css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form role="form" method="post"> 
        @include('note')
        {{csrf_field()}}
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email" value="{{old('email')}}">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    

    <!-- Remind Passowrd -->
    <div class= "checkbox">
      <label>
            <input name="remember" type="checkbox" value= "Remember">  Remember me
      </label>
      
    </div>
    </form>
  </div>
</div>