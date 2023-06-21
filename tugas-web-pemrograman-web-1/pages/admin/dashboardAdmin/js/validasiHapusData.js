

const beforeTblDataUser = document.getElementsByClassName('tbldatauser')[0];
const container = document.getElementsByClassName('container')[0];
// tambahkan class disable content
const disablecontent = document.createElement('div');
const disableNode = document.createTextNode('');
disablecontent.appendChild(disableNode);
disablecontent.classList.toggle('disable-tbl-datauser');
container.insertBefore(disablecontent,beforeTblDataUser);
// tambah class validasi
const validasi = document.createElement('div');
const validasiNode = document.createTextNode('');
validasi.appendChild(validasiNode);
validasi.classList.toggle('validasihapus');
disablecontent.appendChild(validasi);
// tambah class img ke parent validasi
const image = document.createElement('img');
const imageNode = document.createTextNode('');
image.appendChild(imageNode);
image.classList.toggle('image');
image.setAttribute('src', '../../../images/icon-warning.png');
validasi.appendChild(image);
// tambah class judul ke parent validasi
const judul = document.createElement('p');
const judulNode = document.createTextNode('Apakah Anda Yakin Ingin Hapus Data ?');
judul.appendChild(judulNode);
judul.classList.toggle('judul');
validasi.appendChild(judul);
// menambahkan class button di parent validasi
const buttonOpsi = document.createElement('form');
const buttonNode = document.createTextNode('');
buttonOpsi.appendChild(buttonNode);
buttonOpsi.setAttribute('method','post');
buttonOpsi.classList.toggle('buttonopsi');
validasi.appendChild(buttonOpsi);




// menambahkan clas buton yakin di parent button opsi
const btnYakin = document.createElement('button');
const btnYakinNode = document.createTextNode('Ya');
btnYakin.appendChild(btnYakinNode);
btnYakin.classList.toggle('btnyakin');
btnYakin.setAttribute('name', 'ya');
btnYakin.setAttribute('type', 'submit');
buttonOpsi.appendChild(btnYakin);
// menambahkan button tidak
const btnTidak = document.createElement('button');
const btnTidakNode = document.createTextNode('Tidak');
btnTidak.appendChild(btnTidakNode);
btnTidak.classList.toggle('btnbatal');
btnTidak.setAttribute('name','tidak');
btnTidak.setAttribute('type','submit');
buttonOpsi.appendChild(btnTidak);

const body = document.querySelector('body');
body.classList.toggle('disablebody');
body.style.overflow = 'hidden';







