@extends('layouts.layout')

@section('logo')
    <div id="topleftcont" class="uk-hidden-small">
        <div class="toplefttop"></div>
        <div id="topleftblock">
            <div class="bottomwhite"></div>
        </div>
        <div class="blueline"></div>
    </div>
@endsection

@section('pagehead')
    <div id="pagehead" style="background: url(/images/bg2.jpg) no-repeat center;background-size: cover;">
        <div class="container">
            <h1>{{$params['page']->menu}}</h1>
            <ul class="uk-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['page']->menu}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">



        <div class="pagecontent uk-margin-large-top uk-margin-large-bottom privacy-policy">
            <h3>1. Общие положения</h3>
            <p>1.1. Настоящая Политика в отношении обработки персональных данных (далее – Политика) составлена в соответствии с пунктом 2 статьи 18.1 Федерального закона «О персональных данных» № 152-ФЗ от 27 июля 2006 г., а также иными нормативно-правовыми актами Российской Федерации в области защиты и обработки персональных данных и действует в отношении всех персональных данных (далее – Данные), которые Компания (далее – Оператор) может получить от субъекта персональных данных, являющегося стороной по гражданско-правовому договору, а также от субъекта персональных данных, состоящего с Оператором в отношениях, регулируемых трудовым законодательством (далее – Работник).</p>
            <p>1.2. Оператор обеспечивает защиту обрабатываемых персональных данных от несанкционированного доступа и разглашения, неправомерного использования или утраты в соответствии с требованиями Федерального закона от 27 июля 2006 г. № 152-ФЗ «О персональных данных».</p>
            <p>1.3. Изменение Политики.</p>
            <p>1.3.1. Оператор имеет право вносить изменения в настоящую Политику. При внесении изменений в заголовке Политики указывается дата последнего обновления редакции. Новая редакция Политики вступает в силу с момента ее размещения на сайте, если иное не предусмотрено новой редакцией Политики.</p>

            <h3>2. Термины и принятые сокращения</h3>
            <p><b>Персональные данные (ПД)</b> – любая информация, относящаяся к прямо или косвенно  определенному или определяемому физическому лицу (субъекту персональных данных).</p>
            <p><b>Обработка персональных данных</b> – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>
            <p><b>Автоматизированная обработка персональных данных</b> – обработка персональных данных с помощью средств вычислительной техники.</p>
            <p><b>Информационная система персональных данных (ИСПД)</b> – совокупность содержащихся в базах данных персональных данных и обеспечивающих их обработку информационных технологий и технических средств.</p>
            <p><b>Персональные данные, сделанные общедоступными субъектом персональных данных,</b> – ПД, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе.</p>
            <p><b>Предоставление персональных данных</b> – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц.</p>
            <p><b>Блокирование персональных данных</b> – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).</p>
            <p><b>Уничтожение персональных данных</b> – действия, в результате которых становится невозможным восстановить содержание персональных данных в информационной системе персональных данных и (или) в результате которых уничтожаются материальные носители персональных данных.</p>
            <p><b>Обезличивание персональных данных</b> – действия, в  результате которых становится невозможным без использования  дополнительной информации определить принадлежность персональных данных конкретному субъекту персональных данных.</p>
            <p><b>Оператор</b> – Компания, самостоятельно или совместно с другими лицами организующий обработку персональных данных, а также определяющий цели обработки персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными. Оператором является Компания зарегистрированная в соответствии с законодательством РФ.</p>

            <h3>3. Обработка персональных данных</h3>
            <p>3.1. Получение ПД.</p>
            <p>3.1.1. Все ПД следует получать от самого субъекта. Если ПД субъекта можно получить только у третьей стороны, то субъект должен быть уведомлен об этом или от него должно быть получено согласие.</p>
            <p>3.1.2. Оператор должен сообщить субъекту о целях, предполагаемых источниках и способах получения ПД, характере подлежащих получению ПД, перечне действий с ПД, сроке, в течение которого действует согласие, и порядке его отзыва, а также о последствиях отказа субъекта дать письменное согласие на их получение.</p>
            <p>3.1.3. Документы, содержащие ПД, создаются путем:</p>
            <p>– копирования оригиналов документов (паспорт, документ об образовании, свидетельство ИНН, пенсионное свидетельство и др.);</p>
            <p>– внесения сведений в учетные формы;</p>
            <p>– получения оригиналов необходимых документов (трудовая книжка, медицинское заключение, характеристика и др.).</p>
            <p>3.2. Обработка ПД.</p>
            <p>3.2.1. Обработка персональных данных осуществляется:</p>
            <p>– с согласия субъекта персональных данных на обработку его персональных данных;</p>
            <p>– в случаях, когда обработка персональных данных необходима для осуществления и выполнения возложенных законодательством РФ функций, полномочий и обязанностей;</p>
            <p>– в случаях, когда осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее – персональные данные, сделанные общедоступными субъектом персональных данных).</p>
            <p>3.2.2. Цели обработки персональных данных:</p>
            <p>– осуществление трудовых отношений;</p>
            <p>– осуществление гражданско-правовых отношений;</p>
            <p>– для идентификации субъекта персональных данных;</p>
            <p>– для осуществления обслуживания субъекта персональных данных;</p>
            <p>– для связи с субъектом персональных данных, направления уведомлений, запросов и/или информации, связанной с оказанием услуг, а также для обработки запросов и/или заявок от субъектов персональных данных;</p>
            <p>– для проведения статистических и иных исследований на основе обезличенных данных.</p>
            <p>3.2.3. Категории субъектов персональных данных.</p>
            <p>Обрабатываются ПД следующих субъектов ПД:</p>
            <p>– физические лица, состоящие с Оператором в трудовых отношениях;</p>
            <p>– физические лица, уволившиеся от Оператора;</p>
            <p>– физические лица, являющиеся кандидатами на работу;</p>
            <p>– физические лица, состоящие с Оператором в гражданско-правовых отношениях, в том числе потенциальные клиенты, обратившиеся к Оператору за получением информации о составе услуг, предоставляемых Оператором.</p>
            <p>3.2.4. ПД, обрабатываемые Оператором:</p>
            <p>– данные, полученные при осуществлении трудовых отношений, в связи с оформлением, изменением, расторжением трудовых отношений;</p>
            <p>– данные, полученные для осуществления отбора кандидатов на работу;</p>
            <p>– данные, полученные при осуществлении гражданско-правовых отношений.</p>
            <p>3.2.5. Обработка персональных данных ведется:</p>
            <p>– с использованием средств автоматизации;</p>
            <p>– без использования средств автоматизации.</p>
            <p>3.3. Хранение ПД.</p>
            <p>3.3.1. ПД субъектов могут быть получены, проходить дальнейшую обработку и передаваться на хранение, как на бумажных носителях, так и в электронном виде.</p>
            <p>3.3.2. ПД, зафиксированные на бумажных носителях, хранятся в запираемых шкафах либо в запираемых помещениях с ограниченным правом доступа.</p>
            <p>3.3.3. ПД субъектов, обрабатываемые с использованием средств автоматизации в разных целях, хранятся в разных папках.</p>
            <p>3.3.4. Не допускается хранение и размещение документов, содержащих ПД, в открытых электронных каталогах (файлообменниках) в ИСПД.</p>
            <p>3.3.5. Хранение ПД в форме, позволяющей определить субъекта ПД, осуществляется не дольше, чем этого требуют цели их обработки, и они подлежат уничтожению по достижении целей обработки или в случае утраты необходимости в их достижении.</p>
            <p>3.4. Уничтожение ПД.</p>
            <p>3.4.1. Уничтожение документов (носителей), содержащих ПД, производится путем сожжения, дробления (измельчения), химического разложения, превращения в бесформенную массу или порошок. Для уничтожения бумажных документов допускается применение шредера.</p>
            <p>3.4.2. ПД на электронных носителях уничтожаются путем стирания или форматирования носителя.</p>
            <p>3.4.3. Факт уничтожения ПД подтверждается документально актом об уничтожении носителей.</p>
            <p>3.5. Передача ПД.</p>
            <p>3.5.1. Оператор передает ПД третьим лицам в следующих случаях:</p>
            <p>– субъект выразил свое согласие на такие действия;</p>
            <p>– передача предусмотрена российским или иным применимым законодательством в рамках установленной законодательством процедуры.</p>
            <p>3.5.2. Перечень лиц, которым передаются ПД.</p>
            <p>Третьи лица, которым передаются ПД:</p>
            <p>– Пенсионный фонд РФ для учета (на законных основаниях);</p>
            <p>– налоговые органы РФ (на законных основаниях);</p>
            <p>– Фонд социального страхования РФ (на законных основаниях);</p>
            <p>– территориальный фонд обязательного медицинского страхования (на законных основаниях);</p>
            <p>– страховые медицинские организации по обязательному и добровольному медицинскому страхованию (на законных основаниях);</p>
            <p>– банки для начисления заработной платы (на основании договора);</p>
            <p>– организации, оказывающие Оператору услуги по сопровождению бизнеса, в случаях, когда это необходимо для получения Оператором услуг;</p>
            <p>– органы МВД, ФСБ, прокуратуры, полиции России в случаях, установленных законодательством;</p>
            <p>– судебные органы в связи с осуществлением правосудия;</p>
            <p>– иные органы и организации в случаях, установленных нормативно- правовыми актами, обязательными для исполнения.</p>
            <p>3.6. Оператор организует хранение ПД в течение времени, установленного требованиями Трудового кодекса РФ от 30.12.2001 № 197-ФЗ, Федерального закона от 06.12.2001 № 402-ФЗ «О бухгалтерском учете», Налогового кодекса РФ (часть первая – Федеральный закон от 31.07.1998 № 146-ФЗ; часть вторая – Федеральный закон от 05.08.2000 № 117-ФЗ); «Перечня типовых управленческих архивных документов, образующихся в процессе деятельности государственных органов, органов местного самоуправления и организаций, с указанием сроков хранения (Приложение к приказу Министерства культуры РФ от 25.08.2010 № 558).</p>

            <h3>4. Защита персональных данных</h3>
            <p>4.1. В соответствии с требованиями нормативных документов Оператором создана система защиты персональных данных (СЗПД), состоящая из подсистем правовой, организационной и технической защиты.</p>
            <p>4.2. Подсистема правовой защиты представляет собой комплекс правовых, организационно-распорядительных и нормативных документов, обеспечивающих создание, функционирование и совершенствование СЗПД.</p>
            <p>4.3. Подсистема организационной защиты включает в себя организацию структуры управления СЗПД, разрешительной системы, защиты информации при работе с сотрудниками, партнерами (контрагентами) и сторонними лицами.</p>
            <p>4.4. Подсистема технической защиты включает в себя комплекс технических, программных, программно-аппаратных средств, обеспечивающих защиту ПД.</p>
            <p>4.5. Основными мерами защиты ПД, используемыми Оператором, являются:</p>
            <p>4.5.1. Назначение лица, ответственного за обработку ПД, которое осуществляет организацию обработки ПД, обучение и инструктаж, внутренний контроль за соблюдением учреждением и его работниками требований к защите ПД.</p>
            <p>4.5.2. Определение актуальных угроз безопасности ПД при их обработке в ИСПД и разработка мер и мероприятий по защите ПД.</p>
            <p>4.5.3. Разработка политики в отношении обработки персональных данных.</p>
            <p>4.5.4. Установление правил доступа к ПД, обрабатываемым в ИСПД, а также обеспечение регистрации и учета всех действий, совершаемых с ПД в ИСПД.</p>
            <p>4.5.5. Установление индивидуальных паролей доступа сотрудников в информационную систему в соответствии с их производственными обязанностями.</p>
            <p>4.5.6. Применение прошедших в установленном порядке процедуру оценки соответствия средств защиты информации.</p>
            <p>4.5.7. Качественное антивирусное программное обеспечение с регулярно обновляемыми базами.</p>
            <p>4.5.8. Соблюдение условий, обеспечивающих сохранность ПД и исключающих несанкционированный к ним доступ.</p>
            <p>4.5.9. Обнаружение фактов несанкционированного доступа к персональным данным и принятие мер.</p>
            <p>4.5.10. Восстановление ПД, модифицированных или уничтоженных вследствие несанкционированного доступа к ним.</p>
            <p>4.5.11. Обучение работников Оператора, непосредственно осуществляющих обработку персональных данных, положениям законодательства РФ о персональных данных, в том числе требованиям к защите персональных данных, документам, определяющим политику Оператора в отношении обработки персональных данных, локальным актам по вопросам обработки персональных данных.</p>
            <p>4.5.12. Осуществление внутреннего контроля соответствия обработки персональных данных установленным требованиям действующего законодательства, путем проведения периодических проверок условий обработки персональных данных.</p>

            <h3>5. Основные права субъекта ПД и обязанности Оператора</h3>
            <p>5.1. Основные права субъекта ПД.</p>
            <p>Субъект имеет право на доступ к его персональным данным и следующим сведениям:</p>
            <p>– подтверждение факта обработки ПД Оператором;</p>
            <p>– правовые основания и цели обработки ПД;</p>
            <p>– цели и применяемые Оператором способы обработки ПД;</p>
            <p>– наименование и место нахождения Оператора, сведения о лицах (за исключением работников Оператора), которые имеют доступ к ПД или которым могут быть раскрыты ПД на основании договора с Оператором или на основании федерального закона;</p>
            <p>– сроки обработки персональных данных, в том числе сроки их хранения;</p>
            <p>– порядок осуществления субъектом ПД прав, предусмотренных настоящим Федеральным законом;</p>
            <p>– наименование или фамилия, имя, отчество и адрес лица, осуществляющего обработку ПД по поручению Оператора, если обработка поручена или будет поручена такому лицу;</p>
            <p>– обращение к Оператору и направление ему запросов;</p>
            <p>– обжалование действий или бездействия Оператора.</p>
            <p>5.2. Обязанности Оператора.</p>
            <p>Оператор обязан:</p>
            <p>– при сборе ПД предоставить информацию об обработке ПД;</p>
            <p>– в случаях если ПД были получены не от субъекта ПД, уведомить субъекта;</p>
            <p>– при отказе в предоставлении ПД субъекту разъясняются последствия такого отказа;</p>
            <p>– опубликовать или иным образом обеспечить неограниченный доступ к документу, определяющему его политику в отношении обработки ПД, к сведениям о реализуемых требованиях к защите ПД;</p>
            <p>– принимать необходимые правовые, организационные и технические меры или обеспечивать их принятие для защиты ПД от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения ПД, а также от иных неправомерных действий в отношении ПД;</p>
            <p>– давать ответы на запросы и обращения субъектов ПД, их представителей и уполномоченного органа по защите прав субъектов ПД.</p>

            <h3>6. Раскрытие информации</h3>
            <p>6.1. Для обеспечения неограниченного допуска к политике оператора в отношении обработки ПД, сведениям о реализованных мерах по защите ПД, текст настоящей Политики опубликован на сайте Оператора <a href="https://fitron.club/">https://fitron.club/</a></p>
            <p>6.2. Обеспечение реализации прав субъекта ПД осуществляется посредством исполнения запросов, поступающих от физических лиц оператору по адресам, указанным на официальном сайте <a href="https://fitron.club/">https://fitron.club/</a>.</p>

        </div>
    </div>
    <div class="redhr"></div>
@endsection