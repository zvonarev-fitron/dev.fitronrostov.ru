<div class="cabinet_page_d">
    <div class="cabinet_page_d_title">
        <div class="cabinet_page_d_title_txt">Текущий депозит:</div>
        <div class="cabinet_page_d_title_summa">10 000 р.</div>
        <a href="{{ route('cabinet.deposit.replenish') }}" class="cabinet_page_d_title_add">Пополнить</a>
    </div>
    <hr class="cabinet_page_d_line" />
    <div class="cabinet_page_d_last_movie">
        <span class="cabinet_page_d_last_movie_name">Последние движения:</span>
        <div class="cabinet_page_d_last_movie_div">
            <span class="cabinet_page_d_last_movie_date">05.10.2018</span>
            <ul class="cabinet_page_d_last_movie_ul">
                <li class="cabinet_page_d_last_movie_li">
                    <span class="cabinet_page_d_last_movie_li_price">100 р.</span>
                    <span class="cabinet_page_d_last_movie_li_name">кофе</span>
                </li>
                <li class="cabinet_page_d_last_movie_li">
                    <span class="cabinet_page_d_last_movie_li_price">1 000 р.</span>
                    <span class="cabinet_page_d_last_movie_li_name">Персональная тренировка</span>
                </li>
            </ul>
            <span class="cabinet_page_d_last_movie_date">01.10.2018</span>
            <ul class="cabinet_page_d_last_movie_ul">
                <li class="cabinet_page_d_last_movie_li">
                    <span class="cabinet_page_d_last_movie_li_price">2 000 р.</span>
                    <span class="cabinet_page_d_last_movie_li_name">Абонемент "парковка"</span>
                </li>
            </ul>
            <a href="/aaa" class="cabinet_page_d_last_movie_div_detail">Подробная детализация >></a>
        </div>
    </div>
    <hr class="cabinet_page_d_line" />
    <div class="cabinet_page_d_non_paid_div">
        <span class="cabinet_page_d_last_movie_name">Не оплаченные услуги:</span>
        <ul class="cabinet_page_d_non_paid_ul">
            <li class="cabinet_page_d_non_paid_li">
                <input type="checkbox" id="cabinet_page_d_non_paid_i_1" class="cabinet_page_d_non_paid_i"/>
                <label for="cabinet_page_d_non_paid_i_1" class="cabinet_page_d_non_paid_l">1 000 р. Тренировка "Фит-Бокс"</label>
            </li>
            <li class="cabinet_page_d_non_paid_li">
                <input type="checkbox" id="cabinet_page_d_non_paid_i_2" class="cabinet_page_d_non_paid_i"/>
                <label for="cabinet_page_d_non_paid_i_2" class="cabinet_page_d_non_paid_l">5 000 р. отсроченный платеж на 25.10.2018</label>
            </li>
        </ul>
    </div>
    <hr class="cabinet_page_d_line" />
    <div class="cabinet_page_d_title">
        <span class="cabinet_page_d_title_txt">Выбрано:</span>
        <span class="cabinet_page_d_title_summa">0 р.</span>
        <a href="{{ route('cabinet.deposit.payment_from_deposit') }}" class="cabinet_page_d_title_add">Оплатить с депозита</a>
    </div>
</div>
