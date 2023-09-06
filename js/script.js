// alert("Hello");

function clicked(){
    document.getElementById("button_1").value = "Clicked";
    document.getElementById("button_1").style.backgroundColor = "green";
}

function not_clicked(){
    document.getElementById("button_1").value="Click Here";
    document.getElementById("button_1").style.backgroundColor = "red";
    document.getElementById("button_1").style.marginLeft = "0px";
}

function hover(){
    document.getElementById("button_1").value = "Hovering Here";
    document.getElementById("button_1").style.backgroundColor = "orange";
    document.getElementById("button_1").style.marginLeft = "400px";
}

function hover_away(){
    not_clicked();
}

function calculate(){
    let celsius = Number(document.getElementById("input_1").value);
    let fahrenheit = (celsius * 9/5) + 32;
    document.getElementById("result").value = fahrenheit;
}

function sum(){
    let num1 = Number(document.getElementById("sum_1").value);
    let num2 = Number(document.getElementById("sum_2").value);

    let res = num1 + num2;

    document.getElementById("ans").innerHTML = res;
}

function calc(op){
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let res = 0;

    if(op=='+'){
        res = num1 + num2;
    }
    else if(op=='-'){
        res = num1 - num2;
    }
    else if(op=='*'){
        res = num1 * num2;
    }
    else{
        res = num1 / num2;
    }

    document.getElementById("answer").value = res;

}

function show(item){
    document.getElementById("item").innerText = item;
}

function bill(){
    let quantity = Number(document.getElementById("quantity").value);
    let tips = Number(document.getElementById("tips").value);
    let delivery = document.getElementById("home_yes").checked;
    
    let price_each = 12.5;
    let price = 0;


    if(quantity > 0 && quantity <= 10){
        price = (quantity*price_each);
        let discount = (price * 10) / 100;
        price = price - discount;
    }
    else if(quantity > 10 && quantity <= 20){
        price = (quantity*price_each);
        let discount = (price * 15) / 100;
        price = price - discount;
    }
    else{
        price = (quantity*price_each);
        let discount = (price * 20) / 100;
        price = price - discount;
    }
    price = price + ((20 * price) / 100);
  
    if(delivery){
        price = price + 50;
    }
    price = price + tips;
    document.getElementById("total").innerText = price;
}

function sum_each_digit(){
    let num = Number(document.getElementById("input1").value);
    let digits = [];
    let temp = num;
    let i = 0;
    while(temp>0){
        let digit = temp % 10;
        digits[i] = digit;
        i = i + 1;
        temp = Math.floor(temp/10);
    }
    let j;
    let sum = 0;
    for(j = 0; j<i; j++){
        sum = sum + digits[j];
    }

    document.getElementById("result").value = sum;
}
