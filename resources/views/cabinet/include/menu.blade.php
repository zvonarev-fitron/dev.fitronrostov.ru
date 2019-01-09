<div class="cabinet_container_content_menu">
    <ul class="cabinet_container_content_menu_ul">
        <li class="{{ 'cart' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.cart') }}" class="cabinet_container_content_menu_a">Клубная карта</a>
        </li>
        <li class="{{ 'schedule' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.schedule') }}" class="cabinet_container_content_menu_a">Расписание</a>
        </li>
        <li class="{{ 'calendar' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.calendar') }}" class="cabinet_container_content_menu_a">Календарь</a>
        </li>
        <li class="{{ 'active' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.active') }}" class="cabinet_container_content_menu_a">Активность</a>
        </li>
        <li class="{{ 'deposit' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.deposit') }}" class="cabinet_container_content_menu_a">Депозит</a>
        </li>
        <li class="{{ 'service' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.service') }}" class="cabinet_container_content_menu_a">Мои услуги</a>
        </li>
        <li class="{{  'bonus' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.bonus') }}" class="cabinet_container_content_menu_a">Бонус</a>
        </li>
        <li class="{{ 'trainer' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.trainer') }}" class="cabinet_container_content_menu_a">Тренеры</a>
        </li>
        <li class="{{ 'messages' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.messages') }}" class="cabinet_container_content_menu_a">Сообщения (2)</a>
        </li>
        <li class="{{ 'feedback' == $params['active_menu'] ?  'cabinet_container_content_menu_active' : ''}}">
            <a href="{{ route('cabinet.feedback') }}" class="cabinet_container_content_menu_a">Обратная связь</a>
        </li>
    </ul>
</div>
