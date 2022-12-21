const tallasBox = document.getElementById('tallasBox');
const priceInput1 = document.getElementById('priceInput1');
const priceInput2 = document.getElementById('priceInput2');
const valuePriceInput1 = document.getElementById('valuePriceInput1');
const valuePriceInput2 = document.getElementById('valuePriceInput2');
const lineRange = document.querySelector('.lineRange');
const maxValue = priceInput1.max;
let minGap = 0;

tallasBox.addEventListener('change',function(e){
    let inputCheck =  e.target;
    if(inputCheck.checked == true){
        inputCheck.closest('label').classList.add('tallaSel');
    }else{
        inputCheck.closest('label').classList.remove('tallaSel');
    }
})

priceInput1.addEventListener('input',function(e){
    valuePriceInput1.innerHTML = e.target.value;
})

priceInput2.addEventListener('input',function(e){
    valuePriceInput2.innerHTML = e.target.value;
})

function slide1(){
    if(parseInt(priceInput2.value) - parseInt(priceInput1.value) <= minGap){
        priceInput1.value = parseInt(priceInput2.value) - minGap;
    }
    fillcolor();
}

function slide2(){
    if(parseInt(priceInput2.value) - parseInt(priceInput1.value) <= minGap){
        priceInput2.value = parseInt(priceInput1.value) + minGap;
    }
    fillcolor();
}

function fillcolor(){
    percent1 = (priceInput1.value / maxValue) * 100;
    percent2 = (priceInput2.value / maxValue) * 100;
    document.querySelector('.lineRange').style.background = `linear-gradient(to right, #dadae5 ${percent1}%, #3264fe ${percent1}%, #3264fe ${percent2}%`;
}

