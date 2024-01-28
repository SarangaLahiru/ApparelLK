<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/Auth/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container1" id="container1">
        <div class="box">

            <form action="{{route('reg')}}" method="POST">

                @csrf
                <div class="box2">
                    <h3>Sign up</h3>
                    <div class="frm-g">
                        <a href=""><img src="/images/img/ad2img/GOOG-0ed88f7c.png" alt=""> Sign up with google</a>
                    </div>
                    <div class="frm-g">
                        <span>Name</span>
                        <input type="text" placeholder="What shall we call you?" name="name">
                        @if($errors->has('name'))
                        <p>{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="frm-g">
                        <span>Email address</span>
                        <input type="email" placeholder="example@gmail.com" name="email">
                        @if($errors->has('email'))
                        <p>{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="frm-g">
                        <span>Password</span>
                        <input type="password" placeholder="password should be 8 charactors" name="pass">
                        @if($errors->has('pass'))
                        <p>{{$errors->first('pass')}}</p>
                        @endif
                    </div>
                    <input type="submit" value="create an account">
                    
                    <h2>Been here before? <a href="">Login in</a></h2>
                    <div class="load">
                        <i class="fa-solid fa-spinner fa-spin icon"></i>
                    </div>
                </div>
            </form>
            <div class="box1">
                <img src="/images/img/ad2img/row-fashionable-polo-tshirts-man-wooden-hanger-rack-clothing-boutique-retail-shop_326694-47569.jpg" alt="">
                <h2>ApparelLK</h2>
            </div>
        </div>
    </div>
</body>
<script src="/js/Auth/register.js"></script>
</html>