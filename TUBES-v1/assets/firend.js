$(document).ready( function () {
    $('#searchTable').DataTable( {
        pageLength : 3,
        ajax: {
            url: './friend.json',
            dataSrc: 'friends'
        },
        columns: [
            {data: 'no'},
            {data: 'Name'},
            {data: 'Cat Type'},
            {data: 'Chat'}
        ]
    } );
} );