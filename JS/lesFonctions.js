/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function AfficherLesFilms(code)
{
                //alert(code);
                
    $.ajax
    (
        {
            type:"get",
            url:"GetLesFilms.php",
            data:"codeCinema="+code,
            
            success:function(data)
                {
                    $('#divFilms').empty();
                    $('#divFilms').append(data);
                },
                
            error : function()
                {
                            
                }
        }
    );       
}

