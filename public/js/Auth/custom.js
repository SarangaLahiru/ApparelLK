var load=document.querySelector('.load')


window.onunload=function(){
    load.classList.remove('onload')
}
window.onbeforeunload=function(){
    load.classList.add('onload')
}



var cartcancle=document.querySelector('.cartcancle')
var cartls=document.querySelector('.cartls')
var icart=document.querySelector('.icart')

icart.addEventListener('click',function(e){
    e.preventDefault();
    cartls.classList.add('actcartls')
})
cartcancle.addEventListener('click',function(e){
    e.preventDefault();
    cartls.classList.remove('actcartls')
})


var container3=document.querySelector('.container3')
var color=document.querySelectorAll('.c')

color[0].addEventListener('click',function(){
    color[0].classList.add('curr')
    color[1].classList.remove('curr')
    color[2].classList.remove('curr')
    color[3].classList.remove('curr')
    color[4].classList.remove('curr')

    vimg.src='/images/img/custom/item1/cust/Untitled-1.png'
    dimg[0].src='/images/img/custom/item1/cust/Untitled-1.png'
    dimg[1].src='/images/img/custom/item1/cust/Untitled-2.png'
    dimg[2].src='/images/img/custom/item1/cust/Untitled-3.png'
})
color[1].addEventListener('click',function(){
    color[1].classList.add('curr')
    color[0].classList.remove('curr')
    color[2].classList.remove('curr')
    color[3].classList.remove('curr')
    color[4].classList.remove('curr')

    vimg.src='/images/img/custom/item1/cust/Untitled-p1.png'
    dimg[0].src='/images/img/custom/item1/cust/Untitled-p1.png'
    dimg[1].src='/images/img/custom/item1/cust/Untitled-p2.png'
    dimg[2].src='/images/img/custom/item1/cust/Untitled-p3.png'
})
color[2].addEventListener('click',function(){
    color[2].classList.add('curr')
    color[1].classList.remove('curr')
    color[0].classList.remove('curr')
    color[3].classList.remove('curr')
    color[4].classList.remove('curr')

    vimg.src='/images/img/custom/item1/cust/Untitled-y1.png'
    dimg[0].src='/images/img/custom/item1/cust/Untitled-y1.png'
    dimg[1].src='/images/img/custom/item1/cust/Untitled-y2.png'
    dimg[2].src='/images/img/custom/item1/cust/Untitled-y3.png'
})
color[3].addEventListener('click',function(){
    color[3].classList.add('curr')
    color[1].classList.remove('curr')
    color[2].classList.remove('curr')
    color[0].classList.remove('curr')
    color[4].classList.remove('curr')

    vimg.src='/images/img/custom/item1/cust/Untitled-r1.png'
    dimg[0].src='/images/img/custom/item1/cust/Untitled-r1.png'
    dimg[1].src='/images/img/custom/item1/cust/Untitled-r2.png'
    dimg[2].src='/images/img/custom/item1/cust/Untitled-r3.png'
})
color[4].addEventListener('click',function(){
    color[4].classList.add('curr')
    color[1].classList.remove('curr')
    color[2].classList.remove('curr')
    color[3].classList.remove('curr')
    color[0].classList.remove('curr')

    vimg.src='/images/img/custom/item1/cust/Untitled-b1.png'
    dimg[0].src='/images/img/custom/item1/cust/Untitled-b1.png'
    dimg[1].src='/images/img/custom/item1/cust/Untitled-b2.png'
    dimg[2].src='/images/img/custom/item1/cust/Untitled-b3.png'
})


var logo=container3.querySelectorAll('.l')

logo[0].addEventListener('click',function(){
    logo[0].classList.add('curr')
    logo[1].classList.remove('curr')
    logo[2].classList.remove('curr')
    logo[3].classList.remove('curr')
    logo[4].classList.remove('curr')

    logoact1.src='/images/img/custom/item1/cust/log1.png'
})
logo[1].addEventListener('click',function(){
    logo[1].classList.add('curr')
    logo[0].classList.remove('curr')
    logo[2].classList.remove('curr')
    logo[3].classList.remove('curr')
    logo[4].classList.remove('curr')
    logoact1.src='/images/img/custom/item1/cust/log2.png'
})
logo[2].addEventListener('click',function(){
    logo[2].classList.add('curr')
    logo[1].classList.remove('curr')
    logo[0].classList.remove('curr')
    logo[3].classList.remove('curr')
    logo[4].classList.remove('curr')
    logoact1.src='/images/img/custom/item1/cust/log3.png'
})
logo[3].addEventListener('click',function(){
    logo[3].classList.add('curr')
    logo[1].classList.remove('curr')
    logo[2].classList.remove('curr')
    logo[0].classList.remove('curr')
    logo[4].classList.remove('curr')
    logoact1.src='/images/img/custom/item1/cust/log4.png'
})
logo[4].addEventListener('click',function(){
    logo[4].classList.add('curr')
    logo[1].classList.remove('curr')
    logo[2].classList.remove('curr')
    logo[3].classList.remove('curr')
    logo[0].classList.remove('curr')
    logoact1.src='/images/img/custom/item1/cust/log5.png'
})



var vimg=container3.querySelector('.vimg')
var dimg=container3.querySelectorAll('.dimg')
vimg.src=dimg[0].src;

dimg[0].addEventListener('click',function(){
    vimg.src=dimg[0].src;
    dimg[0].classList.add('dimgs')
    dimg[1].classList.remove('dimgs')
    dimg[2].classList.remove('dimgs')
})

dimg[1].addEventListener('click',function(){
    vimg.src=dimg[1].src;
    dimg[1].classList.add('dimgs')
    dimg[0].classList.remove('dimgs')
    dimg[2].classList.remove('dimgs')
})
dimg[2].addEventListener('click',function(){
    vimg.src=dimg[2].src;
    dimg[2].classList.add('dimgs')
    dimg[0].classList.remove('dimgs')
    dimg[1].classList.remove('dimgs')
})

var container1=document.querySelector('.container1')

var coloract=container3.querySelector('.color')
var logoact=container3.querySelector('.logo')
var textact=container3.querySelector('.text')
var logoact1=container3.querySelector('.logoact')
var tcustom=container3.querySelector('.tcustom')

var icon1=container1.querySelectorAll('.icon1')

coloract.classList.add('act')

icon1[0].addEventListener('click',function(e){
    e.preventDefault();
    icon1[0].classList.add('acticon1')
    icon1[1].classList.remove('acticon1')
    icon1[2].classList.remove('acticon1')
    coloract.classList.add('act')
    logoact.classList.remove('act')
    textact.classList.remove('act')
    logoact1.classList.remove('lgact')
    tcustom.classList.remove('actcustom')
    

  
})
icon1[1].addEventListener('click',function(e){
    e.preventDefault();
    icon1[1].classList.add('acticon1')
    icon1[0].classList.remove('acticon1')
    icon1[2].classList.remove('acticon1')

    coloract.classList.remove('act')
    logoact.classList.add('act')
    textact.classList.remove('act')
    logoact1.classList.add('lgact')
    tcustom.classList.remove('actcustom')
    

  
})
icon1[2].addEventListener('click',function(e){
    e.preventDefault();
    icon1[2].classList.add('acticon1')
    icon1[0].classList.remove('acticon1')
    icon1[1].classList.remove('acticon1')

    coloract.classList.remove('act')
    logoact.classList.remove('act')
    textact.classList.add('act')
    logoact1.classList.remove('lgact')
    tcustom.classList.add('actcustom')

  
})

var tapply=document.getElementById('tapply')
var tcapply=tcustom.getElementsByTagName('h2')[0];
var usert=document.querySelector('.usert')

tapply.addEventListener('click',function(e){
    e.preventDefault()
    tcapply.innerHTML=usert.value;

})