

const nome=document.getElementById('nome');
const sexo=document.getElementById('sexo');
const altura=document.getElementById('altura');
const peso=document.getElementById('peso');
const IMC=document.getElementById('IMC');
const tabela=document.getElementById('tabel');


function calculation (){
  let altQuad=altura.value*altura.value;
  let imc=peso.value/altQuad;
  IMC.value=imc;
}

altura.addEventListener('input', ()=>{
  calculation();
})
peso.addEventListener('input', ()=>{
  calculation();
})

salvar.addEventListener('click',()=>{
  const tr=document.createElement('tr');
  let td = `<td>${nome.value}</td>
            <td>${sexo.value}</td>
            <td>${altura.value}</td>
            <td>${peso.value}</td>
            <td>${IMC.value}</td>`;

  tr.innerHTML=td;
  tabel.appendChild(tr);
  $('#modalCalculo').modal('hide');
  

  nome.value=null;
  sexo.selectedIndex=null;
  altura.value=null;
  peso.value=null;
  IMC.value=null;
});



