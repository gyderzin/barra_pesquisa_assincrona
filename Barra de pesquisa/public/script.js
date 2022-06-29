function pesquisar(route) {          
     var ajax;
     var value = document.getElementById('pesquisa').value     
     if(window.XMLHttpRequest) {
          ajax = new XMLHttpRequest();
     }
     else if (window.ActiveXObject) {
          ajax = new ActiveXObject('Microsoft.XMLHTTP')
     }    
       
        ajax.onreadystatechange = function () {
          if (ajax.readyState === 4) {
               if (ajax.status === 200) {
                 var json = ajax.response                           
                 if(document.getElementById('t_body')) {
                    document.getElementById('t_body').remove()
                 }
                 var tbody = document.createElement('tbody')
                 tbody.id = 't_body'
                 var table = document.getElementById('tabela')
                 for (var n1 = 0; n1 < json.length; n1++) {
                    var tr = document.createElement('tr')
                    tbody.appendChild(tr)
                    var th = document.createElement('th')
                    tbody.appendChild(th)
                    var td = document.createElement('td')
                    tbody.appendChild(td)
                    var td2 = document.createElement('td')
                    tbody.appendChild(td2)

                    th.scope = 'col'
                    th.innerText  = json[n1]['id']
                    td.innerText  = json[n1]['descricao']                   
                    td2.innerText = json[n1]['valor']                           
                 }
               table.appendChild(tbody)
               } else {
                 alert('Temos um problema na requisicão');
               }
             }
        }; 
        ajax.open('POST', route);
        ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        ajax.responseType = 'json'
        ajax.send('pesquisa='+encodeURIComponent(value));         
       
}

