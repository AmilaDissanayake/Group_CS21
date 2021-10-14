
var btn = document.getElementById("myBtn");

// btn.addEventListener("mouseover", function (e) {
//     choose();
// })

// function choose() {
//     const va = btn.parentElement.value;

//     if (va === 0) {
//         document.getElementsByClassName('dropdown-menu')[0].style.visibility = 'visible';
//         document.getElementsByClassName('dropdown-menu')[0].style.opacity = "1";
//         btn.parentElement.value = 1;
//         return;
//     } else if (va === 1) {
//         document.getElementsByClassName('dropdown-menu')[0].style.visibility = 'hidden';
//         document.getElementsByClassName('dropdown-menu')[0].style.opacity = "0";
//         btn.parentElement.value = 0;
//         return;
//     }
// }
// var downbtn = document.getElementById("xc");
// downbtn.addEventListener("mouseout", function (e) {
//     notchoose();
// })

// function notchoose() {

//     document.getElementsByClassName('dropdown-menu')[0].style.visibility = 'hidden';

// }

// document.addEventListener('mouseup', function (e) {
//     var container = document.getElementById('down');
//     if (!container.contains(e.target)) {

//         if (!btn.contains(e.target)) {
//             document.getElementsByClassName('dropdown-menu')[0].style.visibility = 'hidden';
//             btn.parentElement.value = 0;
//         }

//     }
// });



// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// // Close the dropdown if the user clicks outside of it
// window.onclick = function (event) {
//     if (!event.target.matches('.header_btn2')) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }




///////////////////// Get the modal
var modal1 = document.getElementById("myModal");

// Get the button that opens the modal
// var btn1 = document.getElementById("myBtn1");

// Get the < span > element that closes the modal
// var span1 = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function () {
    modal1.style.display = "block";
}

// When the user clicks on < span > (x), close the modal
// span1.onclick = function () {
//     modal1.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

//////////////////////////////////////////////////////// Caroli-calc-popup

// var modal2 = document.getElementById("myModal2");

// // Get the button that opens the modal
// var btn2 = document.getElementById("myBtn2");

// // Get the < span > element that closes the modal
// var span2 = document.getElementsByClassName("close2")[0];

// // When the user clicks on the button, open the modal
// btn2.onclick = function () {
//     modal2.style.display = "block";
// }

// // When the user clicks on < span > (x), close the modal
// span2.onclick = function () {
//     modal2.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//     if (event.target == modal2) {
//         modal2.style.display = "none";
//     }
// }

//////////////////////////////////////////////////////// bmr-calc-popup

// var modal3 = document.getElementById("myModal3");

// // Get the button that opens the modal
// var btn3 = document.getElementById("myBtn3");

// // Get the < span > element that closes the modal
// var span3 = document.getElementsByClassName("close3")[0];

// // When the user clicks on the button, open the modal
// btn3.onclick = function () {
//     modal3.style.display = "block";
// }

// // When the user clicks on < span > (x), close the modal
// span3.onclick = function () {
//     modal3.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//     if (event.target == modal3) {
//         modal3.style.display = "none";
//     }
// }

//////////////////////////////////////////////////////// fbc-calc-popup

// var modal4 = document.getElementById("myModal4");

// // Get the button that opens the modal
// var btn4 = document.getElementById("myBtn4");

// // Get the < span > element that closes the modal
// var span4 = document.getElementsByClassName("close4")[0];

// // When the user clicks on the button, open the modal
// btn4.onclick = function () {
//     modal4.style.display = "block";
// }

// When the user clicks on < span > (x), close the modal
// span4.onclick = function () {
//     modal4.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//     if (event.target == modal4) {
//         modal4.style.display = "none";
//     }
// }


///////////////////////////////////////background music

// var myAudio = document.getElementById("myAudio");
// var isPlaying = false;

// function togglePlay() {
//     isPlaying ? myAudio.pause() : myAudio.play();
// };

// myAudio.onplaying = function () {
//     isPlaying = true;
// };
// myAudio.onpause = function () {
//     isPlaying = false;
// };




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


// var offset = 300, // browser window scroll (in pixels) after which the "back to top" link is shown
//     offsetOpacity = 1200, //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
//     scrollDuration = 700;

