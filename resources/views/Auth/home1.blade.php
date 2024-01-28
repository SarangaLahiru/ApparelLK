<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/Auth/home1.css">
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
        <h2>ApparelLK</h2>
        <div class="box">
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="#popular">Popular Products</a></li>
            <li class="ls lsact"><i class="fa-solid fa-bolt"></i><a href="">Explore New</a></li>
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Clothing and Shoes</a></li>
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Gift and Living</a></li>
            <li class="ls"><i class="fa-solid fa-bolt"></i><a href="">Inspiration</a></li>
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

            <div class="micon">
                <a href="" class="icon">menu<i class="fa-solid fa-layer-group"></i></a>
            </div>
            <?php
            $count = DB::table(Session::get('cname'))->count();
            ?>
            <div class="order">
                <h2><span class="count"><?php echo $count; ?></span>|<span>Orders <h3>List</h3></span></h2>
            </div>
            <div class="search">
                <input id="search" type="search" placeholder="Search here..">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="heart">
                <a href=""><i class="fa-regular fa-heart"></i><span>0</span></a>
            </div>
            
            
            <div class="cart">
                <a href="" class="icart"><i class="fa-solid fa-cart-shopping"></i><span>cart <span class="count"><?php echo $count; ?></span></span></a>
                
            </div>
            <div class="user">
                <a href="">{{Session::get('cname')[0]}}</i></a>
                <h2>Hi! <span>{{Session::get('cname')}}</span></h2>
            </div>
        </header>
        <div class="header">
            <h2>Explore</h2>
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
                <a href="" class="web">Website</a>
                <a href="/dashboard" class="dash">Dashboard</a>
            </div>
        </div>
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
        <div class="ad1">
            <div class="slide">
                <h2>GET UP TO 50% OFF</h2>
                <a href="">Get Discount</a>
                <div class="box">
                    <img class="img curr" src="/images/img/ad1_img/m7.jpg" alt="">
                    <img class="img" src="/images/img/ad1_img/m8.jpg" alt="">
                    <img class="img" src="/images/img/ad1_img/woman-hand-holding-paper-shopping-bag-blue-banner-background-discounts-sale-concept-panoramic-image_74952-1390.jpg" alt="">
                    <img class="img" src="/images/img/ad1_img/close-up-portrait-adorable-wealthy-lady-hold-many-shop-bags-posing-violet-wall_525549-261.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="ad2">
            <div class="slide">
                <h2>Winter's Weekend <a href=""><i class="fa-solid fa-up-right-from-square"></i></a></h2>
                <span>Keep it casual</span>
                <img src="/images/img/ad1_img/woman-wearing-hat-coat-against-yellow-wall_893012-196403.jpg" alt="">
            </div>
        </div>
        <div class="ad3">
            <div class="slide">
                <div class="box">
                    <img src="/images/img/ad2img/woman-beige-brown-autumn-coat-stylish-sunglasses-white-background-studio-shot-slim-figure_481253-1851.jpg" alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/elegant-young-woman-gray-white-black-striped-sweater-black-long-leather-skirt-hat_481253-4870.jpg" alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/elegant-woman-pretty-pastel-pale-pink-suit-jacket-trousers-sunglasses-white-background_481253-5645.jpg" alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/woman-beige-brown-autumn-coat-stylish-sunglasses-white-background-studio-shot-slim-figure_481253-1851.jpg" alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/woman-gray-pants-blouse-bicolor-accessories-boots-white-background-brown-hair-studio-shot_481253-1215.jpg" alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad4">
            <div class="slide">
                <div class="box">
                    <img src="/images/img/ad2img/beautiful-fashion-woman-posing-with-elegant-suit_1328-3305.jpg" alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/elegant-young-woman-gray-white-black-striped-sweater-black-long-leather-skirt-hat_481253-4870.jpg"
                        alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/elegant-woman-pretty-pastel-pale-pink-suit-jacket-trousers-sunglasses-white-background_481253-5645.jpg"
                        alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/woman-beige-brown-autumn-coat-stylish-sunglasses-white-background-studio-shot-slim-figure_481253-1851.jpg"
                        alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
                <div class="box">
                    <img src="/images/img/ad2img/woman-gray-pants-blouse-bicolor-accessories-boots-white-background-brown-hair-studio-shot_481253-1215.jpg"
                        alt="">
                    <div class="dis">
                        <h3>item</h3>
                        <h2>Supper Skin jogger in brown</h2>
                        <span>$80</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad5">
            <div class="box">
                <h2>Winter's Weekend <a href=""><i class="fa-solid fa-up-right-from-square"></i></a></h2>
                <img src="/images/img/ad2img/portrait-smiling-beautiful-girl-her-handsome-boyfriend-laughing_158538-4885.jpg"
                    alt="">
            </div>
        </div>

    </div>
    <div class="container4">
        <div class="filter">
            <div class="box">
                <h2>CAREGORIES</h2>
                <li><a href=""><input type="checkbox">New Arrivals</a></li>
                <li><a href=""><input type="checkbox">Accesories</a></li>
                <li><a href=""><input type="checkbox">Bag</a></li>
                <li><a href=""><input type="checkbox">Shirts</a></li>
                <li><a href=""><input type="checkbox">Jackets</a></li>
            </div>
            <div class="box color">
                <h2>Color</h2>
                <div class="dis">
                    <li class="a1"><a href=""></a></li>
                    <li class="a2"><a href=""></a></li>
                    <li class="a3"><a href=""></a></li>
                    <li class="a4"><a href=""></a></li>
                    <li class="a5"><a href=""></a></li>
                </div>
            </div>
            <div class="box size">
                <h2>Size</h2>
                <li><a href=""><input type="checkbox">S</a></li>
                <li><a href=""><input type="checkbox">M</a></li>
                <li><a href=""><input type="checkbox">L</a></li>
                <li><a href=""><input type="checkbox">XL</a></li>
            
            </div>
        </div>
        
    </div>
    <div class="container5" id="popular">
        <h2 >Clothes and shoes</h2>
        <div class="box">
            <div class="item">
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
            <div class="item">
                <img src="/images/img/item2/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item2/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item2/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item2/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item2/m4.jpg">
                <div class="dis">
                    <h2>Summer HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize">$<span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
            <div class="item">
                <img src="/images/img/item3/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item3/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item3/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item3/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item3/m4.jpg">
                <div class="dis">
                    <h2>FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize">$<span id="price">38</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
            <div class="item">
                <img src="/images/img/item4/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item4/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item4/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item4/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item4/m4.jpg">
                <div class="dis">
                    <h2>Men Shirt</h2>
                    <span>Summer Dress</span>
                    <span class="prize">$<span id="price">60</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
            <div class="item">
                <img src="/images/img/item5/m1.png" alt="">
                <input class="m1" type="hidden" value="/images/img/item5/m1.png">
                <input class="m2" type="hidden"
                    value="/images/img/item5/m2.png">
                    <input class="m3" type="hidden"
                        value="/images/img/item5/m3.png">
                        <input class="m4" type="hidden"
                            value="/images/img/item5/m4.png">
                <div class="dis">
                    <h2>Men cap</h2>
                    <span>Summer fAshion</span>
                    <span class="prize">$<span id="price">10</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
            <div class="item">
                <img src="/images/img/item6/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item6/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item6/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item6/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item6/m4.jpg">
                <div class="dis">
                    <h2>Official Shirt</h2>
                    <span>Men Dress</span>
                    <span class="prize">$<span id="price">50</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
             <div class="item">
                <img src="/images/img/item7/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item7/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item7/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item7/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item7/m4.jpg">
                <div class="dis">
                    <h2>Official Women</h2>
                    <span>Women Dress</span>
                    <span class="prize">$<span id="price">110</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
             <div class="item">
                <img src="/images/img/item8/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item8/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item8/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item8/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item8/m4.jpg">
                <div class="dis">
                    <h2>Lace Summer Dress</h2>
                    <span>Summer Dress</span>
                    <span class="prize">$<span id="price">90</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
              <div class="item">
                <img src="/images/img/item9/m1.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item9/m1.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item9/m2.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item9/m3.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item9/m4.jpg">
                <div class="dis">
                    <h2>Casual child Dress</h2>
                    <span>Child Dress</span>
                    <span class="prize">$<span id="price">45</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                </div>
                
                
            </div>
                    
        </div>
    </div>
    <div class="container6">
        <div class="box">
            <a href="" class="vcancle"><i class="fa-solid fa-xmark"></i></a>

            <div class="img">
                <div class="cimg">
                    <div class="img1 m">
                        <img class="actm" src="/public/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg"
                            alt="">
                    </div>
                    <div class="img1">
                        <img class="actm" src="/public/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg"
                            alt="">
                    
                    </div>
                    <div class="img1">
                        <img class="actm" src="/public/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg"
                            alt="">
                    
                    </div>
                    <div class="img1">
                        <img class="actm" src="/public/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg"
                            alt="">
                    
                    </div>
                </div>
                <div class="simg">
                    <img class="actsimg" src="/public/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                </div>
            </div>
            <div class="dis">

                <form action="{{route('item')}}" method="POST">

                    @csrf

                    <h2 id="itemname">Fluted Hem Dress</h2>
                    <h3><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <span>Reviews</span></h3>
                    <h4><i class="fa-solid fa-circle-check"></i><span>Avaliable in stock</span></h4>
                    <span class="itemp">$ <span id="prize">80</span>.00</span>
                    <p id="itemdis">Fashion is a term used interchangeably to describe the creation of clothing, footwear, accessories, cosmetics, and
                    jewellery of different cultural aesthetics </p>
                    <div class="size">
                        <span>Size</span>
                        <select name="size" id="">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>

                    <div class="count">
                        <input type="number" name="count" value="1">
                    </div>
                    <div class="btn">
                        <input type="submit" value="Add to cart">
                        <a href="customize">customize</a>
                    </div>
                    <input class="imgname" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg" name="imagename">
                    <input class="imgprice" type="hidden" value="80"  name="prize">
                    <input class="imgsize" type="hidden" value="Red"  name="color">
                    <input class="itemname" type="hidden" value="Fluted Hem Dress"  name="itemname">
                </form>
            </div>
            
            
        </div>
    </div>
    <div class="container7">
       
        <div class="box">
            <i class="fa-solid fa-truck-fast"></i>
            <h2>Free Delivery</h2>
            
        </div>
        <div class="box">
            <i class="fa-solid fa-money-check-dollar"></i>
            <h2>Money Guaranted</h2>
            
        </div>
        <div class="box">
            <i class="fa-solid fa-credit-card"></i>
            <h2>Secure Payment</h2>
            
        </div>
        <div class="box">
            <i class="fa-solid fa-users-rectangle"></i>
            <h2>Authentication guaranted</h2>
            
        </div>
        

    </div>
    <div class="container8">
        <h2>Best Sale</h2>
        <div class="slides">
           <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS1</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
            <div class="item">
            
                <img src="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg" alt="">
                <input class="m1" type="hidden" value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3774.jpg">
                <input class="m2" type="hidden"
                    value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3781.jpg">
                    <input class="m3" type="hidden"
                        value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3785.jpg">
                        <input class="m4" type="hidden"
                            value="/images/img/item1/elegant-young-woman-pretty-red-suit-jacket-pants-trousers-black-blouse-white-background_481253-3797.jpg">
                <div class="dis">
                    <h2 id="name">FLUTED HEM DRESS</h2>
                    <span>Summer Dress</span>
                    <span class="prize" >$ <span id="price">39</span></span>
                    <div class="dis2">
                        <span class="size">S M L XL</span>
                        <span class="color">
                            <div class="c a1"></div>
                            <div class="c a2"></div>
                            <div class="c a3"></div>
                            <div class="c a4"></div>
                        </span>
                    </div>
                    <div class="dis1">
                        <div class="btn">
                            <a href="">ADD TO CART</a>
                    
                        </div>
                        <div class="btn">
                    
                            <a href="" class="disitem">VIEW MORE</a>
                        </div>
                    </div>
                    
                
                
                 </div>
                
                
            </div>
        </div>
    </div>
    <div class="container9">
        <a href="" ><i id="icon1" class="fa-solid fa-robot fa-bounce"></i></a>
        <div class="box">
            <div id="l1">
                <i id="icon" class="fa-solid fa-robot"></i><span>leadBot</span>
                <i id="cancle" class="fa-solid fa-xmark con9cancle"></i>
            </div>
            <div class="c1">
                <span class="cdis">
                    <i class="fa-solid fa-robot cicon"></i>
                    <h2>Hi! user</h2>
                    <h2>how can I help you</h2>
                </span>
              
                
                
            </div>
            <div class="c2">
                <input id="cvalue" type="text" placeholder="massage here...">
                <a href="" id="csend">Send</a>
            </div>
        </div>
    </div>
   
</body>
<script src="/js/Auth/home1.js"></script>
</html>