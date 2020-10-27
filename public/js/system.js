// $("#seats_row").innerHTML='5'

var content = document.querySelector('#seats_table')
var number='A'
for (let index = 1; index <= 5; index++) {
    if (index==1) {
        number='A';
    }else if(index==2){
        number='B';
    }else if(index==3){
        number='C';
    }else if(index==4){
        number='D';
    }else if(index==5){
        number='E';
    }
    content.innerHTML += `<div class="seats_row">
        <span class="mr-3">${number}</span>
        <div data-id='${number}1' class="seat">1</div>
        <div data-id='${number}2' class="seat">2</div>
        <div data-id='${number}3' class="seat mr-3">3</div>
        <div data-id='${number}4' class="seat">4</div>
        <div data-id='${number}5' class="seat">5</div>
        <div data-id='${number}6' class="seat">6</div>
        <div data-id='${number}7' class="seat">7</div>
        <div data-id='${number}8' class="seat">8</div>
        <div data-id='${number}9' class="seat mr-3">9</div>
        <div data-id='${number}10' class="seat">10</div>
        <div data-id='${number}11' class="seat">11</div>
        <div data-id='${number}12' class="seat mr-3">12</div>
        <span>${number}</span>
    </div>`
}


