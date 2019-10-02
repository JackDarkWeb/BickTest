$(function () {

    let i = 0;

    $(document).on('click', '#add, .remove, #apply', function (e) {
        e.preventDefault();

        switch (this.id) {
            case 'add':
                i++;
                const content = $(this).parents('#form').find('#table');
                content.append(
                    '<tr id="row'+ i +'">' +
                        '<td>' +
                            '<select name="field" class="custom-select my-1 mr-sm-2" id="field">' +
                                '<option selected>Field...</option>' +
                                '<option value="size">Size</option>' +
                                '<option value="forks">Forks</option>' +
                                ' <option value="stars">Stars</option>' +
                                '<option value="followers">Followers</option>' +
                            '</select>' +
                        '</td>' +

                        '<td>' +
                            '<select name="operator" class="custom-select my-1 mr-sm-2" id="operator">' +
                                '<option selected>Operator...</option>' +
                                '<option value="+">Plus</option>' +
                                '<option value="=">Equal</option>' +
                                '<option value="-">Minus</option>' +
                            '</select>' +
                        '</td>' +

                        '<td>' +
                            ' <input type="number" name="value" id="value" class="form-control my-1 mr-sm-2" placeholder="Value ..."/>' +
                        '</td>'+

                        '<td><button id="'+ i +'" class="btn btn-danger remove">Delete</button></td>' +

                    '</tr>'
                );
                break;

            case 'apply':

                const form =  $('#form');
                const field = form.find('#field').val();
                const operator = form.find('#operator').val();
                const value = form.find('#value').val();

                let json = {
                    field: field,
                    operator:operator,
                    value:value
                };
                $.ajax({
                    url: 'trait.php',
                    method: 'POST',
                    dataType: 'json',
                    async: true,
                    cache:false,
                    data:json,
                    success: function (response) {

                    }

                });
                break;

            default:
                let id_remove = $(this).attr('id');
                $('#row'+ id_remove +'').remove();
                break;
        }
    });



});