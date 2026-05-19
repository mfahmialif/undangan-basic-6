# Website Undangan - Basic 6

Template website undangan pernikahan statis berbasis HTML, CSS, dan JavaScript. Project ini bisa langsung dibuka dari `index.html` tanpa proses build.

## Fitur

- Tampilan responsif untuk desktop dan mobile.
- Cover undangan dan halaman pembuka.
- Profil pasangan.
- Countdown acara.
- Detail akad dan resepsi.
- Timeline Our Story.
- Galeri foto dengan Fancybox.
- Form reservasi dan komentar statis.
- Wedding gift dan modal gift.
- Quote, ucapan terima kasih, footer, QR invitation, dan tombol musik.

## Struktur Project

```text
basic-6/
|-- index.html
|-- README.md
|-- assets/
    |-- css/
    |   |-- aos.css
    |   |-- loader.css
    |   |-- splide.min.css
    |   |-- style.css
    |-- font/
    |-- img/
    |   |-- *.webp
    |   |-- prewedding/
    |       |-- *.webp
    |-- js/
        |-- aos.js
        |-- dotlottie-player.js
        |-- loader.js
        |-- script.js
        |-- splide.min.js
```

## Menjalankan

Buka `index.html` langsung di browser.

Jika ingin menjalankan lewat local server:

```bash
npx serve .
```

## Catatan Aset

- Semua gambar di `assets/img` memakai format `.webp`.
- Ukuran tiap gambar dijaga maksimal 100KB.
- Jika menambah gambar baru, konversi ke WebP dan update referensinya di `index.html` atau `assets/css/style.css`.

## File Utama

- `index.html`: struktur konten undangan.
- `assets/css/style.css`: styling utama template.
- `assets/js/script.js`: interaksi QR invitation, musik, animasi, dan timeline Our Story.
