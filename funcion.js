enviar = (e) => {
    e.preventDefault();
    let numero1 = document.getElementById("numero1").value,
        numero2 = document.getElementById("numero2").value,
        operacion = document.getElementById("operacion").value
    
    let params = `numero1=${numero1}&numero2=${numero2}&operacion=${operacion}`
    const url = "operar.php"
    const xhr = new XMLHttpRequest();
    xhr.open("post", url, true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        let response = xhr.responseText;
        console.log(response)
        document.getElementById('resultado').value = response;
      }
    }
  
    xhr.send(params);
  
  }