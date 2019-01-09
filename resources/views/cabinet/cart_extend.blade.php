<div class="cabinet_page_ce">
    <div class="cabinet_page_ce_title">
        <span class="cabinet_page_ce_txt">Продление клубной карты</span>
    </div>
    <div class="cabinet_page_ce_name">
        <span class="cabinet_page_ce_name_txt">Ренью 12 месяцев + 2 месяца заморозки</span>
    </div>
    <div class="cabinet_page_ce_installment">
            <input type="checkbox" class="cabinet_page_ce_installment_input" name="cabinet_page_ce_installment_input" id="cabinet_page_ce_installment_input">
            <label class="cabinet_page_ce_installment_name" for="cabinet_page_ce_installment_input">Купить в рассрочку</label>
            <ul class="cabinet_page_ce_installment_ul">
                <li class="cabinet_page_ce_installment_li">
                        <input type="radio" class="cabinet_page_ce_installment_math_input" value="3" name="cabinet_page_ce_installment_math_input" id="cabinet_page_ce_installment_math_1" checked>
                        <label class="cabinet_page_ce_installment_math_name" for="cabinet_page_ce_installment_math_1">3 месяца</label>
                </li>
                <li class="cabinet_page_ce_installment_li">
                        <input type="radio" class="cabinet_page_ce_installment_math_input" value="3" name="cabinet_page_ce_installment_math_input" id="cabinet_page_ce_installment_math_2">
                        <label class="cabinet_page_ce_installment_math_name" for="cabinet_page_ce_installment_math_2">6 месяца</label>
                </li>
                <li class="cabinet_page_ce_installment_li">
                        <input type="radio" class="cabinet_page_ce_installment_math_input" value="3" name="cabinet_page_ce_installment_math_input" id="cabinet_page_ce_installment_math_3">
                        <label class="cabinet_page_ce_installment_math_name" for="cabinet_page_ce_installment_math_3">10 месяца</label>
                </li>
            </ul>
    </div>
    <div class="cabinet_page_ce_summa">
        <span class="cabinet_page_ce_summa_txt">Итого 22 000 р.</span>
    </div>
    <div class="cabinet_page_ce_desc">
        <span class="cabinet_page_ce_desc_txt">*Цены на клубную карту могут меняться в зависимости от сезона</span>
    </div>
    <div class="cabinet_page_ce_buttons">
        <a href="{{ route('cabinet.cart') }}" class="cabinet_page_ce_btn">Отмента</a>
        <a href="{{ route('cabinet.cart.extend.buy') }}" class="cabinet_page_ce_btn">Продлить</a>
    </div>
</div>
