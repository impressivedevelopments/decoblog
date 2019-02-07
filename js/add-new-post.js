var data = {};

var defaults = {
    'category'    : 'Standart',
    'title'       : 'Title',
    'author'      : 'Somebody',
    'description' : 'text',
}

$('#title').change( function () {
    if($(this).val() === '') {
        $('.title').text(defaults['title']);
    } else {
        $('.title').text($(this).val());
        data['title'] = $(this).val();
    }
});

$('#author').change(function() {
    if($(this).val() == '' ){
        $('.author').text(defaults['author']);
    } else {
        $('.author').text($(this).val());
        data['author'] = $(this).val();
    }
});

$('#description').change(function() {
    if($(this).val() == '' ){
        $('.description').text(defaults['description']);
    } else {
        $('.description').text($(this).val());
        data['description'] = $(this).val();
    }
});

$('#category').change(function() {
    if($(this).val() == '' ){
        $('.category').text(defaults['category']);
    } else {
        $('.category').text($(this).val());
        data['category'] = $(this).val();
    }
});
