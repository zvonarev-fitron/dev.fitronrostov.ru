<div style="margin-left: 10px; margin-right: 10px;">
    <h2>Перечень страниц</h2>
    <table id="pages-page_t_index" class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Наименование</th>
            <th scope="col">Количество</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['type_trainer'] as $type)
            <tr>
                <td>{{$type->name}}</td>
                <td>{{$params['trainer'][$type->id]}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>