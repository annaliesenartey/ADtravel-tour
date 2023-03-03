
let close_btn = document.querySelector('#close')
let ham = document.querySelector('#ham')

let nav = document.querySelector('.side-nav')
alert("Hello")

close_btn.addEventListener('click',function(){
    nav.style.display = "none"
    ham.style.display = "block"
   

})
ham.addEventListener('click',function(){
    nav.style.display = "block"
    ham.style.display = "none"
   
})
// ham.addEventListener('click', function(){
//     nav.classList.add('sidebar--visible')
// })

// close_btn.addEventListener('click', function(){
//     if (nav.classList.contains('sidebar--visible')){
//         sidebar.classList.remove('sidebar--visible')
//     }
// })
