@extends ("frontend/layouts/master")

@section('content')

<!--Content start -->
    <main>
        Selected City: <?php echo $_POST["Tarcity"]; ?><br>
        Selected Starting Year: <?php echo $_POST["Start_Year"]; ?><br>
        Selected Ending Year: <?php echo $_POST["End_Year"]; ?>
    </main>
<!--Content end -->
@endsection
