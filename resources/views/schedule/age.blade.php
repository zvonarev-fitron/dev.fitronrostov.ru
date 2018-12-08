    @foreach($params['tr'] as $key=>$tr)
        <tr>
            @if(1 <= date('H', $key) - $params['col'])
                <td class="leftcol">{{date('H', $key)}}:00</td>
            @else
                <td class="leftcol"></td>
            @endif
            @foreach($tr as $td)
                @if(!empty($td))
                    <td>
                        @foreach($td as $sch)
                            <div class="event">
                                <div class="time">
                                    <span class="time-from">{{date('H:i', $sch->StartDate()->getTimestamp())}}</span>
                                    - {{date('H:i', $sch->EndDate()->getTimestamp())}}
                                </div>
                                <div class="name"><a class="name" target="_blank" href="{{url('fitnes-uslugi/'. $params['categories']->firstWhere('id', $params['trainings']->firstWhere('id', $sch->trainings_id)->category_id)->url . '/'
. $params['trainings']->firstWhere('id', $sch->trainings_id)->url)}}">{{$params['trainings']->firstWhere('id', $sch->trainings_id)->name}}</a>
                                </div>
                                <div class="intensity">Инт.: <span class="middle">{{$params['intensities']->firstWhere('id', $sch->intensities_id)->name}}</span></div>
                                <div class="place">Место. {{$params['rooms']->firstWhere('id', $sch->rooms_id)->name}}</div>
                                @if($sch->pre_entry)
                                    <div class="pre_entry">по записи</div>
                                @endif
                            </div>
                        @endforeach
                    </td>
                @else
                    <td><div class="event"></div></td>
                @endif
            @endforeach
            @if(1 <= date('H', $key) - $params['col'])
                <td class="rightcol">{{date('H', $key)}}:00</td>
                @php
                    $params['col'] = date('H', $key);
                @endphp
            @else
                <td class="rightcol"></td>
            @endif
        </tr>
    @endforeach