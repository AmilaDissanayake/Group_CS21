// let gender = 'male';
// height = 50;

function bmiV(height, weight) {
    var bmi=(weight*10000)/(height*height);
    return(bmi);
}


document.querySelector('.calculate4 .gender4 .male4').onclick = function () {
    gender = 'male4';
    this.classList.add('active');
    document.querySelector('.calculate4 .gender4 .female4').className = 'female4';
}

document.querySelector('.calculate4 .gender4 .male4').onclick = function () {
    gender = 'female4';
    this.classList.add('active');
    document.querySelector('.calculate4 . gender4 .male4').className = 'male4';
}

document.querySelector('.calculate4 .age4 input').onchange = function () {
    age = parseInt(this.value);
    document.querySelector('.calculate4 .age4 .val4 span').innerText = age;
}

document.querySelector('.calculate4 .age4 .val4 i.add4').onclick = function () {
    age += 1;
    age = (age > 70) ? 70 : age;
    document.querySelector('.calculate4 .age4 .val4 span').innerText = age;
    document.querySelector('.calculate4 .age4 input').value = age;
}

document.querySelector('.calculate4 .age4 .val4 i.sub4').onclick = function () {
    age -= 1;
    age = (age < 10) ? 10 : age;
    document.querySelector('.calculate4 .age4 .val4 span').innerText = age;
    document.querySelector('.calculate4 .age4 input').value = age;
}


document.querySelector('.calculate4 .height4 input').onchange = function () {
    height = parseInt(this.value);
    document.querySelector('.calculate4 .height4 .val4 span').innerText = height;
}

document.querySelector('.calculate4 .height4 .val4 i.add4').onclick = function () {
    height += 1;
    height = (height > 220) ? 220 : height;
    document.querySelector('.calculate4 .height4 .val4 span').innerText = height;
    document.querySelector('.calculate4 .height4 input').value = height;
}

document.querySelector('.calculate4 .height4 .val4 i.sub4').onclick = function () {
    height -= 1;
    height = (height < 50) ? 50 : height;
    document.querySelector('.calculate4 .height4 .val4 span').innerText = height;
    document.querySelector('.calculate4 .height4 input').value = height;
}

document.querySelector('.calculate4 .weight4 input').onchange = function () {
    weight = parseInt(this.value);
    document.querySelector('.calculate4 .weight4 .val4 span').innerText = weight;
}

document.querySelector('.calculate4 .weight4 .val4 i.add4').onclick = function () {
    weight += 1;
    weight = (weight > 180) ? 180 : weight;
    document.querySelector('.calculate4 .weight4 .val4 span').innerText = weight;
    document.querySelector('.calculate4 .weight4 input').value = weight;
}

document.querySelector('.calculate4 .weight4 .val4 i.sub4').onclick = function () {
    weight -= 1;
    weight = (weight < 10) ? 10 : weight;
    document.querySelector('.calculate4 .weight4 .val4 span').innerText = weight;
    document.querySelector('.calculate4 .weight4 input').value = weight;
}


document.querySelector('.calculate4 .calc4').onclick = function () {

    if (document.getElementById('male4').checked) {
        

        let bfc = (-44.988+(0.503*age)+(3.172*bmiV(height, weight))-(0.026*bmiV(height, weight)*bmiV(height, weight))-(0.02*bmiV(height, weight)*age)+(0.00021*bmiV(height, weight)*bmiV(height, weight)*age)).toFixed(2);
        height = 50;
        weight = 10;
        age = 10;
        document.querySelector('.calculate4 .weight4 input').value = weight;
        document.querySelector('.calculate4 .weight4 .val4 span').innerText = weight;
        document.querySelector('.calculate4 .height4 input').value = height;
        document.querySelector('.calculate4 .height4 .val4 span').innerText = height;
        document.querySelector('.calculate4 .age4 input').value = age;
        document.querySelector('.calculate4 .age4 .val4 span').innerText = age;
        
        document.querySelector('.result4 .bmi4 .val4').innerText = bfc;
        
        //Male radio button is checked

    }
    else if (document.getElementById('female4').checked) {


        let bfc = (-44.988+(0.503*age)+(10.689)+(3.172*bmiV(height, weight))-(0.026*bmiV(height, weight)*bmiV(height, weight))+(0.181*bmiV(height, weight))-(0.02*bmiV(height, weight)*age)-(0.005*bmiV(height, weight)*bmiV(height, weight))+(0.00021*bmiV(height, weight)*bmiV(height, weight)*age)).toFixed(2);
        height = 50;
        weight = 10;
        age = 10;
        document.querySelector('.calculate4 .weight4 input').value = weight;
        document.querySelector('.calculate4 .weight4 .val4 span').innerText = weight;
        document.querySelector('.calculate4 .height4 input').value = height;
        document.querySelector('.calculate4 .height4 .val4 span').innerText = height;
        document.querySelector('.calculate4 .age4 input').value = age;
        document.querySelector('.calculate4 .age4 .val4 span').innerText = age;
        


        document.querySelector('.result4 .bmi4 .val4').innerText = bfc;
        //Female radio button is checked
    }
    
    


    document.querySelector('.calculate4').style.display = 'none';
    document.querySelector('.result4').style.display = 'flex';
}

document.querySelector('.result4 .recal4').onclick = function () {
    document.querySelector('.result4').style.display = 'none';
    document.querySelector('.calculate4').style.display = 'flex';
}


