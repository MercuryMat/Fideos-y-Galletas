const dlt = document.getElementById('btn-delete');

const deleteCookie = async (id) => {
    const res = await fetch('api/cookies/' + id, {
        method: 'delete'
    });
    const data = await res.json();
    if(data.nombre) {
        alert('Eliminacion exitosa');
        location.reload();
    } else alert('Error interno');
} 