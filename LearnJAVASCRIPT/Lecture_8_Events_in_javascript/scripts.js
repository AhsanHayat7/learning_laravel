 let btn1 = document.querySelector("#btn1");
// btn1.onclick = (e) => {
//     console.log("btn1 was clicked");
//     let a = 25;
//     a++;
//     console.log(a);
//     console.log(e);
//     console.log(e.type);
//     console.log(e.target);
// }


// let div1 = document.querySelector('div');
// div1.onmouseover = (e) => {
//     console.log("You are inside div");
//     console.log(e.type);
//     console.log(e.target);
//     console.log(e.clientX,e.clientY);
//     console.log(e);
// }

btn1.addEventListener("click", () =>{
    console.log("button 1 was clicked -handler1")
});


btn1.addEventListener("click", (e) =>{
    console.log("button was clicked -handler2 ");
    // console.log(e.type);
    // console.log(e);
    // console.log(e.clientX,e.clientY)
});


const handler3 = ()=>{
    console.log("Button was clicked -handler3")
}

btn1.addEventListener("click",handler3);


// btn1.addEventListener("click", (e) =>{
//     console.log("button was clicked -handler4 ");
// });

// btn1.removeEventListener("click",handler3);


//Q1 Create a toggle button that changes the screen to dark mode-when clicked and light mode when clicked again.        

let butmod = document.querySelector("#butt");
let body = document.querySelector("body");
let mood = "light";
butmod.addEventListener("click", ()=>{
    if(mood === "light"){
        mood = "dark";
        // document.querySelector("body").style.backgroundColor = "black";
        body.classList.add("dark");
        body.classList.remove("light");
    }else{
        mood = "light"
        // document.querySelector("body").style.backgroundColor = "white";
        body.classList.add("light");
        body.classList.remove("dark");
    }

    console.log(mood);
});

document.addEventListener("DOMContentLoaded",() => {
let mous = document.querySelector("#div");
    mous.onmouseover = ()=>{
        console.log("The color of div box is chnaged to brown");
        mous.style.backgroundColor = "brown";
    };

    mous.onmouseout = ()=>{
        console.log("The colour of div box is changed to blue"); 
        mous.style.backgroundColor = "blue";
    };

});