function ajaxcall() {
    const xhr = new XMLHttpRequest();

}


let money = document.querySelector('.money').textContent;
parseFloat(money);
console.log(money)
document.querySelector('.logo h1:nth-child(3)').textContent = `Ilość Pieniędzy: ${money}`;

const items = [...document.querySelectorAll('.chose div')].forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.chose div').forEach(div => {
            div.style.border = "none";

        })
        item.style.border = "2px solid gold";
        chosenColor = item.dataset.color;
    })
})


let chosenColor = "";
const input = document.querySelector('.button input');


const coin = document.querySelector('#coin');
const button = document.querySelector('#flip');
const status = document.querySelector('#status');
const heads = document.querySelector('#headsCount');
const tails = document.querySelector('#tailsCount');

let headsCount = 0;
let tailsCount = 0;


function deferFn(callback, ms) {
    setTimeout(callback, ms);

}

function processResult(result, bid) {
    if (result === 'heads') {
        headsCount++;
        heads.innerText = headsCount;
    } else {
        tailsCount++;
        tails.innerText = tailsCount;
    }

    if (result == chosenColor) {
        money = money + bid * 2;
        document.querySelector('.logo h1:nth-child(3)').textContent = `Ilość Pieniędzy: ${money}`;
    }

    document.querySelector(' #flip').style.display = "block";

}

function flipCoin() {

    let bid = Math.floor(input.value);
    if (bid > money) {
        return alert('Nie masz tyle srodkow by zagrac');
    }
    if (bid < 1) {
        return alert('Zakład musi być większy niż 1');
    }
    if (chosenColor == "") {
        return alert("wybierz kolor!");
    }
    money = money - bid;
    ajaxcall();
    document.querySelector('.logo h1:nth-child(3)').textContent = `Ilość Pieniędzy: ${money}`;

    document.querySelector('#flip').style.display = "none";


    coin.setAttribute('class', '');
    const random = Math.random();
    const result = random < 0.5 ? 'heads' : 'tails';
    deferFn(function() {
        coin.setAttribute('class', 'animate-' + result);
        deferFn(processResult.bind(null, result, bid), 2900);
    }, 100);

}

button.addEventListener('click', flipCoin);