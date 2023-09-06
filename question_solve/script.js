function calculate(){
    let weight = Number(document.getElementById("weight").value);
    let height = Number(document.getElementById("height").value);

    height = height / 100;
    weight = weight / 2.2046;

    let result = weight / (height * height);
    let status = "";

    if(result > 0 && result < 20){
        status = "bad";
    }
    else if(result >= 20 && result < 30){
        status = "not bad";
    }
    else{
        status = "not good";
    }

    document.getElementById("result").innerText = result.toFixed(2);
    document.getElementById("status").innerText = status;
}