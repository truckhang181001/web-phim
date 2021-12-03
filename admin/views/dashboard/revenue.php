<div id="myPlot" style="width:100%"></div>
<script>
    var yArray = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160];
    var xArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,12];

    // Define Data
    var data = [{
        x: xArray,
        y: yArray,
        mode: "lines"
    }];

    // Define Layout
    var layout = {
        xaxis: {
            range: [40, 160],
            title: "DOANH THU (TRIỆU)"
        },
        yaxis: {
            range: [5, 16],
            title: "THỜI GIAN"
        },
        title: "TỔNG DOANH THU"
    };

    // Display using Plotly
    Plotly.newPlot("myPlot", data, layout);
</script>