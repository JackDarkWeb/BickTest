$(function () {

    let i = 0,
        canApply = true;

    $(document).on('click', '#add, .remove, #apply', function (e) {
        e.preventDefault();

        switch (this.id) {
            case 'add':
                i++;
                renderRule(this, i);
                break;

            case 'apply':
                transmissionRequest(i);
                break;

            default:
                removeRule(this);
                break;
        }
    });

    function transmissionRequest(i){
        const form =  $('#form');
        let data   = new Object(),
            query  = '';

        //let len = form.find('input').length;
        for(let x = 1; x <= i; x++){
            query = `${form.find(`#field${x}`).val()} ${form.find(`#operator${x}`).val()} ${form.find(`#value${x}`).val()}`;
            data[`query_${x}`] = query;
        }
        if(i){
            if(!canApply) return ;
            canApply = false;
            //ajaxPost('/treatment.php', data, func_callback, true);

            requestAjax('POST', 'treatment.php', treatment, data);
            setTimeout(function () {
                canApply = true;
            }, 8000);
        }else{
            alert('Please add at least one rule');
        }

    }

    function func_callback(){

    }

    function treatment(response) {

    }

    function removeRule(btn) {
        let id_btnRemove;
        id_btnRemove = $(btn).attr('id');
        $(`#row${id_btnRemove}`).remove();
    }

    function renderRule(btn, i) {
        const content = $(btn).parents('#form').find('#table');
        content.append(
            `
                    <tr id="row${i}">
                       <td>
                           <div class="my-1" style="width: 150px">
                                <select id="field${i}" class="form-control" required>
                                    <option value="">Field...</option>
                                    <option value="size">Size</option>
                                    <option value="forks">Forks</option>
                                    <option value="stars">Stars</option>
                                    <option value="followers">Followers</option>
                                </select>
                           </div>
                       </td>
                       <td>
                           <div class="my-1" style="width: 150px">
                                <select id="operator${i}" class="form-control" required>
                                    <option value="">Operator...</option>
                                    <option value=">">Plus</option>
                                    <option value="=">Equal</option>
                                    <option value="<">Minus</option>
                                </select>
                           </div>
                       </td>
                       <td>
                           <div class="my-1" style="width: 150px">
                                <input type="text" class="form-control" id="value${i}" placeholder="Value" required>
                           </div>
                       </td>
                     
                       <td>
                           <div class="col-auto my-1">
                               <button id="${i}" class="btn btn-danger remove">Delete</button>
                           </div>
                       </td>
                    </tr>     
                    `
        );
    }

    function ajaxPost(url, data, callback, isJson = false) {
        let req = new XMLHttpRequest();
        req.open('POST', url);
        req.addEventListener('load', function () {
            if(req.status >= 200 && req.status < 400){
                callback(req.responseText);
            }else{
                console.error(`${req.status} ${req.statusText} ${url}`);
            }
        });
        req.addEventListener('error', function () {
            console.error(`Error network with url  ${url}`);
        });

        if(isJson){
            req.setRequestHeader("Content-Type", "application/json");
            data = JSON.stringify(data);
        }
        req.send(data);
    }

    function requestAjax(method, url, dynamic_function, data = []) {

        if(method === 'GET' || method === 'get'){
            fetch(
                url,
                {
                    headers: {
                        "Content-Type":"application/json",
                        "Accept":"application/json, text-plain, */*",
                        "X-Requested-With":"XMLHttpRequest",
                        "X-CSRF-TOKEN": '', //$('meta[name="csrf-token"]').attr('content')
                    },
                    method: method,
                }
            ).then(response => response.json())

                .then(response => {

                    dynamic_function(response);

                }).catch(error => {
                console.log(error)
            });

        }else{

            fetch(
                url,
                {
                    headers: {
                        "Content-Type":"application/json",
                        "Accept":"application/json, text-plain, */*",
                        "X-Requested-With":"XMLHttpRequest",
                        "X-CSRF-TOKEN": '',//$('meta[name="csrf-token"]').attr('content')
                    },
                    method: method,
                    body: JSON.stringify(data),
                }
            ).then(response => response.json())

                .then(response => {

                    dynamic_function(response);

                }).catch(error => {
                console.log(error)
            });
        }

    }



});