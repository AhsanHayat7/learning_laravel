//Arrays
// maximum thing in javascript most things are objects
// string are immutable in javascript and python
// Arrays are muutable or can be changed


//Loops are iterable -> (string,arrays,objects)
// string are collection of characters
// arrays are collection of similar type items
// object are collection of keys and pairs


let marks = [96,75,48,83,66];
console.log(marks); // arrays are oject with keys and values 
console.log(marks.length);



let heroes =['superman','batman','spiderman','captian america','dr strange'];
console.log(heroes);
console.log(heroes[0]);
console.log(heroes[1]);
console.log(heroes[2]);

//For loops
console.log('\n');

for(let i = 0 ; i< heroes.length; i++){
    console.log(heroes[i])
}



console.log('\n');

//for of 
for(let h of heroes){
    console.log(h)
}


//for in
for(let i in marks){
    console.log(i);
}



console.log('\n');

let cities = ['New york','karachi','Tokiyo','Paris','London','Mummbai','Dubai'];
for(let c of cities){
    console.log(c.toUpperCase());
}


//Q1 For a given array with a marks of students->[85,97,44,37,76,60]
//Find the average marks of the entire class.


let scores = [85,97,44,37,76,60];

let sum = 0 ;

for(let m of scores){
    sum = sum + m;
}


console.log("The total of the scores are = ", sum);
let average = sum / scores.length;
console.log("The average of the sum is = ", average);


//For a given array with prices of 5 items ->[250,645,300,900,50] All items have an offer of 10% OFF on them.Change the array to store final price after applying offer.

let i =0;
let prices = [250,645,300,900,50];
for(let p of prices){
    let g = p/10 ;
    prices[i] = prices[i] - g;
    console.log(`Items before offer = ${p}`);
    console.log(`Items after 10% off = ${prices[i]}`);
    i++;
}
        

console.log('\n');

let j = 0;
let numbers = [250,645,300,900,50];
for(let n of numbers){
    console.log(`The prices of the itmes before offer is ${n}`);
    let offer = n/10;
    numbers[j] -=  offer;
    console.log(`The prices of the items after offer is ${numbers[j]}`);
    j++;
}



console.log('\n');
let num = [250,645,300,900,50];
for(let k =0; k<num.length; k++){
    let off = num[k]/10;
    num[k] = num[k] - off;
}
console.log(`The price after off is ${num}`);




console.log('\n');
//Array methods

// push() : add to end

let animals = ['Lion','Monkey','Elephant','Zebra'];
animals.push('Tiger','Cat','Snake','Wolf');
console.log(animals);


//Pop () delete from end and return
let deletevalue = animals.pop();
console.log(animals);
console.log(`The delete value of the arrays from the end is ${deletevalue}`)

// toString() : converts array to string



console.log(animals.toString());



// Concat() : joins multiple arrays and returns result

let marvel_heroes = ['spiderman','ironman','thor'];
let dc_heroes = ['superman','batman']

console.log(marvel_heroes.concat(dc_heroes));


//unshift() : add to start in an array

marvel_heroes.unshift("Antman");
console.log(marvel_heroes);


//shift delete from the start and return

marvel_heroes.shift('Antman');
console.log(marvel_heroes);


//slice : returns a piece of the array


console.log(marvel_heroes.slice(0,2));



//splice() : change original array(add,remove,replace)

// splice(startidx,delcount,newEl1)
marvel_heroes.splice(0,1,"Capitan America");
console.log(marvel_heroes);

marvel_heroes.splice(1,2,"Wolverine","Hulk");
console.log(marvel_heroes);


//Q1 Create an array to store companies->["Bloomberg","Microsoft","Uber","Google","IBM","Netflix"];

// a) remove the first company from the array
// b) remove Uber and Add Ola in its place
// c) Add Amazon at the end



let companies = ["Bloomberg","Microsoft","Uber","Google","IBM","Netflix"];

companies.shift('Bloomberg');
companies.splice(1,1,"Ola");
companies.push("Amazone");
console.log(companies);



