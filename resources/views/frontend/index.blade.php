
@extends ("frontend/layouts/master")

@section('content')

<!--Content start -->
    <main>
    <!--  -->
    <div class="container">
      <h1> <span class="intro">INTRO</span> </h1>
      <p align="center"><img src="img/goal.jpg" width="512" height="395"></p>
      <p class="context"> 本組所開發的軟件為一個查詢某縣市的永續發展指標網站。
        首先使用者在進入網站時，會進入介紹網頁并且可以與永續發展指標分析網頁和開發者團隊介紹網頁這三個網頁之間來回切換。
        若使用者切換至永續發展指標分析網頁后，使用者可以從由網站列出縣市名單裏選擇一個縣市查詢該縣市的永續發展指標分析結果並輸入查詢起始與結束年份。
        在使用者確 認查詢的縣市后，網站會從資料庫裏索取特定資料進行計算與分析，最后將分析結果呈現給使用者。
      </p>
      <!--  -->
    </main>
<!--Content end -->
@endsection
