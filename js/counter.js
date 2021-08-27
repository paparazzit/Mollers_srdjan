let addBtn= document.querySelector('.addBtn');
let subBtn= document.querySelector('.subBtn');
let counter= document.querySelector('.counter');

addBtn.addEventListener('click',()=>{
    counter.value = parseInt(counter.value) + 1;
});

subBtn.addEventListener('click',()=>{
    if(counter.value <= 1)
        counter.value=1
    else
    counter.value = parseInt(counter.value) - 1;
});