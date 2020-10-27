
var playing_now = document.querySelector('#playing_now')
var coming_soon = document.querySelector('#coming_soon')

coming_soon.onclick = function () {
    coming_soon.classList.add('active2')
    playing_now.classList.remove('active2')
}

playing_now.onclick = function () {
    playing_now.classList.add('active2')
    coming_soon.classList.remove('active2')
}

var grade_1 = document.querySelectorAll("[data-grade='1']")
var grade_2 = document.querySelectorAll("[data-grade='2']")
var grade_3 = document.querySelectorAll("[data-grade='3']")
var btns = document.querySelectorAll('.btn')
var cards = document.querySelectorAll('.card')

btns[0].onclick = function() {
    // grade_2.classList.add('d-none')
    // grade_3.classList.add('d-none')

    grade_1.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-block')
    });

    grade_2.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-none')
    });
    grade_3.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-none')
    });
}

btns[1].onclick = function() {
    grade_2.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-block')
    });

    grade_1.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-none')
    });
    grade_3.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-none')
    });
}


btns[2].onclick = function() {
    grade_3.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-block')
    });

    grade_2.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-none')
    });
    grade_1.forEach(e => {
        e.classList.remove('d-none')
        e.classList.remove('d-block')
        e.classList.add('d-none')
    });
}






