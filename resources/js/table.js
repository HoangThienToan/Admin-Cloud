jQuery(document).ready(function () {
    $('#show_table a').click(function (e) {
        e.preventDefault();
        var csrfToken = $('input[name="_token"]').val();
        var href = $('#load_data_files').data('variable');
        $.ajax({
            url: href,
            type: "POST",
            dataType: "json",
            data: { '_token': csrfToken },
            success: function (response) {
                $('#main-data').html(response.view);
                console.log(response.type);
                const data = response.dataTable.original.data;
                if (response.type === 'admin') {
                    users_data_table(data);
                } else {
                    files_data_table(data);
                }
                
            },
            error: function () {
                alert('Error occurred while loading data.');
            }
        });
    });

    function users_data_table(data) {
        const Table = $('#main-data').find('#TableFiles');
        Table.DataTable({
            data: data,
            columns: [
                { data: 'id', name: 'ID' },
                { data: 'user_id', name: 'User ID' },
                {
                    data: 'info',
                    name: 'Info',
                    render: function (data) {
                        var replacedData = data.replace(/&quot;/g, '"');
                        var parsedData = JSON.parse(replacedData);
                        var column1 = parsedData.url;
                        var column2 = parsedData.name;
                        var column3 = parsedData.size;
                        var column4 = parsedData.modified;
                        return column1 + ' | ' + column2 + ' | ' + column3 + ' | ' + column4;
                    }
                },
                { data: 'domain', name: 'Domain' },
                { data: 'created_at', name: 'Created At' },
                { data: 'datedTimeDel', name: 'Dated Time Del' },
            ],
            rowCallback: function (row, data, index) {
                if (data.id) {
                    $(row).addClass('hidden');
                    $(row).attr('data-id', data.id);
                }
                if (index === 0) {
                    $(row).prepend('<td>1</td>');
                } else {
                    $(row).prepend('<td>' + index + '</td>');
                }
            }
        });
    }

    function files_data_table(data) {
        const Table = $('#main-data').find('#TableFiles');

        Table.DataTable({
            data: data, 
            columns: [
                { data: 'id', name: 'ID' },
                { data: 'user_id', name: 'User ID' },
                {
                    data: 'info',
                    name: 'Info',
                    render: function (data) {
                        var replacedData = data.replace(/&quot;/g, '"');
                        var parsedData = JSON.parse(replacedData);
                        var column1 = parsedData.url;
                        var column2 = parsedData.name;
                        var column3 = parsedData.size;
                        var column4 = parsedData.modified;
                        return column1 + ' | ' + column2 + ' | ' + column3 + ' | ' + column4;
                    }
                },
                { data: 'domain', name: 'Domain' },
                { data: 'created_at', name: 'Created At' },
                { data: 'datedTimeDel', name: 'Dated Time Del' },
            ],
            rowCallback: function (row, data, index) {
                if (data.id) {
                    $(row).addClass('hidden');
                    $(row).attr('data-id', data.id);
                }
                if (index === 0) {
                    $(row).prepend('<td>1</td>');
                } else {
                    $(row).prepend('<td>' + index + '</td>');
                }
            }
        });
    }
})