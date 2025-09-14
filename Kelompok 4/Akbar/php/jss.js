document.getElementById('hitung').addEventListener('click', function() {
    // Mengambil elemen input dan output dari halaman
    const elemenpanjang = document.getElementById('panjang');
    const elemenlebar = document.getElementById('lebar');
    const elemenhasil = document.getElementById('hasil');

    // Mengambil nilai dari input, memastikan tidak ada nol di depan
    let panjang = elemenpanjang.value;
    let lebar = elemenlebar.value;

    // Menghapus nol di depan jika ada, kecuali jika inputnya hanya '0'
    if (panjang.length > 1 && panjang.startsWith('0')) {
        panjang = parseFloat(panjang);
    }
    if (lebar.length > 1 && lebar.startsWith('0')) {
        lebar = parseFloat(lebar);
    }

    // Mengkonversi nilai ke angka dan menghitung hasil
    const hasil = parseFloat(panjang) * parseFloat(lebar);

    // Menampilkan hasil di elemen 'hasil'
    elemenhasil.textContent = 'Hasil: ' + hasil;
});