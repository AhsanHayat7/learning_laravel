// The window object represents an open window in a browser.It is browser's object (not Javascripts) and is automatically created by browser
// It is a global object with lots of properties and methods

// alert("Hello!")


//DOM Manipulation
// console.dir(window.document) //to print the method and properties of special objects 
console.dir(document.body);
console.log(document.body);
console.log(document.head);
console.log(document.body.childNodes[1]);

let header = document.getElementById("heading");   // unique id
console.dir(heading);


let headings = document.getElementsByClassName("heading-class") // returned html collection  
console.dir(headings)


let paragraphs = document.getElementsByTagName("p")
console.dir(paragraphs)


let elements = document.querySelector("p").children;  // 1st element  (.heading-class) and (#id)
console.dir(elements)

let queryall = document.querySelectorAll("p") // all elements (.heading-class)  and (#id)
console.dir(queryall)

// nodes ->firstnode and last node
//Node types ->text nodes ->commnet->elements

// body is the parent ->div and script are child

console.dir(document.body.firstChild);


let children = document.querySelector("div").children; // children properties for navigations 
console.dir(children);

//div.innerText;

let div = document.querySelector("div"); // children properties for navigations 
console.dir(div.innerText);


//div.innerhtml


let head = document.querySelector("h3")  //  h2.innerText
console.dir(head);

let h2 =document.querySelector("h2").tagName; //  h2.innerText
console.log(h2)                       //h2.textContent to provide the hidden category 

//Q1 Create a H2 heading element with text- "Hello javascript".Append"from University of karachi students to this text using js."


let h = document.querySelector("h4");
// console.dir(h4.innerText);

h4inner = h.innerText + " from University of karachi students";

console.dir(h4inner);

// Q2 Create 3 divs with common class name - "box".Acsess them and add some unique text to each of them

let divs = document.querySelectorAll('.box');

let index= 1;
for(let div of divs){
    div.innerText = `This is the ${index} framework in the article`;
index++;}
// divs[0].innerText = "This is the Framework of Python Languages";
// divs[1].innerText = "This is the Framework of CSS Languages";
// divs[2].innerText = "This is the Framework of PHP Languages";







