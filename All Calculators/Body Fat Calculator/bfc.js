// let gender = 'male';
// height = 50;

document.querySelector('.calculate .gender .male').onclick = function () {
    gender = 'male';
    this.classList.add('active');
    document.querySelector('.calculate . gender .female').className = 'female';
}

document.querySelector('.calculate .gender .male').onclick = function () {
    gender = 'female';
    this.classList.add('active');
    document.querySelector('.calculate . gender .male').className = 'male';
}

document.querySelector('.calculate .age input').onchange = function () {
    age = parseInt(this.value);
    document.querySelector('.calculate .age .val span').innerText = age;
}

document.querySelector('.calculate .age .val i.add').onclick = function () {
    age += 1;
    age = (age > 70) ? 70 : age;
    document.querySelector('.calculate .age .val span').innerText = age;
    document.querySelector('.calculate .age input').value = age;
}

document.querySelector('.calculate .age .val i.sub').onclick = function () {
    age -= 1;
    age = (age < 10) ? 10 : age;
    document.querySelector('.calculate .age .val span').innerText = age;
    document.querySelector('.calculate .age input').value = age;
}


document.querySelector('.calculate .height input').onchange = function () {
    height = parseInt(this.value);
    document.querySelector('.calculate .height .val span').innerText = height;
}

document.querySelector('.calculate .height .val i.add').onclick = function () {
    height += 1;
    height = (height > 220) ? 220 : height;
    document.querySelector('.calculate .height .val span').innerText = height;
    document.querySelector('.calculate .height input').value = height;
}

document.querySelector('.calculate .height .val i.sub').onclick = function () {
    height -= 1;
    height = (height < 50) ? 50 : height;
    document.querySelector('.calculate .height .val span').innerText = height;
    document.querySelector('.calculate .height input').value = height;
}

document.querySelector('.calculate .weight input').onchange = function () {
    weight = parseInt(this.value);
    document.querySelector('.calculate .weight .val span').innerText = weight;
}

document.querySelector('.calculate .weight .val i.add').onclick = function () {
    weight += 1;
    weight = (weight > 180) ? 180 : weight;
    document.querySelector('.calculate .weight .val span').innerText = weight;
    document.querySelector('.calculate .weight input').value = weight;
}

document.querySelector('.calculate .weight .val i.sub').onclick = function () {
    weight -= 1;
    weight = (weight < 10) ? 10 : weight;
    document.querySelector('.calculate .weight .val span').innerText = weight;
    document.querySelector('.calculate .weight input').value = weight;
}

document.querySelector('.calculate .neck input').onchange = function () {
    neck = parseInt(this.value);
    document.querySelector('.calculate .neck .val span').innerText = neck;
}

document.querySelector('.calculate .neck .val i.add').onclick = function () {
    neck += 1;
    neck = (neck > 30) ? 30 : neck;
    document.querySelector('.calculate .neck .val span').innerText = neck;
    document.querySelector('.calculate .neck input').value = neck;
}

document.querySelector('.calculate .neck .val i.sub').onclick = function () {
    neck -= 1;
    neck = (neck < 10) ? 10 : neck;
    document.querySelector('.calculate .neck .val span').innerText = neck;
    document.querySelector('.calculate .neck input').value = neck;
}



document.querySelector('.calculate .waist input').onchange = function () {
    waist = parseInt(this.value);
    document.querySelector('.calculate .waist .val span').innerText = waist;
}

document.querySelector('.calculate .waist .val i.add').onclick = function () {
    waist += 1;
    waist = (waist > 50) ? 50 : waist;
    document.querySelector('.calculate .waist .val span').innerText = waist;
    document.querySelector('.calculate .waist input').value = waist;
}

document.querySelector('.calculate .waist .val i.sub').onclick = function () {
    waist -= 1;
    waist = (waist < 15) ? 15 : waist;
    document.querySelector('.calculate .waist .val span').innerText = waist;
    document.querySelector('.calculate .waist input').value = waist;
}




document.querySelector('.calculate .calc').onclick = function () {

    if (document.getElementById('male').checked) {
        

        let bmr = ((10 * weight) + (6.25 * height) - (5 * age) + 5).toFixed(2);
        height = 50;
        weight = 10;
        age = 10;
        document.querySelector('.calculate .weight input').value = weight;
        document.querySelector('.calculate .weight .val span').innerText = weight;
        document.querySelector('.calculate .height input').value = height;
        document.querySelector('.calculate .height .val span').innerText = height;
        document.querySelector('.calculate .age input').value = age;
        document.querySelector('.calculate .age .val span').innerText = age;

        document.querySelector('.result .bmi .val').innerText = bmr;
        
        //Male radio button is checked

    }
    else if (document.getElementById('female').checked) {


        let bmr = ((10 * weight) + (6.25 * height) - (5 * age) - 161).toFixed(2);
        height = 50;
        weight = 10;
        age = 10;
        document.querySelector('.calculate .weight input').value = weight;
        document.querySelector('.calculate .weight .val span').innerText = weight;
        document.querySelector('.calculate .height input').value = height;
        document.querySelector('.calculate .height .val span').innerText = height;
        document.querySelector('.calculate .age input').value = age;
        document.querySelector('.calculate .age .val span').innerText = age;
        


        document.querySelector('.result .bmi .val').innerText = bmr;
        //Female radio button is checked
    }
    
    


    document.querySelector('.calculate').style.display = 'none';
    document.querySelector('.result').style.display = 'flex';
}

document.querySelector('.result .recal').onclick = function () {
    document.querySelector('.result').style.display = 'none';
    document.querySelector('.calculate').style.display = 'flex';
}


