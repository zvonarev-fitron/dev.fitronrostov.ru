<div class="cabinet_container_header">
    <div id="cabinet_select_club" class="cabinet_select_club">
        <div class="header_top_block_select_club select-club">
            <div class="select">
                <span class="label" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
            </div>
            <div class="another-clubs">
                @foreach($params['clubs'] as $club)
                    <div class="another-club" data-id="{{$club->id}}" data-code="{{$club->code}}">{{$club->name}}</div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="cabinet_user_balans">
        <span>Баланс: 10 000 р.</span>
    </div>
</div>
