
    function prompter(){
    
        var del = window.confirm("Are you sure you want to delete?");
        if(del!==null){
            window.location.href = "../private/delete.inc.php";
            window.alert("Object deleted");
            window.location.href = "../private/manage_prod.php?itemDeleted";
        }else{
            window.location.href ="../private/manage_prod.php?itemNotDeleted";
            
        }
        }
