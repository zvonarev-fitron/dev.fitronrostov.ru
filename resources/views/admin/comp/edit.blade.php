<form id="comps-page_f_update" action="{{route('comps.update', $params['comp']->id)}}" method="POST" style="margin-left: 10px; margin-right: 10px;">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'name', 'slot' => 'Имя', 'value' => $old->name ?? $params['comp']->name])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
    @include('include.input.text', ['name' => 'name_full', 'slot' => 'Наименование', 'value' => $old->name_full ?? $params['comp']->name_full])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name_full'])
    @include('include.input.text', ['name' => 'legal_addr', 'slot' => 'Юридический Адрес', 'value' => $old->legal_addr ?? $params['comp']->legal_addr])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'legal_addr'])
    @include('include.input.text', ['name' => 'fact_addr', 'slot' => 'Фактический Адрес', 'value' => $old->fact_addr ?? $params['comp']->fact_addr])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'fact_addr'])
    @include('include.input.text', ['name' => 'inn', 'slot' => 'ИНН', 'value' => $old->inn ?? $params['comp']->inn])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'inn'])
    @include('include.input.text', ['name' => 'ogrnip', 'slot' => 'ОГРН', 'value' => $old->ogrnip ?? $params['comp']->ogrnip])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'ogrnip'])
    @include('include.input.text', ['name' => 'okpo', 'slot' => 'ОКПО', 'value' => $old->okpo ?? $params['comp']->okpo])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'okpo'])
    @include('include.input.text', ['name' => 'name_bank', 'slot' => 'Банк', 'value' => $old->name_bank ?? $params['comp']->name_bank])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name_bank'])
    @include('include.input.text', ['name' => 'r_schet', 'slot' => 'Расчетный счет', 'value' => $old->r_schet ?? $params['comp']->r_schet])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'r_schet'])
    @include('include.input.text', ['name' => 'k_schet', 'slot' => 'Кор счет', 'value' => $old->k_schet ?? $params['comp']->k_schet])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'k_schet'])
    @include('include.input.text', ['name' => 'bik', 'slot' => 'БИК', 'value' => $old->bik ?? $params['comp']->bik])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'bik'])
    @include('include.input.text', ['name' => 'b_inn', 'slot' => 'ИНН Банка', 'value' => $old->b_inn ?? $params['comp']->b_inn])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'b_inn'])
    @include('include.input.text', ['name' => 'kpp', 'slot' => 'КПП', 'value' => $old->kpp ?? $params['comp']->kpp])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'b_inn'])
    @include('include.input.tel', ['name' => 'phone', 'slot' => 'Телефон', 'value' => $old->phone ?? $params['comp']->phone])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'phone'])
    @include('include.input.tel', ['name' => 'fax', 'slot' => 'Факс', 'value' => $old->fax ?? $params['comp']->fax])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'fax'])
    @include('include.input.email', ['name' => 'email', 'slot' => 'Почта', 'value' => $old->email ?? $params['comp']->email])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'email'])
    @include('include.input.text', ['name' => 'work', 'slot' => 'Время работы', 'value' => $old->work ?? $params['comp']->work])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'work'])
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="comps-page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function(){
        document.querySelector('#comps-page_f_update').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#comps-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/comps', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>

