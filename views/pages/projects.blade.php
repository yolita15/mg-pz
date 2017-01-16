@extends('app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading" id="project1">
                Международен училищен проект
                <br>
                "Да се замислим над фактите и да реагираме" (Reflect the Facts to Act)
            </div>
            <div class="panel-body">
                <br>
                <div class="row">
                    <div class="col-md-4" align="center">
                        <a href="{{ url('pdf/OBIAVA.pdf')}}" target="new">
                            <span class="glyphicon glyphicon-flag"></span> Обява</a></div>
                    <div class="col-md-4" align="center">
                        <a href="{{ url('pdf/kriterii_selekzia.pdf')}}" target="new">
                            <span class="glyphicon glyphicon-check"></span> Критерии</a></div>
                    <div class="col-md-4" align="center">
                        <a href="{{ url('pdf/klasirane_1_etap.pdf')}}" target="new">
                            <span class="glyphicon glyphicon-refresh"></span> Класирани на първи етап</a></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" align="center">
                        <a href="{{ url('https://docs.google.com/forms/d/1fpkJ1ndBO4YmyAk2UEfFYcR7m0HvAG-xH-dbolGtyE0/viewform')}}"
                           target="new"><span class="glyphicon glyphicon-leaf"></span> АНКЕТА – НАШИЯТ ЕКОЛОГИЧЕН
                            ОТПЕЧАТЪК</a>
                    </div>
                </div>
                <br>
            </div>
        </div>

        <div class="panel panel-default" id="historytext">
            <div class="panel-heading" id="project1">
                Международен училищен проект „Повлияни Да или Не” (Influenced Yes or No)
            </div>
            <div class="panel-body">
                <p>Официален сайт на проекта: <a href="{{ url('https://influencedyesorno.weebly.com')}}" target="new">www.influencedyesorno.weebly.com</a>
                </p>
                <p>След успешното приключване на два международни проекта: “Our square mile” („Нашата квадратна миля”) и
                    Cultural
                    mosaic of Europe – Past, Present and Future (Културна мозайка на Европа - минало, настояще, бъдеще)
                    от началото
                    на учебната 2012/2013 г. Математическа гимназия започна участието си в трети. Стартира междуучилищен
                    проект по
                    програма „Коменски” към ЦРЧР на тема „Повлияни Да или Не” (Influenced Yes or No). В него участват:
                    Колеж
                    „Comenius”, Ротердам, Холандия – координатор на проекта и училища-партньори: Колеж „Georges Lapierre
                    Lormont,
                    Лормонт, Франция; Институт „Superiore Via Luisa di Savoia”, Рим, Италия и МГ „К. Величков”, гр.
                    Пазарджик.
                    Учителите, отговарящи за реализирането на проекта в гимназията са: Цветелина Килитанова – по
                    английски език,
                    д-р Ана Рабаджийска – по история и цивилизация и София Владова – по информатика и информационни
                    технологии.</p>
                <p>Първата работна среща се проведе през ноември 2012 г. в Ротердам. Уточниха се и първите две работни
                    теми:
                    история и масмедии. Всяка една от участващите страни трябваше да проследи как останалите държави са
                    повлияли
                    върху нейното историческо развитие и върху развитието на различните масмедии (вестници, списания,
                    радио и
                    телевизия).</p>
                <p>На втората работна среща (февруари 2013 г.) в Рим присъстваха и 9 ученика от МГ. Те представиха
                    своите
                    презентации и филми за влиянието на Италия, Франция и Холандия върху нашето историческо и културно
                    развитие.
                    Учениците работиха много задълбочено и се затрудниха да свият цялата огромна информация в нужния
                    размер.
                    Разработките им съдържат разнообразни материали като се започне от Римската империя, премине се през
                    кръстоносните походи, Берлинския конгрес, Балканските войни, двете световни войни и се достигне до
                    днешните
                    телевизионни предавания като Господари на ефира и Стани богат. Изработените от всички ученици
                    материали по
                    темите могат да се видят на посочения сайт.</p>
                <p>През април (17-21.04.2013) МГ “К.Величков” гр. Пазарджик бе домакин на третата работна среща, на
                    която
                    се представиха взаимните влияния в областта на спорта и храната.Гостите имаха възможността да опитат
                    типични
                    ястия от българската национална кухня, научиха някои изрази в проведения урок по български език,
                    усвоиха
                    правилата на типичната българска спортна игра – народна топка и някои типични български народни
                    танци!</p>
            </div>
        </div>

        <div class="panel panel-default" id="historytext">
            <div class="panel-heading" id="project1">
                Проект BG051PO001-4.2.05<br>"Да направим училището
                привлекателно за младите хора"<br>съфинансиран от ЕСФ по ОП "Развитие на човешките ресурси" 2007-2013 г.
            </div>
            <div class="panel-body" id="historytext">
                <div class="row">
                    <div class="col-md-3" align="right">
                        <img src={{url('images/uspeh.png')}} width="60"/>
                    </div>
                    <div class="col-md-5">
                        <h4>Официален сайт на проекта: <a href="{{ url('http://uspeh.mon.bg/?m=4')}}" target="new">
                                http://uspeh.mon.bg</a></h4>
                    </div>
                    <div class="col-md-4">
                        <img src={{url('images/uspeh2.png')}} width="220"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default" id="historytext">
            <div class="panel-heading" id="project1">
                Национална програма „С грижа за всеки ученик”<br>
                Модул: „Осигуряване на обучение на талантливи ученици<br>за участие в ученическите олимпиади”
            </div>
            <div class="panel-body">
                <p>
                    Учениците Спас Христов от 11 г клас, Теофана Гаджева и Теменужка Лукайчева от 11 а клас с
                    ръководител Цветанка Славкова взеха участие в олимпиадата по информационни технологии. Проектите им
                    бяха допуснати до Областен кръг, проведен на 15.03.2010г., където се представиха блестящо. Проектът
                    на момичетата на тема „Бързо ти мисли, оценка получи” в категория Интернет приложения се класира на
                    2-ро място, а проектът на Спас Христов на тема „Ученическа борса за учебници и помагала” в същата
                    категория – на 4-то място.
                    Областната комисия допусна и двата проекта до Националния кръг.
                </p>
                <p>
                    Учениците Станислав Гатев, Теофана Гаджева и Теменужка Лукайчева от 11 а клас с ръководител Цветанка
                    Славкова се включиха във Второто Национално състезание по информационни технологии, проведено в
                    Благоевград от 26.03. до 28.03.2010г. Двете момичета участваха със сайт на тема „Великите събития на
                    Двадесети век” и се класираха на 9-то място. Проектът на Станислав беше флаш-приложение на тема :
                    ”Многоезична Европа” и беше класиран на 4-то място. Тези резултати са добри, като се има предвид, че
                    с тези ученици се работи по-интензивно само тази година. Ако през следващата година постигнатите
                    знания и умения се надградят,
                    то можем да очакваме призови места на всички олимпиади, състезания и конкурси.
                </p>
                <p>
                    От 5 до 7 март 2010г. в гр. Монтана се проведе Пето национално състезание по информационни
                    технологии „XXI век- иновационни технологии в българското образование”. В състезанието взеха участие
                    ученици от 10 и 11 клас на МГ „К. Величков” гр. Пазарджик, с ръководител Лидия Сиракова:
                    <br>
                    Николинка Кърмова от10г клас в категория „Компютърни презентации 8-10 клас”
                    <br>
                    Стоян Милев от10г клас в категория „WEB приложения”
                    <br>
                    Иван Пенков от 11в клас в категория „Приложни програми”.
                </p>
                <p>
                    Стоян Милев се представи с проект № 20 – сайт на тема „Глобални проблеми”. Сайтът е създаден с цел
                    запознаване на младото поколение с глобалните проблеми, засягащи всички нас. Информацията
                    представена в него е на достъпен език и от достоверни източници. Иван Пенков участва в състезанието
                    с проект № 18 „Забавно и лесно с PhotoShop”. “Забавно и лесно с PhotoShop” е един практичен
                    самоучител, който по атрактивен начин представя работата с Photoshop и всичката информация, която е
                    необходима за начинаещите, желаещи да се научат да си служат с програмата.
                    В рамките на IV направления е представена цялата система на виртуалното помагало.
                    <br>
                    Всички ученици се представиха достойно и се класираха на добри места.
                </p>
            </div>
        </div>

        <div class="panel panel-success" id="historytext">
            <div class="panel-heading" id="project1">
                Оперативна програма „РАЗВИТИЕ НА ЧОВЕШКИТЕ РЕСУРСИ”<br>
                МГ е партньор по проект: „Работилница за възможности”
            </div>
            <div class="panel-body" id="historytext">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <a href="{{ url('pdf/rabotilnica_za_vazmojnosti.pdf')}}" target="new"><span
                                    class="glyphicon glyphicon-wrench"></span> Проект „Работилница
                            за възможности”</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="panel panel-success" id="historytext">
            <div class="panel-heading" id="project1">
                Проект: “Евроскола”<br>
                Ученици от МГ в Европейския парламент в Страсбург
            </div>
            <div class="panel-body" id="historytext">
                <p>По програма Евроскола 25 ученици от МГ „К. Величков” на 12 март 2010 г. участваха в работна сесия на
                    Европейския парламент в Страсбург. Ръководителите на проекта: Ана Рабаджийска, Цветелина Килитанова
                    и
                    Цветанка Плачкова, подбраха учениците след попълване на тест за Европейския съюз, представяне на есе
                    на
                    английски език и интервю на английски. След изтегляне на жребии учениците разпределиха помежду си 6
                    работни
                    теми. Те са свързани с разрешаване на най-наболелите екологични проблеми, начини за справяне с
                    безработицата
                    и социалната изолация, пътища за преодоляване на бедността, възможности да направим Европа
                    по-динамична,
                    перспективите за развитие на Европейския съюз и пр. Темите бяха разисквани по време на работната
                    среща и
                    взетите решения се представиха от избраните от групите председатели, като всички участници в
                    младежкия
                    Европарламент посредством своя глас показваха групата дали се е справила с разисквания проблем.</p>
                <p>На 12 март в Европейския парламент се срещнаха 523 ученика от 22 държави. Училищата се представиха
                    от капитаните на отборите. За МГ това направи Атанас Петков. Учениците бяха разделени в отбори по
                    4 ученика, всички от различни държави. Попълниха анкета от 20 въпроса, като всеки един въпрос беше
                    на различен език. Въпросите засягаха историята, културата, географията и пр. на различните държави,
                    членки на Европейския съюз. Първите четири отбора, с най-висок резултат, се състезаваха пред всички
                    участници в парламентарната зала. Отборът, в който беше нашият ученик – Тодор Тодорин, спечели І-во
                    място. Завръщайки се в Пазарджик, участниците бяха лично поздравени за постигнатите успехи от кмета
                    на града г-н Т. Попов. На тържеството присъства и ст. експерт по математика и информатика от РИО –
                    г-жа Д. Дулчева. Успехите на нашите ученици бяха популяризирани и от местните медии.</p>
                <p> Учениците се завърнаха в България с незабравими впечатления. Участието в симулационни заседания
                    в работата на Европейския парламент ги накара да се почувстват като граждани на общия европейски
                    дом,
                    засили тяхната отговорност и мотивираност при вземане на решения. Разискването на актуални и значими
                    за Европейския съюз въпроси беше един практически урок по европейско гражданство, който нашите
                    възпитаници никога няма да забравят.</p>
            </div>
        </div>

        <div class="panel panel-success" id="historytext">
            <div class="panel-heading" id="project1">
                Международнен интеркултурен проект:<br>
                “Културна мозайка на Европа – минало, настояще и бъдеще”
            </div>
            <div class="panel-body" id="historytext">
                <p>Културна мозайка на Европа – минало, настояще и бъдеще</p>
                <p>През месец октомври 2009 стартира новият международен проект на Математическа гимназия “К. Величков”
                    –
                    гр. Пазарджик. В проекта “Културна мозайка на Европа – минало, настояще и бъдеще” участват 8 училища
                    партньори: Cредно професионално вечерно училище в Хераклион, о. Крит, Гърция, Природо-математически
                    лицей, гр. Фрозиноне, Италия, Общообразователен лицей, Кунео, Италия, Начално училище, Гардздай,
                    Литва,
                    Средно общообразователно училище, гр. Водислав Сласки, Полша, Средно професионално училище, Лас
                    Палмас,
                    Канарски о-ви, Испания, Средно общообразователно училище, гр. Санлиурфа, Турция и МГ “К. Величков”
                    гр.
                    Пазарджик. Гимназията бе избрана за координатор по проекта, което е голямо признание за приносът й
                    при
                    разработването на предходния проект. Новият проект бе класиран на първо място в страната от общо 131
                    финансирани проекта от Центъра за развитие на човешките ресурси.</p>
                <p>Целита на проекта са:</p>
                <ul>
                    <li>Да се изследват архитектурата, поминъка, начините на забавление и комуникации през миналото,
                        настоящето и бъдещето.
                    </li>
                    <li>Да се обогатят уменията на учениците да общуват на работния английски език.</li>
                    <li>Да се подобрят ИКТ уменията на преподаватели и ученици.</li>
                    <li>Да се усъвършенстват социалните умения за екипна работа, по-висока мотивация, повишаване на
                        самочувствието и пр.
                    </li>
                    <li>Да се разпространи и приложи придобития по време на работата върху проекта опит.</li>
                </ul>
                <p>Проектът е двугодишен, като през всяка година ще се проследяват като развитие през миналото,
                    настоящето и бъдещето определени теми.</p>
                <p>От 24 до 28. Х. 2009 г. се проведе първата работна среща в Литва, на която всички партньори
                    уточниха като хронологически граници на миналото – от началото на ХХ в. до 1989 г., настоящето – от
                    1989 г. до наши дни и бъдещето – до 2050 г. С общо съгласие се одобри работата по първата тема
                    „Архитектура и начин на живот”.</p>
                <p>От 19 до 25 март 2010 г. се проведе втората работна среща по проекта в гр. Лас Палмас на остров
                    Гран Канария, Испания. След традиционната размяна на сувенири беше направен обзорен преглед на вече
                    изработените теми. Обсъдихме и допълнихме критериите, по които ще оценяваме напредъка на проекта
                    и неговото влияние върху живота на учениците. Разгледахме изработените от учениците от Литва и
                    Турция предложения за лого на проекта и след гласуване избрахме такова. Приехме и нова тема за
                    изследване – свободното време и начини за забавления през миналото, настоящето и бъдещето. Всички
                    присъстващи учители рисувахме символи от своите страни върху глинени плочки, които ще бъдат
                    подредени
                    като мозайка и монтирани в общо пано.</p>
                <p>Третата работна среща се проведе в края на май и началото на юни 2010 г. в Полша. На нея присъстваха
                    ученици от Испания, Италия и Турция. Представителите на МГ бяха Луиза Серева и Силвия Колчакова от
                    от
                    10 б клас. Там показахме представлението, което на учениците от 10 б клас изнесоха в библиотека „Н.
                    Фурнаджиев”, на тема: Свободно време и начини на забавление. Присъстващите ученици разучиха по един
                    типичен за всяка страна народен танц: право хоро, салтарела, сиртаки и пр. Участваха в игра
                    „Колелото
                    на късмета”, където отговаряха на въпроси от политика, култура, музика, спорт и пр. на отделните
                    държави.
                    На официалния концерт в кметската зала нашите момичета презентираха училището ни и играха
                    ръченица.</p>
                <p>Четвъртата работна среща се проведе през октомври 2010 на о. Крит, Гърция. Всяко училище показа
                    разработената тема за транспорта и начините на комуникация. Отчетохме индивидуалните дейности на
                    партньорите и тяхното представяне на сайта, определихме и новата тема. Запознахме се с гръцката
                    образователна система.</p>
                <p>Петата работна среща се проведе в Турция в началото на март 2011 г. Ние показахме изработения от
                    учениците от 11 г клас, под ръководството на Лидия Сиракова, филм за световно известни български
                    учени.
                    Определихме и последната тема за разработване: световно известни национални писатели, художници и
                    музикални изпълнители.</p>
                <p>От 29 май до 1 юни предстои да се проведе заключителния етап по проекта в Пазарджик. Работната среща
                    започва на 30 мой 2011 от 9.30 часа в кметската зала на Община Пазарджик.</p>
                <p>Надяваме се този проект да съдейства за обогатяването и подобряване качеството на учебния процес, за
                    подобряване мотивацията и разширяване кръгозора на учениците, за усъвършенстване на чуждоезиковите
                    им и
                    компютърни умения и пр.</p>
                <br>
                <i>Изготвил: д-р Ана Рабаджийска</i>
                <br>
            </div>
        </div>
    </div>
@stop