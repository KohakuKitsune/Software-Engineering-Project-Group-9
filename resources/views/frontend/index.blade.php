
@extends ("frontend/layouts/master")

@section('content')

<!--Content start -->
    <main>
        <div class = "intro">
            <h2>關於網站和操作方法</h2
            <p>
               本網站主要用於查詢某縣市的用電量永續指標（永續指標序號：EN: E: E: 2C）。
               使用者可以通過點選“KPI ANALYSIS” 切換至查詢界面，點選查詢城市、起始年份和結束年份后點擊“Submit”按鈕即可。
            </p>
            <h2>什麽是永續發展指標？</h2>
            <p align="center"><img src="img/goal.jpg" width="512" height="395"></p>
            <p>
                上圖為聯合國所指定的17項永續發展目標。爲了分析該城市是否能夠發展成智慧永續城市（第11項永續發展目標）
                ，聯合國制定了91項永續指標作用於分析該城市是否達成永續發展目標中的196個細則目標。最後從而分析判斷該
                城市是否有發展成智慧永續城市趨勢。
            </p>
        </div>
    </main>
<!--Content end -->
@endsection
