function toggleDetails(element, animalId) {
    const details = element.querySelector('.details');
    details.classList.toggle('visually-hidden-focusable');

   

    fetch('/lib/stats.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ animalId: animalId }),
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message); 
    })
    .catch(error => {
        console.error('Erreur lors de l\'incrémentation du compteur:', error);
    });
}


