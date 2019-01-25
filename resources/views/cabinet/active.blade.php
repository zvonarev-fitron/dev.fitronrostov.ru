<div class="cabinet_page_active">
    <div class="cabinet_page_active_title">
        <span class="cabinet_page_active_title_txt">Мои посещения</span>
    </div>
    <div class="cabinet_page_active_body">
        <div class="cabinet_page_active_body_contract"></div>
    </div>

    <canvas id="popChart" width="600" height="400"></canvas>

    <div class="cabinet_page_bonus_b">
        <button class="cabinet_page_bonus_btn">Рекомендовать друга</button>
        <button class="cabinet_page_bonus_btn">Пригласить друга на гостевой визит</button>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script>
    var popCanvas = document.getElementById("popChart").getContext("2d");
    var barChart = new Chart(popCanvas, {
        type: 'bar',
        data: {
            labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь"],
            datasets: [{
                label: 'Посещения',
            data: [25, 20, 30, 25, 10, 11, 17, 26, 14, 18],
            backgroundColor: '#bbe0e3',

//                187 224 227
                // [
                // #bbe0e3
                // 'rgba(255, 99, 132, 0.6)',
                // 'rgba(54, 162, 235, 0.6)',
                // 'rgba(255, 206, 86, 0.6)',
                // 'rgba(75, 192, 192, 0.6)',
                // 'rgba(153, 102, 255, 0.6)',
                // 'rgba(255, 159, 64, 0.6)',
                // 'rgba(255, 99, 132, 0.6)',
                // 'rgba(54, 162, 235, 0.6)',
                // 'rgba(255, 206, 86, 0.6)',
                // 'rgba(75, 192, 192, 0.6)',
                // 'rgba(153, 102, 255, 0.6)'
            // ]




        }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
