<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/Auth/log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container1" id="container1">
        <div class="box">
    
            <form action="{{route('log')}}" method="POST">
                @csrf
                <div class="box2">
                    <h3>Sign in</h3>
                    <div class="frm-g">
                        <a href=""><img src="/images/img/ad2img/GOOG-0ed88f7c.png" alt=""> Sign in with google</a>
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
                    <input type="submit" value="Login">
    
                    <h2>If you don't have an account <a href="">Sign up</a></h2>
                    <div class="load">
                        <i class="fa-solid fa-spinner fa-spin icon"></i>
                    </div>
                </div>
            </form>
            <div class="box1">
                <img src="/images/img/ad2img/flat-illustration-clothes_979520-3138.jpg"
                    alt="">
                <h2>ApparelLK</h2>
            </div>
        </div>
    </div>
    
</body>
<script src="/js/Auth/log.js"></script>
</html>