<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Auth/contactStyle.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="link">
        <a href="#"><span>Back to Home</span></a>
    </div>
    <div class="container">
        <div class="location">
            <div class="hi">
                <h1>ApparelLK</h1>
                <h2>Let's chat,</h2>
                <h2>We want to here it from You !</h2>
            </div>
            <div class="address">
                <div><img src="/images/media/icons8-phone-30.png"><span>+94 701458846</span></div>
                <div><img src="/images/media/icons8-email-30.png"><span>testemail@gmail.com</span></div>
                <div><img src="/images/media/icons8-home-30.png"><span>B 17, Temple Road, Warakapola</span></div>
            </div>
        </div>

        <div class="msg">
            <form method="POST" action="{{route('actcontact')}}">

            @csrf
                <h2>Send us a message<img src="/images/media/icons8-rocket-64.png"></h2>
                <input type="text" id="name" name="name" placeholder="Full name*">
                <input type="text" id="email" name="email" placeholder="Email address*">
                <input type="text" id="subject" name="subject" placeholder="Subject">
                <textarea id="txt-area" rows="8" name="body"></textarea>
                <button type="submit" id="submit-btn">Send message</button>
            </form>
        </div>
    </div>

    
    
    
    
</body>
</html>