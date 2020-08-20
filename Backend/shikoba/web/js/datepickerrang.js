/**
 * Created by maze on 14/06/17.
 */
$(document).ready(function (e) {
    //Date Range Picker
    if(e !== undefined) {
        e = e || document.event
        e.cancelBubble = true;
        if (e.stopPropagation) e.stopPropagation();
        return false
    } else {
        e = e || document.event
        $('.daterange').dateRangePicker(e, {
            format: 'DD/MM/Y',
            language: 'es',
            separator: ' a ',
        });
    }
});