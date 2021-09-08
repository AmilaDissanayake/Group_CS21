// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var myAudio = document.getElementById("myAudio");
var isPlaying = false;

function togglePlay() {
    isPlaying ? myAudio.pause() : myAudio.play();
};

myAudio.onplaying = function () {
    isPlaying = true;
};
myAudio.onpause = function () {
    isPlaying = false;
};




let gender = 'male';
height = 50;

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

document.querySelector('.calculate .calc').onclick = function () {
    let bmi = (weight / Math.pow(height / 100, 2)).toFixed(2);
    height = 50;
    weight = 10;
    document.querySelector('.calculate .weight input').value = weight;
    document.querySelector('.calculate .weight .val span').innerText = weight;
    document.querySelector('.calculate .height input').value = height;
    document.querySelector('.calculate .height .val span').innerText = height;

    document.querySelector('.result .bmi .val').innerText = bmi;

    if (bmi < 18.5) {
        document.querySelector('.result .text').innerText = 'YOU ARE UNDERWEIGHT!';
        document.querySelector('.result .bmi .val').style.color = '#3f51b5';
        document.querySelector('.result .text').style.color = '#3f51b5';
    }
    else if (bmi > 18.5 && bmi < 25) {
        document.querySelector('.result .text').innerText = 'YOU HAVE A HEALTHY WEIGHT!';
        document.querySelector('.result .bmi .val').style.color = '#0f4';
        document.querySelector('.result .text').style.color = '#0f4';
    }
    else {
        document.querySelector('.result .text').innerText = 'YOU ARE OVERWEIGHT!';
        document.querySelector('.result .bmi .val').style.color = '#ffc107';
        document.querySelector('.result .text').style.color = '#ffc107';
    }

    document.querySelector('.calculate').style.display = 'none';
    document.querySelector('.result').style.display = 'flex';
}

document.querySelector('.result .recal').onclick = function () {
    document.querySelector('.result').style.display = 'none';
    document.querySelector('.calculate').style.display = 'flex';
}


// ABOUT SCRIPT ///////////////////////////////

function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtnn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read More";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read Less";
        moreText.style.display = "inline";
    }
}


document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration) {
        let obj = document.getElementById(id),
            current = start,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(() => {
                current += increment;
                obj.textContent = current + "+";
                if (current == end) {
                    clearInterval(timer);
                }
            }, step);
    }
    counter("count1", 0, 400, 3000);
    counter("count2", 100, 50, 2500);
    counter("count3", 0, 40, 3000);
});

