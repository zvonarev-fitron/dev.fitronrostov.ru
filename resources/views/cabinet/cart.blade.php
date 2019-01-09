<div class="cabinet_container_content_page">
    <div class="cabinet_container_content_page_block">
        <div><span>Текушая клубная карта:</span></div>
        <div><span>Ренью 12 месяцев + 2 месяца заморозки</span></div>
    </div>
    <label for="cabinet_container_content_page_toogle_validity" class="cabinet_container_content_page_block_title">
        <span class="cabinet_container_content_page_block_txt">Карта действует до 31.12.2018</span>
    </label>
    <input type="checkbox" id="cabinet_container_content_page_toogle_validity" style="display: none;">
    <div class="cabinet_container_content_page_block">
        <div class="cabinet_container_content_page_block_buttons">
            <a class="cabinet_container_content_page_block_btn" href="{{ route('cabinet.cart.extend') }}">Продлить</a>
            <a class="cabinet_container_content_page_block_btn" href="{{ route('cabinet.cart.buy') }}">Купить</a>
        </div>
    </div>
    <label for="cabinet_container_content_page_toogle_rest_freeze" class="cabinet_container_content_page_block_title">
        <span class="cabinet_container_content_page_block_txt">Остаток заморозки 20 дней</span>
    </label>
    <input type="checkbox" id="cabinet_container_content_page_toogle_rest_freeze" style="display: none;">
    <div class="cabinet_container_content_page_block">
        <div class="cabinet_container_content_page_block_buttons">
            <button class="cabinet_container_content_page_block_btn">Заморозить</button>
            <button class="cabinet_container_content_page_block_btn">Докупить</button>
        </div>
    </div>
    <label for="cabinet_container_content_page_toogle_installment_plan" class="cabinet_container_content_page_block_title">
        <span class="cabinet_container_content_page_block_txt">Остаток рассрочки 10 000 р.</span>
    </label>
    <input type="checkbox" id="cabinet_container_content_page_toogle_installment_plan" style="display: none;">
    <div class="cabinet_container_content_page_block">
        <ul class="cabinet_container_content_page_block_installment">
            <li class="cabinet_container_content_page_block_installment_li">
                <input type="checkbox" id="cabinet_page_c_installment_1" class="cabinet_page_c_installment_i"/>
                <label for="cabinet_page_c_installment_1" class="cabinet_page_c_installment">5 000 р. На 25.10.2018 </label>
            </li>
            <li class="cabinet_container_content_page_block_installment_li">
                <input type="checkbox" id="cabinet_page_c_installment_2" class="cabinet_page_c_installment_i"/>
                <label for="cabinet_page_c_installment_2" class="cabinet_page_c_installment">5 000 р. На 25.10.2018 </label>
            </li>
            <li class="cabinet_container_content_page_block_installment_li">
                <input type="checkbox" id="cabinet_page_c_installment_3" class="cabinet_page_c_installment_i"/>
                <label for="cabinet_page_c_installment_3" class="cabinet_page_c_installment">5 000 р. На 25.10.2018 </label>
            </li>
            <li class="cabinet_container_content_page_block_installment_li">
                <input type="checkbox" id="cabinet_page_c_installment_4" class="cabinet_page_c_installment_i"/>
                <label for="cabinet_page_c_installment_4" class="cabinet_page_c_installment">5 000 р. На 25.10.2018 </label>
            </li>
        </ul>
        <div class="cabinet_container_content_page_block_buttons">
            <button class="cabinet_container_content_page_block_btn">Оплатить</button>
        </div>
    </div>
</div>
