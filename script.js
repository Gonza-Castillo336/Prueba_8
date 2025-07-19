const btnleft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      btn1 = document.querySelector("#slide1"),
      btn2 = document.querySelector("#slide2"),
      btn3 = document.querySelector("#slide3"),
      btn4 = document.querySelector("#slide4"),
      slider = document.querySelector("#slider"),
      slidersection = document.querySelectorAll(".slider-section"); 
       
      btnleft.addEventListener("click", e=>movetoLeft())
      btnRight.addEventListener("click", e=>movetoRight() )
      btn1.addEventListener("click", e=>moveto1())
      btn2.addEventListener("click", e=>moveto2())
      btn3.addEventListener("click", e=>moveto3())
      btn4.addEventListener("click", e=>moveto4())

      setInterval(()=>{
        movetoRight()
      },11000

      )


      let operacion=0;
      counter=0;
      widthimg=100/slidersection.length;


function movetoRight(){
    if(counter>=slidersection.length-1){
    counter=0;
    operacion=0;
    slider.style.transform=`translate(-${operacion}%)`
    slider.style.transition="none"
    return;
}
    counter++;
    operacion=operacion+widthimg;
    slider.style.transform=`translate(-${operacion}%)`
    slider.style.transition="all ease out.6s"  
}


function movetoLeft(){
    counter--;
    if(counter<0){
        counter=slidersection.length-1;
        operacion=widthimg*(slidersection.length-1)
        console.log(operacion)
        slider.style.transform=`translate(-${operacion}%)`
        slider.style.transition="none"
        return;
    }
       
        operacion=operacion-widthimg;
        slider.style.transform=`translate(-${operacion}%)`
        slider.style.transition="all ease out.6s"  
}