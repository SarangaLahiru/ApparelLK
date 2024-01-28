
var load=document.querySelector('.load')


window.onunload=function(){
    load.classList.remove('onload')
}
window.onbeforeunload=function(){
    load.classList.add('onload')
}



var h1=document.querySelector('.h1')
console.log(h1)
window.addEventListener('scroll',function(){
    if(this.scrollY>630){
        h1.classList.add('h2')
        
    }
    

    else{
        h1.classList.remove('h2')
    }
})

var ad1=document.querySelector('.ad1')
var ad1img=ad1.querySelectorAll('.img')

function next1(){
    var curr=ad1.querySelector('.curr')
    curr.classList.remove('curr')
    if(curr.nextElementSibling){

        curr.nextElementSibling.classList.add('curr')
        
    }
    else{
        ad1img[0].classList.add('curr')
    }
}

var Time1=setInterval(next1,3000)

var ad3=document.querySelector('.ad3')
var slide1=ad3.querySelectorAll('.slide')

function next2(){
    slide1.forEach((item,i)=>{
        item.scrollLeft+=220;
        console.log(item.scrollLeft)
        if(item.scrollLeft>=850){
            item.scrollLeft=0;
        }
    })
    
}

var time2=setInterval(next2,5000)

var ad4=document.querySelector('.ad4')
var slide2=ad4.querySelectorAll('.slide')

function next3(){
    slide2.forEach((item,i)=>{
        item.scrollLeft+=220;
        console.log(item.scrollLeft)
        if(item.scrollLeft>=850){
            item.scrollLeft=0;
        }
    })
    
}

var time3=setInterval(next3,4000)


var micon=h1.querySelector('.micon')
var icon1=micon.querySelector('.icon')
var container1=document.querySelector('.container1')

micon.addEventListener('click',function(e){
    e.preventDefault();
    icon1.classList.toggle('mact')
    container1.classList.toggle('c1act')
})
window.addEventListener('scroll',function(){
    if(this.scrollY<630){
        container1.classList.remove('c1act')
        
        
    }
    if(this.scrollY<630){
        icon1.classList.remove('mact')
        ls[1].classList.add('lsact')
    }
    if(this.scrollY>630){
        ls[0].classList.remove('lsact')
        ls[1].classList.remove('lsact')
        ls[2].classList.remove('lsact')
        ls[3].classList.remove('lsact')
        ls[4].classList.remove('lsact')
    }
})

var box1=container1.querySelector('.box')
var ls=box1.querySelectorAll('.ls')

ls[0].addEventListener('click',function(e){
   // e.preventDefault();
    ls[0].classList.add('lsact')
    ls[1].classList.remove('lsact')
    ls[2].classList.remove('lsact')
    ls[3].classList.remove('lsact')
    ls[4].classList.remove('lsact')

    
    
})
ls[1].addEventListener('click',function(e){
    e.preventDefault();
    ls[1].classList.add('lsact')
    ls[0].classList.remove('lsact')
    ls[2].classList.remove('lsact')
    ls[3].classList.remove('lsact')
    ls[4].classList.remove('lsact')
})
ls[2].addEventListener('click',function(e){
    e.preventDefault();
    ls[2].classList.add('lsact')
    ls[1].classList.remove('lsact')
    ls[0].classList.remove('lsact')
    ls[3].classList.remove('lsact')
    ls[4].classList.remove('lsact')
    
})
ls[3].addEventListener('click',function(e){
    e.preventDefault();
    ls[3].classList.add('lsact')
    ls[1].classList.remove('lsact')
    ls[2].classList.remove('lsact')
    ls[0].classList.remove('lsact')
    ls[4].classList.remove('lsact')
    
})
ls[4].addEventListener('click',function(e){
    e.preventDefault();
    ls[4].classList.add('lsact')
    ls[1].classList.remove('lsact')
    ls[2].classList.remove('lsact')
    ls[0].classList.remove('lsact')
    ls[3].classList.remove('lsact')
    
})

var container2=document.querySelector('.container2')
var menu=container2.querySelector('.menu')
var m=menu.querySelectorAll('.m')
var mact=menu.querySelector('.mact')


var cartcancle=document.querySelector('.cartcancle')
var cartls=document.querySelector('.cartls')
var icart=h1.querySelector('.icart')

icart.addEventListener('click',function(e){
    e.preventDefault();
    cartls.classList.add('actcartls')
})
cartcancle.addEventListener('click',function(e){
    e.preventDefault();
    cartls.classList.remove('actcartls')
})



var container4=document.querySelector('.container4')
var filter=container4.querySelector('.filter')
window.addEventListener('scroll',function(){
    if(scrollY>1100){
        filter.classList.add('actfilter')

        if(this.scrollY>1900){
            filter.classList.add('actfilter1')
        }
        else{
            filter.classList.remove('actfilter1')

        }
    }
    
    else{
        filter.classList.remove('actfilter')
    }
})
var container5=document.querySelector('.container5')
var items=container5.querySelectorAll('.item')
items.ge

var item1m1=items[0].querySelector('.m1')
var item1m2=items[0].querySelector('.m2')
var item1m3=items[0].querySelector('.m3')
var item1m4=items[0].querySelector('.m4')
var disitem1=items[0].querySelector('.disitem');
var item1name=items[0].getElementsByTagName('h2')[0];
var item1price=items[0].querySelector('#price');

console.log(item1price)
    

var item2m1=items[1].querySelector('.m1')
var item2m2=items[1].querySelector('.m2')
var item2m3=items[1].querySelector('.m3')
var item2m4=items[1].querySelector('.m4')
var disitem2=items[1].querySelector('.disitem');
var item2name=items[1].getElementsByTagName('h2')[0];
var item2price=items[1].querySelector('#price');


var item3m1=items[2].querySelector('.m1')
var item3m2=items[2].querySelector('.m2')
var item3m3=items[2].querySelector('.m3')
var item3m4=items[2].querySelector('.m4')
var disitem3=items[2].querySelector('.disitem');
var item3name=items[2].getElementsByTagName('h2')[0];
var item3price=items[2].querySelector('#price');


var item4m1=items[3].querySelector('.m1')
var item4m2=items[3].querySelector('.m2')
var item4m3=items[3].querySelector('.m3')
var item4m4=items[3].querySelector('.m4')
var disitem4=items[3].querySelector('.disitem');
var item4name=items[3].getElementsByTagName('h2')[0];
var item4price=items[3].querySelector('#price');

var item5m1=items[4].querySelector('.m1')
var item5m2=items[4].querySelector('.m2')
var item5m3=items[4].querySelector('.m3')
var item5m4=items[4].querySelector('.m4')
var disitem5=items[4].querySelector('.disitem');
var item5name=items[4].getElementsByTagName('h2')[0];
var item5price=items[4].querySelector('#price');

var item6m1=items[5].querySelector('.m1')
var item6m2=items[5].querySelector('.m2')
var item6m3=items[5].querySelector('.m3')
var item6m4=items[5].querySelector('.m4')
var disitem6=items[5].querySelector('.disitem');
var item6name=items[5].getElementsByTagName('h2')[0];
var item6price=items[5].querySelector('#price');

var item7m1=items[6].querySelector('.m1')
var item7m2=items[6].querySelector('.m2')
var item7m3=items[6].querySelector('.m3')
var item7m4=items[6].querySelector('.m4')
var disitem7=items[6].querySelector('.disitem');
var item7name=items[6].getElementsByTagName('h2')[0];
var item7price=items[6].querySelector('#price');

var item8m1=items[7].querySelector('.m1')
var item8m2=items[7].querySelector('.m2')
var item8m3=items[7].querySelector('.m3')
var item8m4=items[7].querySelector('.m4')
var disitem8=items[7].querySelector('.disitem');
var item8name=items[7].getElementsByTagName('h2')[0];
var item8price=items[7].querySelector('#price');

var item9m1=items[8].querySelector('.m1')
var item9m2=items[8].querySelector('.m2')
var item9m3=items[8].querySelector('.m3')
var item9m4=items[8].querySelector('.m4')
var disitem9=items[8].querySelector('.disitem');
var item9name=items[8].getElementsByTagName('h2')[0];
var item9price=items[8].querySelector('#price');

disitem2.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item2m1.value;
    actm[1].src=item2m2.value;
    actm[2].src=item2m3.value;
    actm[3].src=item2m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item2name.innerHTML;
    itemprize.innerHTML=item2price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;
    
    

    
})
disitem1.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item1m1.value;
    actm[1].src=item1m2.value;
    actm[2].src=item1m3.value;
    actm[3].src=item1m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item1name.innerHTML;
    itemprize.innerHTML=item1price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;
   
})

disitem3.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item3m1.value;
    actm[1].src=item3m2.value;
    actm[2].src=item3m3.value;
    actm[3].src=item3m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item3name.innerHTML;
    itemprize.innerHTML=item3price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;
    

})

disitem4.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item4m1.value;
    actm[1].src=item4m2.value;
    actm[2].src=item4m3.value;
    actm[3].src=item4m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item4name.innerHTML;
    itemprize.innerHTML=item4price.innerHTML;
    imgname.value=actm[0].src;
    itemsname.value=itemname.innerHTML;
    imgprice.value=itemprize.innerHTML;

})
disitem5.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item5m1.value;
    actm[1].src=item5m2.value;
    actm[2].src=item5m3.value;
    actm[3].src=item5m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item5name.innerHTML;
    itemprize.innerHTML=item5price.innerHTML;
    imgname.value=actm[0].src;
    itemsname.value=itemname.innerHTML;
    imgprice.value=itemprize.innerHTML;

})

disitem7.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item7m1.value;
    actm[1].src=item7m2.value;
    actm[2].src=item7m3.value;
    actm[3].src=item7m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item7name.innerHTML;
    itemprize.innerHTML=item7price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;

})

disitem6.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item6m1.value;
    actm[1].src=item6m2.value;
    actm[2].src=item6m3.value;
    actm[3].src=item6m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item6name.innerHTML;
    itemprize.innerHTML=item6price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;

})

disitem8.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item8m1.value;
    actm[1].src=item8m2.value;
    actm[2].src=item8m3.value;
    actm[3].src=item8m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item8name.innerHTML;
    itemprize.innerHTML=item8price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;

})

disitem9.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.add('disbox')
    actm[0].src=item9m1.value;
    actm[1].src=item9m2.value;
    actm[2].src=item9m3.value;
    actm[3].src=item9m4.value;

    simg.src=actm[0].src;
    itemname.innerHTML=item9name.innerHTML;
    itemprize.innerHTML=item9price.innerHTML;
    imgname.value=actm[0].src;
    imgprice.value=itemprize.innerHTML;
    itemsname.value=itemname.innerHTML;

})


var container6=document.querySelector('.container6')
var cancle=container6.querySelector('.vcancle')
var box=container6.querySelector('.box')
var itemname=container6.querySelector('#itemname')
var itemprize=container6.querySelector('#prize')
var imgname=container6.querySelector('.imgname')
var itemsname=container6.querySelector('.itemname')
var imgprice=container6.querySelector('.imgprice')

cancle.addEventListener('click',function(e){
    e.preventDefault();
    box.classList.remove('disbox')


})

var actm=container6.querySelectorAll('.actm')
var img1=container6.querySelectorAll('.img1')
var simg=container6.querySelector('.actsimg')


actm[0].addEventListener('click',function(){
    simg.src=actm[0].src;
    img1[0].classList.add('m')
    img1[1].classList.remove('m')
    img1[2].classList.remove('m')
    img1[3].classList.remove('m')
    
    
})
actm[1].addEventListener('click',function(){
    simg.src=actm[1].src;
     img1[0].classList.remove('m')
     img1[1].classList.add('m')
     img1[2].classList.remove('m')
     img1[3].classList.remove('m')
    
})
actm[2].addEventListener('click',function(){
    simg.src=actm[2].src;

    img1[0].classList.remove('m')
     img1[1].classList.remove('m')
     img1[2].classList.add('m')
     img1[3].classList.remove('m')
    
})
actm[3].addEventListener('click',function(){
    simg.src=actm[3].src;

    img1[0].classList.remove('m')
     img1[1].classList.remove('m')
     img1[2].classList.remove('m')
     img1[3].classList.add('m')
    
})

var search=container2.querySelector('#search')


search.addEventListener('keyup',function(){

    container5.classList.add('c5act')
  
    
    var items=container5.querySelectorAll('.item')
    var searchthing=search.value.toLowerCase();

    for(var i=0; i<items.length; i++){
        

        var itemsname=items[i].getElementsByTagName('h2')[0].innerHTML.toLowerCase();

        console.log(itemsname.indexOf(searchthing))

        if(itemsname.indexOf(searchthing)>-1){
            items[i].style.display='';

        }
        else{
        items[i].style.display="none";
    }
}

})

var container7=document.querySelector('.container7')
var container8=document.querySelector('.container8')
var con8slide=container8.querySelectorAll('.slides')
var itemcon8=container8.querySelectorAll('.item')

window.addEventListener('scroll',function(){
    if(this.scrollY>400){
        container7.classList.add('actcon7')
    }
    if(this.scrollY>700){
        container5.classList.add('actcon5')
    }
    if(this.scrollY>2500){
        container8.classList.add('actcon8')
    }
})

function con8next(){
    con8slide.forEach((item,i)=>{

        item.scrollLeft+=385;
        console.log("g"+item.scrollLeft)

        if(item.scrollLeft>=1154){

            item.scrollLeft=0;
            
        }
    
        
    
    })
}
var con8Time=setInterval(con8next,3000);

var container9=document.querySelector('.container9')
var csend=document.getElementById('csend')
var cvalue=document.getElementById('cvalue')
var c1=container9.querySelector('.c1')
var iconcon9=document.getElementById('icon1')
var boxcon9=container9.querySelector('.box')
var canclecon9=container9.querySelector('.con9cancle')


iconcon9.addEventListener('click',function(e){
    e.preventDefault();

    boxcon9.classList.add('actbox')
    iconcon9.classList.remove('fa-bounce')
    boxcon9.classList.remove('actbox1')

})

canclecon9.addEventListener('click',function(){
    boxcon9.classList.remove('actbox')
    

    
    

})

csend.addEventListener('click',function(e){
    e.preventDefault();

    var udi=document.createElement('div')
    
    udi.classList.add('udis')
    
    var h2=document.createElement('h2')
  
    h2.innerHTML=cvalue.value;
    console.log(h2)

    udi.appendChild(h2)

    c1.appendChild(udi)

    console.log(udi)
    
    


    cdis();
})


function cdis(){
    var cicon=document.createElement('i')

    cicon.classList.add('fa-solid')
    cicon.classList.add('fa-robot')

    

    var cdi=document.createElement('div')
    cdi.appendChild(cicon)
    cdi.appendChild(cicon)
    cdi.classList.add('cdis')
    var h2=document.createElement('h2')
    cdi.appendChild(h2)
    
    

    if(cvalue.value=="hello"){
        h2.innerHTML="how can I help you!"
    }
    if(cvalue.value=="what is your name"){
        h2.innerHTML="I'm leadBot,I work for ApparelLK"
    }
    if(cvalue.value=="can you show me catogeries"){
        h2.innerHTML="sure, we have Men,Women and child ,what do you want?"
    }
    if(cvalue.value=="i like men fashion"){
        h2.innerHTML="let me show you men fashion"

        
    }
    c1.appendChild(cdi)

    c1.scrollTop+=500;
}



