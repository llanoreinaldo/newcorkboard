$('document').ready(() => {

    $('#sendInvites').click((e) => {
        e.preventDefault();
        let modalUrlMsg = boardUrl;
        let boardName = $('#modalInvite').attr("data-boardName");
        let aTag = actualUrl;
        let emailList = $('#inviteEmails').val().trim();
        let emailMsg = $('#inviteEmailMsg').val().trim();
        if (emailList) {
            $('#inviteEmails').val("");
            $('#inviteEmailMsg').val("");
            let emailArr = emailList.split(",");
            let emailRegex = /^([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$)/;
            for (let i = 0; i < emailArr.length; i++) {
                if (!emailRegex.test(emailArr[i])) {
                    return $('#modalInvite').html("<h1>Please Provide Valid Emails</h1>");
                }
            }

            let mailData = {
                to: emailList,
                subject: `You're invited to a new Corkboard!`,
                bodyText: `Welcome to Corkboard!
                    Your Board's name is: ${boardName}
                    Your access url is: ${aTag}
                    Message: ${emailMsg}
                    Please bookmark your board page and save this email for reference`,
                htmlText: `<h1>Welcome to corkboard!</h1>
                    <h3>Your Board's name is: ${boardName}</h3>
                    Your Board URL is: <a href="${aTag}">${aTag}</a><br>
                    Message from Board Creator: ${emailMsg}<br>
                    Please bookmark your board page and save this email for reference`,
            };
            //mail(req.body.to, req.body.subject, req.body.bodyText, req.body.htmlText);
            $.post("/api/mail", mailData, function (data2) {
                $('#modalInvite').html(modalUrlMsg + "<p>Your invite message has been sent!</p>" +
                    "<p>Taking you to your board page in 5 seconds...</p>");
                setTimeout(() => location.href = aTag, 5000);
            });

        } else {
            $('#modalInvite').html("<h1>Please Provide Valid Emails</h1>");
        }

    })



    $('newboard').click(function () {
        $('#createBoardModal').show();
        $('#boardCancel').show();

    });

    $('#boardSubmit').click(function () {
        $('#newboard').show();
    });

    $('#boardCancel').click(function () {
        $('#newBoardForm').hide();
        $('#boardList').show();
        $('#newboard').show();
        $('#boardCancel').hide()
    })

});