
// loop are usde to execute the loop again and again

for(let i=1;i<=5;i++){
    console.log("hello welcome to learn javascripts");}


for(let num= 1; num<=5; num++){
    console.log("num : ",num);
}


// calculate the sum of the 1 to 5;
let sum = 0;
for(let i = 1; i <=5; i++){
    sum = sum + i; 
};
console.log("Sum : ",sum)  


// Do not use infinte loops 


// while loops

let i = 1;
while(i <= 5){
    console.log(i);
    i++;
}

for(let a = 1; a<=9; a++){
    console.log(a);
}

// do while loops

let x = 1;
do{
    console.log(x);
    x++;        
    }while(x <=5);


// (for of )loops are used to loop on arrays and strings


let name = "tony";

for(let i of name){     // iterator get -> characters
    console.log("i =" ,i);
}


let language = "Javascript";

let size = 0;
for(let c of language){
    console.log("c = ",c);
    size++;
}
console.log("The size of the language of the code is : " , size);


//for in loops->returns the keys of the object

let student = {
    Name : "JOhn Alex",
    Rollno : 123,
    CGPA : 3.2,
};


for(let key in student){
    console.log("key = ",key ," Value = ",student[key]);
}


//Q1 Print all the number from 0 to 100;



for(let x =0 ; x<=100 ;x++ ){
    if(x%2 == 0)
    console.log("numbers = ",x);
}


//Q2 Create a game where you start with any game number:Ask the user to keep guessing the game number until the user enters correct value.


let gameNum = 6;
let userNum = prompt("Guess the number.");

while(gameNum !=userNum){
    userNum =prompt("You Entered a wrong number . Guess it agian.");
}

console.log("Congragulations You have Entered a right number." ,userNum);






// let user = prompt("Enter your number");
//     console.group(user);
// if(user==25){
//     console.log("You have write a correct number");
// }else{
//     console.log("You have write a wrong number");
// }


// let gameNum = 25;

// let userNum = prompt("Guess the game number");

// while(userNum != gameNum){
//     userNum=prompt("You Entered a Wrong number : Guess again");
// }

// console.log("Congragulations you have Guess the right number");

//string

let k = "ahsan";
let f ="lala";

console.log(k);
console.log(f);


console.log(k[0]);



//Template literals -> made with backtick

let specialstring = `this is your special string ${1+2+3}`;
console.log(specialstring);


let obj = {
    name : "watson",
    gmail : "watson@gmail.com",
    roll : 6,
};

let details = `The name of the person is ${obj.name} and roll number is ${obj.roll}.`
console.log(details);
console.log("The user name is",name,"the gmail of ",name ," is",obj.gmail, "and the roll no is",obj.roll);


console.log("HEllo \n Everyone");
console.log("HEllo \t Everyone");


let subject = "Mathematics\tComputerScience";
console.log(subject.length);


let bio =`this person belongs to karachi`;
console.log(bio.toUpperCase());
console.log(bio.slice(22,30));


let nuclear = "NUCLEAR BELONG TO PAKSITAN ";
console.log(nuclear.toLowerCase());


let bomb = "        nuclear bomb is the world largest explosive in the world    ";
console.log(bomb.trim());
console.log(nuclear.concat(bomb.trim()));



let game = "Cell of beauty";
let b = game.replace("C", "c")
            .replace("e", "a")
            .replace("beauty","duty");
console.log(b);




let country = "Pakistan";
console.log(country.charAt(6));



//Q1 Prompt the user to enter their full name.Generate a username for them based on the input.Start username with @,followed by their full name and ending name with fullname lenght;
// eg: user name = "Watson", user name should be "@Watson1243"


//  let userName = prompt("Enter your Full Name "); -> this is also the right way to do the above solutions and also the below one
//  k = `@`+`${userName}`+`${userName.length}`;
//  console.log(k);


let Name = prompt("Enter your full name");
let user = "@" + Name + Name.length;
console.log(user);




