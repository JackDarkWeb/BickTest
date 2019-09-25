$(function () {

  $(document).on('click', '#delete-default', function (e) {
      e.preventDefault();
      $('#row-default').remove();
  });



    let i = 1;
    $(document).on('click', '#add, .remove', function (e) {
        e.preventDefault();

        if(this.id === 'add'){
            //alert('Add')
            i++
            $('table').append('<tr id="row'+ i +'">' +
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

        }else{

            let btn_remove = $(this).attr('id');
            $('#row'+ btn_remove +'').remove();
        }

    });

    $(document).on('click', '#apply', function (e) {
        e.preventDefault();


            const field = $('#field').val();
            const operator = $('#operator').val();
            const val = $('#value').val();
            $.ajax({
                url: 'https://api.github.com/search/repositories?q=tetris+language:assembly&sort='+ field +'&order='+ val,
                method: 'GET',
                dataType: 'json',
                async: true,
                cache:false,
                success: function (data) {

                    //console.log(data)
                    $('#results').html(data);
                }
            });


    })





});