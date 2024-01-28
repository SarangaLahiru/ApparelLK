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


var container1=document.querySelector('.container1')
var box1=container1.querySelector('.box')
var ls=box1.querySelectorAll('.ls')

ls[0].addEventListener('click',function(e){
    e.preventDefault();
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