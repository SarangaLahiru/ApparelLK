var load=document.querySelector('.load')
var icon=load.querySelector('.icon')


window.onunload=function(){
    icon.classList.remove('actload')
}
window.onbeforeunload=function(){
    icon.classList.add('actload')
}
