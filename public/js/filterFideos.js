const filter = document.getElementById('filter');
const number = document.getElementById('number');
const branch = document.getElementById('branch');
filter.addEventListener('change', e => {
    let option = e.target.selectedIndex;
    switch (option) {
        case 0: {
            branch.classList.add('hidden');
            number.classList.add('hidden');
            getFideos('');
        }
            break;
        case 1: {
            number.classList.add('hidden');
            branch.classList.remove('hidden');
        }
            break;
        case 2: {
            branch.classList.add('hidden');
            number.classList.remove('hidden');
        }
            break;
        case 3: {
            branch.classList.add('hidden');
            number.classList.add('hidden');
            getFideos('stock');
        }
            break;
    }
});

number.addEventListener('input', e => { 
    getFideos('price/' + e.target.value);
});

branch.addEventListener('change', e => { 
    getFideos('branch/' + e.target.value);
});