$( document ).ready(function() {
    console.log( "jQuery is ready!" );

    $('#testbutton').click(function(){
        alert("A testbutton was clicked.");
    });

    $('#import_data').click(function(){
        $('#waiting').show();
    });

    $('table').tablesorter();

    $('input:checkbox').click(function(){
        if ($('input:checkbox:checked').length) {
            $('#delete-selected-commits').removeClass('disabled');
        } else {
            $('#delete-selected-commits').addClass('disabled');
        }
    })

    $('.top-menu').each(function() {
        if ($(this).html().indexOf($('#title').html()) > -1) {
            $(this).css('font-weight', 'bold');
        }
    })

});

function filter() {
    $filter = $('#filter').val();
    $counter = 0;

    $('.plugin').each(function(){
        if ($(this).text().indexOf($filter) == -1) {
            $(this).hide();
        } else {
            $(this).show();
            $counter++;
        }
    })
    $all = $('.plugin').length
    if ($counter == $all) {
        $text = $counter;
    } else {
        $text = $counter + " of " + $all;
    }

    $('#plugins_number').html($text);
}
