export function dataKosong() {
  const contactus = document.getElementsByClassName('contactus')[0];
  const beforeFormContact = document.getElementsByClassName('formcontactus')[0];
  // tambah clas disable content
  const disablecontent = document.createElement('div');
  const disableNode = document.createTextNode('');
  disablecontent.appendChild(disableNode);
  disablecontent.classList.toggle('disablecontent');
  contactus.insertBefore(disablecontent, beforeFormContact);
  // tambahkan class validasipesan
  const validasi = document.createElement('div');
  const validasiNode = document.createTextNode('');
  validasi.appendChild(validasiNode);
  validasi.classList.toggle('validasipesan');
  disablecontent.appendChild(validasi);
  // membuat class image
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('image');
  image.setAttribute('src', '../../../images/icon-warning.png');
  validasi.appendChild(image);
  // tambah class judul
  const judul = document.createElement('h2');
  const judulNode = document.createTextNode('Harap isi semua data');
  judul.appendChild(judulNode);
  judul.classList.toggle('judul');
  validasi.appendChild(judul);
  // tambah class button
  const btnValidasi = document.createElement('button');
  const btnValidasiNode = document.createTextNode('Ulangi');
  btnValidasi.appendChild(btnValidasiNode);
  btnValidasi.classList.toggle('btnvalidasi');
  validasi.appendChild(btnValidasi);

  btnValidasi.addEventListener('click', function (event) {
    btnValidasi.parentElement.parentElement.style.display = 'none';
    event.preventDefault();
  });
}
export function pesanSucces() {
  const contactus = document.getElementsByClassName('contactus')[0];
  const beforeFormContact = document.getElementsByClassName('formcontactus')[0];
  // tambah clas disable content
  const disablecontent = document.createElement('div');
  const disableNode = document.createTextNode('');
  disablecontent.appendChild(disableNode);
  disablecontent.classList.toggle('disablecontent');
  contactus.insertBefore(disablecontent, beforeFormContact);
  // tambahkan class validasipesan
  const validasi = document.createElement('div');
  const validasiNode = document.createTextNode('');
  validasi.appendChild(validasiNode);
  validasi.classList.toggle('validasipesan');
  disablecontent.appendChild(validasi);
  // membuat class image
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('image');
  image.setAttribute('src', '../../../images/icon-succes.png');
  validasi.appendChild(image);
  // tambah class judul
  const judul = document.createElement('h2');
  const judulNode = document.createTextNode('Pesan berhasil terkirim');
  judul.appendChild(judulNode);
  judul.classList.toggle('judul');
  validasi.appendChild(judul);
  // tambah class button
  const btnValidasi = document.createElement('button');
  const btnValidasiNode = document.createTextNode('Ulangi');
  btnValidasi.style.backgroundColor = 'green';
  btnValidasi.style.border('3px solid rgb(0, 96, 29);');
  btnValidasi.style.color = 'white';
  btnValidasi.appendChild(btnValidasiNode);
  btnValidasi.classList.toggle('btnvalidasi');
  validasi.appendChild(btnValidasi);
  btnValidasi.addEventListener('click', function (event) {
    btnValidasi.parentElement.parentElement.style.display = 'none';
    event.preventDefault();
  });
}

const btnKirimPesan = document.getElementsByClassName('btnpesan')[0];

btnKirimPesan.addEventListener('click', function (event) {
  btnKirimPesan.preventDefault();
});
