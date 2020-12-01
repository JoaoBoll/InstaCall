function buscaCep(){

    let cepDigitado = document.getElementById('cep').value;
    cepDigitado = cepDigitado.replace(/[^\d]+/g,'');
    if (cepDigitado.length == 8){
        var cep = cepDigitado;
        var xhr = new XMLHttpRequest();
    xhr.open ("GET", "http://cep.la/"+cep, true);
    xhr.setRequestHeader ("Accept", "application/json");
    let resposta;


    xhr.onreadystatechange = function(){
    if((xhr.readyState == 4) && xhr.status == 200)
        resposta = JSON.parse( xhr.responseText); 
        let inputCep = document.querySelector("#cep");
        let inputUf = document.querySelector("#uf");
        let inputCidade = document.querySelector("#cidade");
        let inputBairro = document.querySelector("#bairro");
        let inputLogradouro = document.querySelector("#logradouro");
        if (resposta != undefined){
            if (resposta.cep != undefined){
                inputUf.value =resposta.uf;
                inputCidade.value =resposta.cidade;
                inputBairro.value =resposta.bairro;
                inputLogradouro.value =resposta.logradouro;
            }else{
                inputCep.value = "";
                alert("CEP inválido")
            }
            
        }
        
    };
    xhr.send (null);

    }else{
        document.querySelector("#cep").value = "";
        alert("CEP inválido")
        
    }
}