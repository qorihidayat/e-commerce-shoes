function submitData(){

const valKode = document.querySelector('.kode').value;
const valCookie = document.querySelector('.cookie').value;
const valHarga = document.querySelector('.harga').value;
const valNama = document.querySelector('.nama').value;
const valAlamat = document.querySelector('.alamat').value;
const valKota = document.querySelector('.kota').value;
const valProvinsi = document.querySelector('.provinsi').value;
const valKodePos = document.querySelector('.kodepos').value;
const valJasa = document.querySelector('.jasa').value;

const checkBox = document.querySelector("#checkbox");
const valAll = document.querySelectorAll('.form-control');
const whatsapp = document.querySelector('.whatsapp');



    valAll.forEach((item, index) => {
        console.log(`a[${index}] = ${item.value}`);
    });

    if (checkBox.checked == true) {
        whatsapp.setAttribute("href", `https://wa.me/6281315976341?text=Assalamu'alaikum Kak!, Saya Berminat dengan produk ini! %0A %0D %0D%0A Kode : ${valKode} %0D%0A Cookies : ${valCookie} %0D%0A Harga : ${valHarga} %0D%0A Nama : ${valNama} %0D%0A Alamat : ${valAlamat} %0D%0A Kota : ${valKota} %0D%0A Provinsi : ${valProvinsi} %0D%0A KodePos : ${valKodePos} %0D%0A Jasa Kirim : ${valJasa}
        
        
        
        `);
    }else{
        whatsapp.setAttribute("href", "");
        whatsapp.addEventListener('click', function(a){
            alert("Jangan Lupa untuk Checklist pada bagian kotak setuju!");
        });
    }
}
