// function toggleDetails(element, animalId) {
//     const details = element.querySelector('.details');
//     details.classList.toggle('visually-hidden-focusable');

   


// }

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.card.mycard').forEach((card) => {
        card.addEventListener('click', () => {
            const details = card.querySelector('.details');
            details.classList.toggle('visually-hidden-focusable');
            const animalId = card.getAttribute('data-animal-id');
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
        });
    });
});
