$(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tas').load('displayTAs.php');
    });
}