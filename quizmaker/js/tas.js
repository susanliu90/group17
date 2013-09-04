$(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tas').load('displayTA.php');
    });
}