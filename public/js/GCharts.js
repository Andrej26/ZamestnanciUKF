
// Load Charts and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Draw the pie chart for Sarah's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawData1Chart);

// Draw the pie chart for the Anthony's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawData2Chart);

// Callback that draws the pie chart for Sarah's pizza.
function drawData1Chart() {

    // Create the data table for Sarah's pizza.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 1],
        ['Onions', 1],
        ['Olives', 2],
        ['Zucchini', 2],
        ['Pepperoni', 1]
    ]);

    // Set options for Sarah's pie chart.
    var options = {title:'How Much Pizza Sarah Ate Last Night',
        width:400,
        height:300};

    // Instantiate and draw the chart for Sarah's pizza.
    var chart = new google.visualization.PieChart(document.getElementById('Data1_chart_div'));
    chart.draw(data, options);
}

// Callback that draws the pie chart for Anthony's pizza.
function drawData2Chart() {

    // Create the data table for Anthony's pizza.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 2],
        ['Onions', 2],
        ['Olives', 2],
        ['Zucchini', 0],
        ['Pepperoni', 3]
    ]);

    // Set options for Anthony's pie chart.
    var options = {title:'How Much Pizza Anthony Ate Last Night',
        width:400,
        height:300};

    // Instantiate and draw the chart for Anthony's pizza.
    var chart = new google.visualization.AreaChart(document.getElementById('Data2_chart_div'));
    chart.draw(data, options);
}