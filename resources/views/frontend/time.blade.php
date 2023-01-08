@extends ("frontend/layouts/master")

@section('content')

<!--Content start -->
    <main>

      <!-- 折線圖開始 -->
      <div class = "graph">

        <!-- 宣告用來放表格的畫布 -->
        <div>
          <canvas id="TimeScale"></canvas>
        </div>
        
        <!-- 引用chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
          //載入資料開始
          ///--載入預測年分--
          const Predict_At = 5;
          ///--輸入年份陣列--
          const Years = ['2016', '2017', '2018', '2019', '2020', '2021', '2022'];
          ///--輸入KPI值陣列--
          const KPI_of_years = [100, 80, 90, 66, 87, 99, 120]; //當年KPI
          const KPI_Variation = [20 , 40, 20, 20, 20, 30, 50]; //KPI變化程度


          //載入資料結束

          //宣告顏色
          const line_chart_color = 'rgb(100,100,200)';                //折線圖的線顏色
          const Bar_chart_color = 'rgba(255, 149, 200, 0.5)';         //長條圖的填充色          最後一項是指透明程度
          const Bar_border_color = 'rgba(255, 149, 200, 1)';          //長條圖的外框色
          const Bar_chart_color_predict = 'rgba(255, 99, 132, 0.3)';  //長條圖(預測區)的填充色
          const Bar_border_color_predict = 'rgba(255, 99, 132, 1)';   //長條圖(預測區)的外框色


          //宣告資料
          const dash = (ctx, value) => ctx.p1DataIndex >= Predict_At ? value : [6,0];
          const datas = {
            labels: Years,
            datasets: [{
              type: 'line',
              label: 'KPI值',     //折線圖(KPI)的值名稱
              data: KPI_of_years,
              fill: false,
              borderColor: line_chart_color,
              pointBackgroundColor: line_chart_color,
              yAxisID : 'YLeft',
              segment: {
                borderDash: ctx => dash(ctx, [2,2]) //[2,2]是虛線中 [線段長,空格長]
              },
            },{
              type: 'bar',
              label: 'KPI變化量',  //Bar圖(變化量)的值名稱
              data: KPI_Variation,
              backgroundColor: color =>{
                console.log(color);
                let colors = color.index >= Predict_At ? Bar_chart_color  : Bar_chart_color_predict;
                return colors;
              },
              borderColor: color =>{
                console.log(color);
                let colors = color.index >= Predict_At ? Bar_border_color  : Bar_border_color_predict;
                return colors;
              },
              borderWidth: 1,   //長條圖框框寬度
              yAxisID : 'YRight'
            }]
          }

          //宣告外觀
          const option = {
            radius: 3,
            interaction: {
              mode: 'index'
            },
            scales: {
              YLeft: {      //左方Y軸的細節
                title: {    
                  text: 'KPI值',
                  color: line_chart_color,
                  display: true,
                },
                type: 'linear',
                display: true,
                position: 'left',
              },
              YRight: {     //右方Y軸的細節
                title: {    
                  text: 'KPI變化量',
                  color: Bar_border_color,
                  display: true,
                },
                type: 'linear',
                display: true,
                position: 'right',
                grid: {
                  drawOnChartArea: false,
                },
              }
            },
            plugins: {
              title: { //圖表標題
                display: true,
                text: `嘉義市 ${Years[0]}年 至 ${Years[Years.length - 1]}年 之 用電量KPI圖表`,
                fullSize: true,
                font:{
                  size: (window.innerWidth/40),
                },
                padding: {
                  top: 10,
                  bottom: 30
                }
              },
              tooltip:{ //滑鼠移上去的tooltip細節
                position: 'nearest',
              }
            }
          }
          
          //導入至畫布
          const ctx = document.getElementById('TimeScale');
          new Chart(ctx, { data: datas, options: option});

        </script>      
      </div>
      <!-- 折線圖結束 -->
      <div class = "selection">
            <p>請輸入查詢參數</p>
            <div class="dropdown">
                <form action="{{ route('time') }}" method="GET">
                    <label for="cars">查詢城市:</label>
                        <select name="Tarcity" id="tarcity">
                            @foreach($cityList as $city)
                                <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                            @endforeach
                        </select>


                     <label for="cars">起始年份:</label>
                            <select name="Start_Year" id="start_year">
                                @foreach($yearList as $year)
                                    <option value="{{$year->year}}">{{$year->year}}</option>
                                @endforeach
                            </select>

                     <label for="cars">結束年份:</label>
                            <select name="End_Year" id="end_year">
                                @foreach($yearList as $year)
                                    <option value="{{$year->year}}">{{$year->year}}</option>
                                @endforeach
                            </select>

                     <br><br>
                     <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </main>
<!--Content end -->
@endsection
