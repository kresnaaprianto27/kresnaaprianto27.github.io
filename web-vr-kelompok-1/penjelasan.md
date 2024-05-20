Berikut adalah penjelasan dari kode HTML yang telah diperbarui untuk menambahkan menu dengan tombol yang lebih menarik untuk berpindah tampilan VR:

### Penjelasan Kode:

#### Bagian Head:
1. **Meta Charset dan Title**: 
    ```html
    <meta charset="utf-8">
    <title>360&deg; Image</title>
    <meta name="description" content="360&deg; Image - A-Frame">
    ```
   - Menetapkan pengkodean karakter sebagai UTF-8 dan memberikan judul serta deskripsi untuk halaman.

2. **A-Frame Script**:
    ```html
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    ```
   - Mengimpor library A-Frame untuk memungkinkan penggunaan elemen VR di HTML.

3. **CSS Styling**:
    ```html
    <style>
      #menu {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        border-radius: 5px;
      }
      #menu button {
        display: block;
        margin: 5px 0;
        background-color:  rgb(85, 167, 223);
        width: 200px;
        height: 40px;
        border: 3px solid blue;
        color: white;
        text-shadow: 2px 3px 3px gray;
        cursor: pointer;
        border-radius: 20px;
      }
      #menu button:hover {
        background-color: rgb(33, 109, 197);
        transition: 0.5s;
        transform: scale(1.05);
      }
    </style>
    ```
   - **#menu**: Menentukan posisi tetap untuk menu di sudut kiri atas, dengan latar belakang semi-transparan, padding, dan border radius.
   - **#menu button**: Styling untuk tombol, termasuk warna latar, ukuran, border, warna teks, bayangan teks, pointer cursor, dan border radius. 
   - **#menu button:hover**: Menambahkan efek hover untuk mengubah warna latar, menambahkan transisi, dan sedikit memperbesar ukuran tombol saat kursor berada di atasnya.

#### Bagian Body:
1. **Menu Div**:
    ```html
    <div id="menu">
      <button onclick="changeSky('1.jpg')">Monas</button>
      <button onclick="changeSky('2.jpg')">Borobudur</button>
      <button onclick="changeSky('3.jpg')">Pasuruan</button>
    </div>
    ```
   - Sebuah div dengan ID `menu` yang berisi tiga tombol. Setiap tombol memiliki event `onclick` yang memanggil fungsi `changeSky` dengan nama file gambar sebagai parameter.

2. **A-Frame Scene**:
    ```html
    <a-scene>
      <a-sky id="sky" src="./images/1.jpg" rotation="0 -130 0"></a-sky>
      <a-text font="kelsonsans" width="6" position="-2.5 0.25 -1.5" rotation="0 15 0"></a-text>
    </a-scene>
    ```
   - **a-sky**: Elemen A-Frame yang menampilkan gambar latar belakang 360 derajat. Atribut `id="sky"` digunakan untuk mengidentifikasi elemen ini, `src` menentukan gambar yang ditampilkan pertama kali, dan `rotation` mengatur rotasi awal.
   - **a-text**: Elemen A-Frame yang menampilkan teks dalam scene VR. Atribut `font`, `width`, `position`, dan `rotation` mengatur font, ukuran, posisi, dan rotasi teks.

3. **JavaScript Function**:
    ```html
    <script>
      function changeSky(image) {
        document.querySelector('#sky').setAttribute('src', './images/' + image);
      }
    </script>
    ```
   - Fungsi JavaScript `changeSky` mengambil parameter `image` yang merupakan nama file gambar. Fungsi ini menggunakan `querySelector` untuk memilih elemen dengan ID `sky` dan mengubah atribut `src` elemen tersebut untuk menampilkan gambar baru.

### Bagaimana Kode Ini Bekerja:
1. Saat halaman dimuat, menu dengan tiga tombol akan ditampilkan di sudut kiri atas.
2. Ketika salah satu tombol diklik, fungsi `changeSky` dipanggil dengan parameter nama file gambar yang sesuai.
3. Fungsi `changeSky` kemudian mengubah atribut `src` dari elemen `a-sky`, mengganti gambar latar belakang dengan gambar baru yang ditentukan.

Dengan penyesuaian CSS ini, tombol terlihat lebih menarik dan responsif, memberikan pengalaman pengguna yang lebih baik saat berpindah antar tampilan VR.Berikut adalah penjelasan dari kode HTML yang telah diperbarui untuk menambahkan menu dengan tombol yang lebih menarik untuk berpindah tampilan VR:

### Penjelasan Kode:

#### Bagian Head:
1. **Meta Charset dan Title**: 
    ```html
    <meta charset="utf-8">
    <title>360&deg; Image</title>
    <meta name="description" content="360&deg; Image - A-Frame">
    ```
   - Menetapkan pengkodean karakter sebagai UTF-8 dan memberikan judul serta deskripsi untuk halaman.

2. **A-Frame Script**:
    ```html
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    ```
   - Mengimpor library A-Frame untuk memungkinkan penggunaan elemen VR di HTML.

3. **CSS Styling**:
    ```html
    <style>
      #menu {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        border-radius: 5px;
      }
      #menu button {
        display: block;
        margin: 5px 0;
        background-color:  rgb(85, 167, 223);
        width: 200px;
        height: 40px;
        border: 3px solid blue;
        color: white;
        text-shadow: 2px 3px 3px gray;
        cursor: pointer;
        border-radius: 20px;
      }
      #menu button:hover {
        background-color: rgb(33, 109, 197);
        transition: 0.5s;
        transform: scale(1.05);
      }
    </style>
    ```
   - **#menu**: Menentukan posisi tetap untuk menu di sudut kiri atas, dengan latar belakang semi-transparan, padding, dan border radius.
   - **#menu button**: Styling untuk tombol, termasuk warna latar, ukuran, border, warna teks, bayangan teks, pointer cursor, dan border radius. 
   - **#menu button:hover**: Menambahkan efek hover untuk mengubah warna latar, menambahkan transisi, dan sedikit memperbesar ukuran tombol saat kursor berada di atasnya.

#### Bagian Body:
1. **Menu Div**:
    ```html
    <div id="menu">
      <button onclick="changeSky('1.jpg')">Monas</button>
      <button onclick="changeSky('2.jpg')">Borobudur</button>
      <button onclick="changeSky('3.jpg')">Pasuruan</button>
    </div>
    ```
   - Sebuah div dengan ID `menu` yang berisi tiga tombol. Setiap tombol memiliki event `onclick` yang memanggil fungsi `changeSky` dengan nama file gambar sebagai parameter.

2. **A-Frame Scene**:
    ```html
    <a-scene>
      <a-sky id="sky" src="./images/1.jpg" rotation="0 -130 0"></a-sky>
      <a-text font="kelsonsans" width="6" position="-2.5 0.25 -1.5" rotation="0 15 0"></a-text>
    </a-scene>
    ```
   - **a-sky**: Elemen A-Frame yang menampilkan gambar latar belakang 360 derajat. Atribut `id="sky"` digunakan untuk mengidentifikasi elemen ini, `src` menentukan gambar yang ditampilkan pertama kali, dan `rotation` mengatur rotasi awal.
   - **a-text**: Elemen A-Frame yang menampilkan teks dalam scene VR. Atribut `font`, `width`, `position`, dan `rotation` mengatur font, ukuran, posisi, dan rotasi teks.

3. **JavaScript Function**:
    ```html
    <script>
      function changeSky(image) {
        document.querySelector('#sky').setAttribute('src', './images/' + image);
      }
    </script>
    ```
   - Fungsi JavaScript `changeSky` mengambil parameter `image` yang merupakan nama file gambar. Fungsi ini menggunakan `querySelector` untuk memilih elemen dengan ID `sky` dan mengubah atribut `src` elemen tersebut untuk menampilkan gambar baru.

### Bagaimana Kode Ini Bekerja:
1. Saat halaman dimuat, menu dengan tiga tombol akan ditampilkan di sudut kiri atas.
2. Ketika salah satu tombol diklik, fungsi `changeSky` dipanggil dengan parameter nama file gambar yang sesuai.
3. Fungsi `changeSky` kemudian mengubah atribut `src` dari elemen `a-sky`, mengganti gambar latar belakang dengan gambar baru yang ditentukan.

