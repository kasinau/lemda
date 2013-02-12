$(document).ready(function(){

//    $("#row1").css({ backgroundColor: "red" });
//    $("#row2").css({ backgroundColor: "blue" });
//    $("#row3").css({ backgroundColor: "green" });


//    $('tr').each(function(){
//        switch (this.id) {
//            case 'row1' :
//                $("#row1").css({ backgroundColor: "red" });
//                break;
//            case 'row2' :
//                $("#row2").css({ backgroundColor: "blue" });
//                break;
//            case 'row3' :
//                $("#row3").css({ backgroundColor: "green" });
//                break;
//        }
//    });

    i = 0;
    $('tr').each(function(){
        switch (i) {
            case 1 :
                $(this).css({ backgroundColor: "red" });
                break;
            case 2 :
                $(this).css({ backgroundColor: "blue" });
                break;
            case 3 :
                $(this).css({ backgroundColor: "green" });
                break;
        }
        i++;
    });
});