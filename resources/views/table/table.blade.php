@if(auth()->user()->type === 'admin')
<table class="table table-bordered table-striped ajax_view" id="TableFiles">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" class='hidden' aria-controls="TableFiles" rowspan="1" colspan="1">ID</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Name</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Data Limit</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Domain</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Server Cloud</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Key</th>
        </tr>
    </thead>
</table>
@else
<table class="table table-bordered table-striped ajax_view" id="TableFiles">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">ID</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">User ID</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Info</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Domain</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Created At</th>
            <th class="sorting" tabindex="0" aria-controls="TableFiles" rowspan="1" colspan="1">Dated Time Del</th>
        </tr>
    </thead>
</table>
@endif