/**
 * Created by iviakc on 26.03.17.
 */
$('#modal-btn').on('click', function() {
    $('#modal').modal('show')
        .find('#modal-content')
        .load($(this).attr('data-target'));
});