
    $('newboard').click(function(){
        $('#createBoardModal').show();
        $('#boardCancel').show();

    });

    $('#boardSubmit').click(function(){
        $('#newboard').show();
    });

     $('#boardCancel').click(function(){
        $('#newBoardForm').hide();
        $('#boardList').show();
        $('#newboard').show();
        $('#boardCancel').hide()
     })

