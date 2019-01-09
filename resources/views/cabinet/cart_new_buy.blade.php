<div class="cabinet_page_cnb">
    <div class="cabinet_page_cnb_title">
        <span class="cabinet_page_cnb_title_txt">Новая клубная карта</span>
    </div>
    <div class="cabinet_page_cnb_carts">
        <ul class="cabinet_page_cnb_ul">
            <li class="cabinet_page_cnb_li">
                <input type="radio" name="cabinet_page_cnb_cart_input" class="cabinet_page_cnb_cart_input" id="cabinet_page_cnb_cart_input_1">
                <label class="cabinet_page_cnb_cart_name" for="cabinet_page_cnb_cart_input_1">VIP 12 мес + 1 мес заморозки</label>
                <span class="cabinet_page_cnb_price">550 000 р.</span>
            </li>
            <li class="cabinet_page_cnb_li">
                <input type="radio" name="cabinet_page_cnb_cart_input" class="cabinet_page_cnb_cart_input" id="cabinet_page_cnb_cart_input_2">
                <label class="cabinet_page_cnb_cart_name" for="cabinet_page_cnb_cart_input_2">Индивидуальная 12 мес с парковкой (0-0-12)</label>
                <span class="cabinet_page_cnb_price">450 000 р.</span>
            </li>
            <li class="cabinet_page_cnb_li">
                <input type="radio" name="cabinet_page_cnb_cart_input" class="cabinet_page_cnb_cart_input" id="cabinet_page_cnb_cart_input_3">
                <label class="cabinet_page_cnb_cart_name" for="cabinet_page_cnb_cart_input_3">Индивидуальная 12 мес с парковкой</label>
                <span class="cabinet_page_cnb_price">400 000 р.</span>
            </li>
        </ul>
    </div>
    <div class="cabinet_page_cnb_buy_installment">
        <input type="checkbox" class="cabinet_page_cnb_buy_installment_input" id="cabinet_page_cnb_buy_installment_input" name="cabinet_page_cnb_buy_installment_input">
        <label class="cabinet_page_cnb_buy_installment_name" for="cabinet_page_cnb_buy_installment_input">Купить в рассрочку</label>
        <ul class="cabinet_page_cnb_buy_installment_ul">
            <li class="cabinet_page_cnb_buy_installment_li">
                <input type="radio" class="cabinet_page_cnb_buy_installment_i" name="cabinet_page_cnb_buy_installment_input" id="cabinet_page_cnb_buy_installment_input_1">
                <label class="cabinet_page_cnb_buy_installment_l" for="cabinet_page_cnb_buy_installment_input_1">3 месяца</label>
            </li>
            <li class="cabinet_page_cnb_buy_installment_li">
                <input type="radio" class="cabinet_page_cnb_buy_installment_i" name="cabinet_page_cnb_buy_installment_input" id="cabinet_page_cnb_buy_installment_input_2">
                <label class="cabinet_page_cnb_buy_installment_l" for="cabinet_page_cnb_buy_installment_input_2">6 месяца</label>
            </li>
            <li class="cabinet_page_cnb_buy_installment_li">
                <input type="radio" class="cabinet_page_cnb_buy_installment_i" name="cabinet_page_cnb_buy_installment_input" id="cabinet_page_cnb_buy_installment_input_3">
                <label class="cabinet_page_cnb_buy_installment_l" for="cabinet_page_cnb_buy_installment_input_3">10 месяца</label>
            </li>
        </ul>
    </div>
    <div class="cabinet_page_cnb_summa">
        <span class="cabinet_page_cnb_txt">
            Итого: 60 000 р.
        </span>
    </div>
    <div class="cabinet_page_cnb_buttons">
        <a href="{{ route('cabinet.cart.buy') }}" class="cabinet_page_cnb_btn">Назад</a>
        <button class="cabinet_page_cnb_btn">Купить</button>
    </div>
</div>
