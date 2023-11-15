const showForm = () => {
    const container = document.querySelector('.container-form');
    container.classList.remove('hidden');
    container.classList.add('flex-center')
}

const closeForm = () => {
    const container = document.querySelector('.container-form');
    container.classList.remove('flex-center');
    container.classList.add('hidden')
}

document.getElementById('btn-close').addEventListener('click', closeForm);
