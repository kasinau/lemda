$(document).ready(function(){
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