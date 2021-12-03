<div id="filmChart" style="width:100%"></div>
<script>
    var xArray = ["Hai phượng", "Squid Game", "Spain", "USA", "Argentina"];
    var yArray = [55, 49, 44, 24, 15];

    var layout = {
        title: "DOANH THU THEO PHIM"
    };

    var data = [{
        labels: xArray,
        values: yArray,
        hole: .4,
        type: "pie"
    }];

    Plotly.newPlot("filmChart", data, layout);
</script>