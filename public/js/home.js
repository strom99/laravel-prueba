const tallasBox = document.getElementById('tallasBox');
const priceInput1 = document.getElementById('priceInput1');
const priceInput2 = document.getElementById('priceInput1');
const valuePriceInput1 = document.getElementById('valuePriceInput1');
const valuePriceInput2 = document.getElementById('valuePriceInput2');

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