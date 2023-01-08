@extends ("frontend/layouts/master")

@section('content')

<!--Content start -->
    <main>
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
                                @foreach($ryearList as $year)
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
