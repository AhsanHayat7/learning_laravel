// let div = document.querySelector('div');
// // console.log(div);


// let newb = document.createElement("button");
// newb.innerText = "Click here";
// console.log(newb);
// div.append(newb); // add at the end of node(outside)
// div.prepend(newb); // add at the start of node (inside)
// div.before(newb);  // add before the node (outside)
// div.after(newb);   //  add after the node (outside)
// div.remove(newb);    // remove the node       
// div.style.backgroundColor="green";
// div.style.fontSize ="20px";
// div.innerText = "Ready to learn JavaScript";
// div.style.visibility = "hidden";


// let val = div.getAttribute('id');
// console.dir(val);


// let name = div.getAttribute('name');
// console.log(name);

// let clas = document.querySelector('p');
// console.log(clas);

// let para = clas.getAttribute('class');
// console.dir(para);

// let para = document.querySelector('p');
// console.log(para.setAttribute('class','newclass'));


// let heading =document.createElement('h1');
// heading.innerHTML = "<li>Iam new to learn JavaScript</li>";

// document.querySelector("body").prepend(heading);

// const p = document.createElement("p");
// p.innerText= "This is my paragraph child";
// console.log(document.body.appendChild(p));
// document.body.removeChild(p);

//appendchild
//removechild

//Q1 Create a new button element.Give it a text "Click me",background color of red and text color of white
//Insert the button as the first element inside the body tag



let bu = document.createElement('button')
bu.innerText = "Click here!";
bu.style.backgroundColor ="black";
bu.style.color ="red";
document.querySelector('body').prepend(bu);


//Q1 Create a <p> tag in html ,give it a class and some styling.
//Now Create a new class in CSS and try to append this class to the <p> element

//Did you notice how you overwrite the class name when you add a new one?
//Solve this problem using the classlist


let par =document.querySelector('p');
// let h = par.getAttribute('class')
// let h = par.setAttribute("class","new");
let h = par.classList.add("new");
console.log(par.classList)
// let n = par.classList.remove("new");
console.log(h)
// console.dir(n);
