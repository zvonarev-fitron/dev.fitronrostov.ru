<div class="cabinet_container_content_page">
    <div class="cabinet_container_content_page_title">
        <span class="cabinet_container_content_page_title_txt">Новая клубная карта</span>
    </div>
    <div class="cabinet_container_content_page_srok">
        <div class="cabinet_container_content_page_srok_title">
            <span class="cabinet_container_content_page_srok_title_txt">Срок действия карты</span>
        </div>
        <div class="cabinet_container_content_page_srok_math">
            <ul class="cabinet_page_cb_srok_math_ul">
                <li class="cabinet_page_cb_srok_math_li">
                    <input type="radio" name="srok" value="3" checked id="cabinet_page_cb_srok_math_i_1" class="cabinet_page_cb_srok_math_i"><label for="cabinet_page_cb_srok_math_i_1" class="cabinet_page_cb_srok_math_l"><span>3 месяца</span></label>
                </li>
                <li class="cabinet_page_cb_srok_math_li">
                    <input type="radio" name="srok" value="6" id="cabinet_page_cb_srok_math_i_2" class="cabinet_page_cb_srok_math_i"><label for="cabinet_page_cb_srok_math_i_2" class="cabinet_page_cb_srok_math_l"><span>6 месяцев</span></label>
                </li>
                <li class="cabinet_page_cb_srok_math_li">
                    <input type="radio" name="srok" value="12" id="cabinet_page_cb_srok_math_i_3" class="cabinet_page_cb_srok_math_i"><label for="cabinet_page_cb_srok_math_i_3" class="cabinet_page_cb_srok_math_l"><span>12 месяцев</span></label>
                </li>
            </ul>
        </div>
    </div>
    <div class="cabinet_container_content_page_dop">
        <div class="cabinet_container_content_page_dop_title">
            <span class="cabinet_container_content_page_dop_title_txt">Дополнительные услуги</span>
        </div>
        <div class="cabinet_container_content_page_dop_service">
            <ul class="cabinet_page_cb_dop_ul_f">
                <li class="cabinet_page_cb_dop_li_f">
                    <input type="checkbox" name="parkovka" id="cabinet_page_cb_dop_f1" class="cabinet_page_cb_drop_i">
                    <label for="cabinet_page_cb_dop_f1" class="cabinet_page_cb_drop_l">Парковка</label>
                </li>
                <li class="cabinet_page_cb_dop_li_f">
                    <input type="checkbox" name="basseen" id="cabinet_page_cb_dop_f2" class="cabinet_page_cb_drop_i">
                    <label for="cabinet_page_cb_dop_f2" class="cabinet_page_cb_drop_l">Бассейн</label>
                </li>
                <li class="cabinet_page_cb_dop_li_f">
                    <input type="checkbox" name="zamorozka" id="cabinet_page_cb_dop_f3" class="cabinet_page_cb_drop_i">
                    <label for="cabinet_page_cb_dop_f3" class="cabinet_page_cb_drop_l">Заморозка</label>
                </li>
                <li class="cabinet_page_cb_dop_li_f">
                    <input type="checkbox" name="sodostup" id="cabinet_container_content_page_dop_service_club" class="cabinet_page_cb_drop_i">
                    <label for="cabinet_container_content_page_dop_service_club" class="cabinet_page_cb_drop_l">Содоступ</label>
                    <ul class="cabinet_container_content_page_dop_service_club">
                        <li class="cabinet_container_content_page_dop_service_club_li">
                            <input type="checkbox" name="millenium" id="cabinet_page_cb_dop_s1" class="cabinet_page_cb_drop_i">
                            <label for="cabinet_page_cb_dop_s1" class="cabinet_page_cb_drop_l">Fitron-millenium</label>
                        </li>
                        <li class="cabinet_container_content_page_dop_service_club_li">
                            <input type="checkbox" name="gazetni" id="cabinet_page_cb_dop_s2" class="cabinet_page_cb_drop_i">
                            <label for="cabinet_page_cb_dop_s2" class="cabinet_page_cb_drop_l">Fitron-газетный</label>
                        </li>
                        <li class="cabinet_container_content_page_dop_service_club_li">
                            <input type="checkbox" name="orbita" id="cabinet_page_cb_dop_s3" class="cabinet_page_cb_drop_i">
                            <label for="cabinet_page_cb_dop_s3" class="cabinet_page_cb_drop_l">Fitron-орбита</label>
                        </li>
                        <li class="cabinet_container_content_page_dop_service_club_li">
                            <input type="checkbox" name="cyclon" id="cabinet_page_cb_dop_s4" class="cabinet_page_cb_drop_i">
                            <label for="cabinet_page_cb_dop_s4" class="cabinet_page_cb_drop_l">Cycle-студия Cyclon</label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="cabinet_container_content_page_buttons">
        <a href="{{ route('cabinet.cart') }}" class="cabinet_container_content_page_btn">Отменить</a>
        <a href="{{ route('cabinet.cart.buy.new') }}" class="cabinet_container_content_page_btn">Подобрать</a>
    </div>
</div>
