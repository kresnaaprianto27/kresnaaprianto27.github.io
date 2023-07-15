
const body = document.getElementsByTagName('body')[0];
body.classList.toggle('disablescroll');
const beforeContainer = document.getElementsByClassName('container')[0];
// -----------------
const formCatatan = document.createElement('div');
const formNode = document.createTextNode('');
formCatatan.appendChild(formNode);
formCatatan.classList.add('formcatatan');
body.insertBefore(formCatatan,beforeContainer);
// -------------------
const kotakPesan = document.createElement('div');
const kotakPesanNode = document.createTextNode('');
kotakPesan.appendChild(kotakPesanNode);
kotakPesan.classList.add('kotakpesan');
formCatatan.appendChild(kotakPesan);
// ---------------------
const image = document.createElement('img');
const imageNode = document.createTextNode('');
image.appendChild(imageNode);
image.classList.add('image');
image.setAttribute('src','../../images/icon-note.png');
kotakPesan.appendChild(image);
// ----------------------

const h2 = document.createElement('h2');
const h2Node = document.createTextNode('Harap di Catat, sistem hanya mendeteksi gejala awal, untuk selanjutnya periksakan ke ahli Psikolog');
h2.appendChild(h2Node);
h2.classList.add('textcatatan');
kotakPesan.appendChild(h2);
// ------------------
const buttonBaik = document.createElement('button');
const btnNode = document.createTextNode('Baik,Mengerti');
buttonBaik.appendChild(btnNode);
buttonBaik.classList.add('btnoke');
kotakPesan.appendChild(buttonBaik);

buttonBaik.addEventListener('click', function () {
    body.classList.remove('disablescroll');
    buttonBaik.parentElement.parentElement.style.display = 'none';
    
    
})
