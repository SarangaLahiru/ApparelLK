<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/css/Auth/dash.css">
        
</head>
<body>
    <div class="load">
        <div class="box">
            <img src="/images/img/load/loading-waiting.gif" alt="">
        </div>
    </div>
    <div class="container1">
        
        <div class="user">
            <span>{{Session::get('cname')[0]}}</span>
            <h3>Welcome! <a href=""><i class="fa-solid fa-pen-to-square"></i></a></h3>
            <h2 class="dname">{{Session::get('cname')}}</h2>
            <h2>{{Session::get('cemail')}}</h2>
        </div>
        <div class="box">
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Popular Products</a></li>
            <li class="ls lsact"><i class="fa-solid fa-bolt"></i><a href="">Explore New</a></li>
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Clothing and Shoes</a></li>
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Gift and Living</a></li>
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Inspiration</a></li>
        </div>
        <div class="add1">
            <div class="img">
                <img src="/images/img/ad2img/young-woman-with-phone-illustration_276875-255.jpg" alt="">
                <div class="dis">
                    <h2>Get more Experience</h2>
                    <h3>Download Our Mobile App</h3>
                </div>
            </div>
        </div>
    
    
        <div class="box1">
            <h2>Quick actions</h2>
            <li><i class="fa-solid fa-plus"></i><a href="">Request to products</a></li>
            <li><i class="fa-solid fa-plus"></i><a href="">Add member</a></li>
    
        </div>
        <div class="log">
            <a href=""><i class="fa-solid fa-right-to-bracket"></i>Login</a>
        </div>
    
    </div>
    <div class="container2">
        <header class="h1">
            <?php
            $count = DB::table(Session::get('cname'))
            ->count('items');
            
            
            ?>
    
            <div class="micon">
                <a href="" class="icon">menu<i class="fa-solid fa-layer-group"></i></a>
            </div>
            <div class="order">
                <h2><span class="count"><?php echo $count; ?></span>|<span>Orders <h3>List</h3></span></h2>
            </div>
            <div class="search">
                <input type="search" placeholder="Search here..">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="heart">
                <a href=""><i class="fa-regular fa-heart"></i><span>0</span></a>
            </div>
            
    
            <div class="cart">
                <a href="" class="icart"><i class="fa-solid fa-cart-shopping"></i><span>cart <span
                            class="count"><?php echo $count; ?></span></span></a>
    
            </div>
            <div class="user">
                <a href="">{{Session::get('cname')[0]}}</a>
                <h2>Hi! <span>{{Session::get('cname')}}</span></h2>
            </div>
        </header>
        <div class="header">
            <h2>Dashboard</h2>
            <div class="menu">
                <div class="mact"></div>
    
                <a href="" class="all m"><i class="fa-solid fa-people-group"></i>All</a>
                <a href="" class="men m"><i class="fa-solid fa-person"></i>Men</a>
                <a href="" class="women m"><i class="fa-solid fa-person-dress"></i>Women</a>
                <a href="" class="baby m"><i class="fa-solid fa-baby"></i>Baby</a>
    
            </div>
            <div class="filter">
                <a href=""><i class="fa-solid fa-sliders"></i>filters</a>
            </div>
            <div class="select">
                <a href="/home" class="web">Website</a>
                <a href="" class="dash">Dashboard</a>
            </div>
        </div>
        <div class="cartls">
            <div class="box">
                <a href="" class="cartcancle"><i class="fa-solid fa-xmark"></i></a>
                <h2>My cart <span>(<?php echo $count;?>)</span><a href="">View All</a></h2>
    
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
                                <h3><span class='size'>Size: <span>Large</span></span></h3>
                                <h3><span class='color'>Color: <span>White</span></span></h3>
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
        <div class="add1">
            <h2>My cards</h2>
                    <?php
                    $data = DB::table(Session::get('cname'))->sum('total');
            
                    ?>

            <div class="box">
                
                <span>Balance</span>
                <h2><?php echo "$".$data.".00";?></h2>

                <div class="dis">
                    
                    <span>Discount 0%</h1></span>
                    <span>coupons <h1>unvalable</h1></span>
                    

                </div>
                <div class="total">
                    <span>Total <h2><?php echo "$".$data.".00";?></h2></span>
                </div>
            </div>

            <a href="">Checkout<i class="fa-solid fa-credit-card"></i></a>
            <div class="pay">
                <h2>Select Option</h2>
                <div class="boption">
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-visa"></i>
                </div>
            </div>
           
        </div>
        <div class="add2">
            <div class="box a1">
                <h2><i class="fa-solid fa-boxes-stacked"></i><span>Orders</span></h2>
                <p>Count of your orders</p>
                <h3><?php echo $count;?></h3>
            </div>
            <div class="box a2">
                <h2><i class="fa-solid fa-box-open"></i><span>Receiving</span></h2>
                <p>Count of your Received orders</p>
                <h3>0</h3>
            </div>
            <div class="box a3">
                <h2><i class="fa-solid fa-boxes-stacked"></i><span>Resend</span></h2>
                <p>Count of your resend orders</p>
                <h3>0</h3>
            </div>
        </div>
        <div class="add3">
            <div class="box">
                <i class="fa-solid fa-truck"></i>
                <div class="dis">
                    <h2>Track Your order</h2>
                    <p>You can track your order.Check your order is where</p>
                    <a href="">Track order</a>
                </div>
            </div>
        </div>
        <div class="add4">
            <h2>Recent activities</h2>
            <div class="box">
                <table>

                    <?php

                    $data1 = DB::table(Session::get('cname'))->get();

                    foreach($data1 as $data1s){

                        echo "

                    
                    <tr>
                        <td>
                            <div class='img'>
                                <img src='".$data1s->image."'
                                    alt=''>
                
                            </div>
                        </td>
                        <td>
                            <p>summer fashion</p>
                            <h2>T-shirt Men</h2>
                            
                            <div class='dis'>
                                <span class='dis1'>Free Shipping</span>
                                
                                <span class='prize'>$".$data1s->total.".00</span>
                                <a href=''>Check</a>
                
                            </div>
                           
                        </td>
                    </tr> ";
                    
                    
                }
                    
                    ?>
                
                </table>

            </div>
        </div>

    </div>
    
    
</body>

<script src="/js/Auth/dash.js"></script>
</html>