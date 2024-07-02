document.addEventListener('DOMContentLoaded', function() {
    const ninjaContainer = document.getElementById('ninja-container');

    const ninjas = [
        { id: 1, name: 'Naruto Uzumaki', village: 'Konoha', rating: 5, price: 100 },
        { id: 2, name: 'Sasuke Uchiha', village: 'Konoha', rating: 4.5, price: 90 },
        { id: 3, name: 'Sakura Haruno', village: 'Konoha', rating: 4, price: 80 },
        { id: 4, name: 'Kakashi Hatake', village: 'Konoha', rating: 4.7, price: 95 },
        { id: 5, name: 'Gaara', village: 'Sunagakure', rating: 4.6, price: 92 },
        { id: 6, name: 'Rock Lee', village: 'Konoha', rating: 4.3, price: 88 },
        { id: 7, name: 'Neji Hyuga', village: 'Konoha', rating: 4.2, price: 87 },
        { id: 8, name: 'Shikamaru Nara', village: 'Konoha', rating: 4.4, price: 93 },
        { id: 9, name: 'Hinata Hyuga', village: 'Konoha', rating: 4.1, price: 85 },
        { id: 10, name: 'Itachi Uchiha', village: 'Akatsuki', rating: 4.9, price: 98 }
    ];

    ninjas.forEach(ninja => {
        if (ninja.name && ninja.village) {
            const ninjaDiv = document.createElement('div');
            ninjaDiv.classList.add('ninja');
            ninjaDiv.innerHTML = `<h3>${ninja.name}</h3><p>ID: ${ninja.id}</p><p>Desa: ${ninja.village}</p><p>Rating: ${ninja.rating}</p><p>Harga: $${ninja.price}</p>`;
            ninjaContainer.appendChild(ninjaDiv);
        }
    });

    // Validasi form sebelum pengiriman
    const purchaseForm = document.getElementById('purchase-form');
    purchaseForm.addEventListener('submit', function(event) {
        const ninjaId = parseInt(document.getElementById('ninja-id').value, 10);
        const validNinja = ninjas.find(ninja => ninja.id === ninjaId);
        if (!validNinja) {
            alert('ID Ninja tidak valid!');
            event.preventDefault();
        }
    });
});
