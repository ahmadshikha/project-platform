
    <?php session_start();?>
@if(isset($_SESSION['user_name'])  )
 <?php    redirect('Labtop'); ?>
@endif;
<link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href ="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/sign_up.css">
<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">sign up</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="{{route('customer.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <label for="name">name</label> <input class="form-styling" type="text" name="name" placeholder="" />
             <label for="user_name">user_name</label>
             <input class="form-styling" type="text" name="user_name" placeholder="" />
             <label for="password">password </label> <input class="form-styling" type="password" name="password" placeholder="" /> <label for="email">email</label> <input class="form-styling" type="email" name="email" placeholder="" />
            <label for="address">address</label> <input class="form-styling" type="text" name="address" placeholder="" />
            <label for="phone_num">phone_number</label> <input class="form-styling" type="number" name="phone_num" placeholder="" />
            <label for="photo"><div> hello</div></label> <input class="" type="file" name="photo" placeholder="" />
           <br>
            <input type="submit" class=" btn-signup " value="sign up">
            <br>
            <br>


            <div class="" style="color:white;text-align:center;margin-top:30px"> or <a href="login">login</a> </div>


            </form>

<script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
