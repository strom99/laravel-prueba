const tallasBox = document.getElementById('tallasBox');
const priceInput1 = document.getElementById('priceInput1');
const priceInput2 = document.getElementById('priceInput2');
const valuePriceInput1 = document.getElementById('valuePriceInput1');
const valuePriceInput2 = document.getElementById('valuePriceInput2');
const btnFilter = document.querySelector('.btnFilter');
const closeFilter = document.getElementById('closeFilter');
const containFilters = document.querySelector('.containFilters');
const divMain = document.querySelector('.divMain');
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
}

function slide2(){
    if(parseInt(priceInput2.value) - parseInt(priceInput1.value) <= minGap){
        priceInput2.value = parseInt(priceInput1.value) + minGap;
    }
}

btnFilter.addEventListener('click',function(){
    containFilters.classList.remove('hidden');
    divMain.style.overflow = 'hidden';
    console.log(divMain)
})

closeFilter.addEventListener('click', function(e){
    e.preventDefault();
    containFilters.classList.add('hidden');
    divMain.style.overflow = 'visible';

})