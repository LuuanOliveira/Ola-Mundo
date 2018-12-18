function createLoader(img){
    this.div = document.createElement('div');
    this.div.className = 'loader';
    this.div.appendChild(img);
    console.log(this.div);
}


function validateForm() 
{
    event.preventDefault();
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert('PREENCHA OS CAMPOS');  
    }
    else {
        var img = document.createElement('img');
        img.src = 'loader.gif';
        console.log(img);
        var loader = new createLoader(img);
        console.log(loader.div);
        document.getElementsByTagName('body')[0].appendChild(loader.div);
        setTimeout(() => {
            alert('ENVIADO COM SUCESSO');    
            window.location.href = 'sucesso.html';
            var form = document.getElementById('form#1');
            form.submit();
        }, 2000);
        
    }
}


function Erro() 
{
    event.preventDefault();
    var x = document.forms["myConta"]["cpf"].value;
    if (x == "") {
        alert('PREENCHA OS CAMPOS');  
    }
    else {
        var img = document.createElement('img');
        img.src = 'loader.gif';
        console.log(img);
        var loader = new createLoader(img);
        console.log(loader.div);
        document.getElementsByTagName('body')[0].appendChild(loader.div);
        setTimeout(() => {
            alert('ERRO 502');  
            window.location.href = 'erro.html';  
        }, 3000);
        
    }
}

function fail() 
{
    event.preventDefault();
    var x = document.getElementById["butao"]
    if (x == "") {
        alert('PREENCHA OS CAMPOS');  
    }
    else {
        var img = document.createElement('img');
        img.src = 'loader.gif';
        console.log(img);
        var loader = new createLoader(img);
        console.log(loader.div);
        document.getElementsByTagName('body')[0].appendChild(loader.div);
        setTimeout(() => {
            alert('ERRO 502');  
            window.location.href = 'erro.html';  
        }, 3000);
        
    }
}

function redirect() 
{
    event.preventDefault();
    var x = document.getElementById["butao"]
    if (x == "") {
        alert('ERRO');  
    }
    else {
        var img = document.createElement('img');
        img.src = 'loader.gif';
        console.log(img);
        var loader = new createLoader(img);
        console.log(loader.div);
        document.getElementsByTagName('body')[0].appendChild(loader.div);
        setTimeout(() => {  
            window.location.href = 'index.html';  
        }, 1500);
        
    }
}