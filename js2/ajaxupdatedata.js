const ajaxcall = (cash)=>{
    
    let money = cash;
    $.ajax({
        url: 'http://localhost/mechanCasino/includes/update.inc.php',
        method: 'POST',
        data: `money=${money}`,
        success: function(response) {
            console.log(money);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
};