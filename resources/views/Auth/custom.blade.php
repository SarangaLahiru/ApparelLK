<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize</title>
    <link rel="stylesheet" href="/css/Auth/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="load">
        <div class="box">
            <img src="/images/img/load/loading-waiting.gif" alt="">
        </div>
    </div>
    <div class="container1">
        <div class="box">
            <li><a href=""  class="ic1 icon1 acticon1"><i class="fa-solid fa-palette"></i></a><span>Color</span></li>
            <li><a href=""  class="ic2 icon1"><i class="fa-solid fa-image"></i></a><span>Logo</span></li>
            <li><a href=""  class="ic3 icon1"><i class="fa-solid fa-pen-nib"></i></a><span>Text</span></li>
            
        </div>
        
        
    
    </div>
    <div class="container2">
        <header class="h1">
            <h3>ApparelLK</h3>
    
            <div class="micon">
                <a href="" class="icon">menu<i class="fa-solid fa-layer-group"></i></a>
            </div>
            <?php
                $count = DB::table(Session::get('cname'))->count();
                ?>
            <div class="order">
                <h2><span class="count">
                        <?php echo $count; ?>
                    </span>|<span>Orders <h3>List</h3></span></h2>
            </div>
            <div class="search">
                <input id="search" type="search" placeholder="Search here..">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="heart">
                <a href=""><i class="fa-regular fa-heart"></i><span>0</span></a>
            </div>
    
    
            <div class="cart">
                <a href="" class="icart"><i class="fa-solid fa-cart-shopping"></i><span>cart <span class="count">
                            <?php echo $count; ?>
                        </span></span></a>
    
            </div>
            <div class="user">
                <a href="">{{Session::get('cname')[0]}}</i></a>
                <h2>Hi! <span>{{Session::get('cname')}}</span></h2>
            </div>
        </header>
       
        <div class="cartls">
            <div class="box">
                <a href="" class="cartcancle"><i class="fa-solid fa-xmark"></i></a>
                <h2>My cart <span>(0)</span><a href="">View All</a></h2>
    
    
    
    
                <div class="box1">
                    <table>
    
                        <?php
                    
                    $data=DB::table(Session::get('cname'))->get();
    
                    foreach($data as $datas){
    
                        echo "
                    
                    
                    
                            <tr>
                                <td>
                                    <div class='img'>
                                        <img src='".$datas->image."'
                                            alt=''>
                        
                                    </div>
                                </td>
                                <td>
                                    <p>summer fashion</p>
                                    <h2>".$datas->items."</h2>
                                    <h3><span class='size'>Size: <span>".$datas->size."</span></span></h3>
                                    <h3><span class='color'>Color: <span>".$datas->color."</span></span></h3>
                                    <div class='dis'>
                                        <span class='dis1'>Free Shipping</span>
                                        <span class='disc'>Disc 5%</span>
                                        <span class='prize'>$".$datas->total.".00</span>
                        
                                    </div>
                                    <span class='ot'>Move to favourites <a href=''><i class='fa-solid fa-trash'></i></a></span>
                                </td>
                            </tr>  " ;
    
                            }
                            
                            ?>
    
                    </table>
                </div>
            </div>
        </div>
    
    </div>
    <div class="container3">

        <div class="box">
            <div class="box1">
                
                <div class="simg">
                    <img class="vimg" src="/images/img/custom/item1/cust/Untitled-1.png" alt="">
                   
                </div>
                <div class="cimg">
                    <img class="dimg dimgs" src="/images/img/custom/item1/cust/Untitled-1.png" alt="">
                    <img class="dimg" src="/images/img/custom/item1/cust/Untitled-2.png" alt="">
                    <img class="dimg" src="/images/img/custom/item1/cust/Untitled-3.png" alt="">
                </div>

            </div>
            <img src="/images/img/custom/item1/cust/log1.png" alt="" class="logoact">
            <div class="tcustom">
                <h2>Text</h2>
            </div>
            <div class="dis">

                <div class="color">
                    <li class="c c1 curr"></li>
                    <li class="c c2"></li>
                    <li class="c c3"></li>
                    <li class="c c4"></li>
                    <li class="c c5"></li>
                </div>
                <div class="logo">
                    
                    <li class="l l1 curr"><img src="/images/img/custom/item1/logo/ca-letter-logo-design_579179-1461.jpg" alt=""></li>
                    <li class="l l2"><img src="/images/img/custom/item1/logo/letter-d-initial-with-wing-logo-template_23987-45.jpg" alt=""></li>
                    <li class="l l3"><img src="/images/img/custom/item1/logo/letter-p-logo-power_42564-11.jpg" alt=""></li>
                    <li class="l l4"><img src="/images/img/custom/item1/logo/letter-p-thunder-power-logo-vector-illustration-design_9999-18608.jpg" alt=""></li>
                    <li class="l l5"><img src="/images/img/custom/item1/logo/letter-r-logo-vector-p-logo-vector_23987-126.jpg" alt=""></li>
                </div>
                <div class="text">
                    
                    <div class="box">
                        <h2>Enter your text</h2>
                        <input class="usert" type="text" placeholder="Enter your text...">
                        <a href="" id="tapply">Apply</a>
                    </div>
                </div>

            </div>
        </div>

        <form action="{{route('item')}}" method="POST">
            @csrf
            <h2>Men cap</h2>
            <span>10$</span>
            <p>A cap is a flat headgear, usually with a visor. Caps have crowns that fit very close to the head. They made their first
            appearance as early as 3200 BC</p>
            <input type="hidden" name="itemname" value="Men cap">
            <input type="hidden" name="prize" value="10">
            <input type="hidden" name="imagename" value="/images/img/item5/m2.png">
            <input type="hidden" name="count" value="1">
            <input type="hidden" name="size" value="M">
            <input type="hidden" name="color" value="Blue">

            <input type="submit" value="Add to cart">
            <a href="">Back</a>
        </form>

        
    </div>
    
</body>
<script src="/js/Auth/custom.js"></script>
</html>