document.addEventListener("DOMContentLoaded", function () {
    if (typeof tripsData !== "undefined" && tripsData.length > 0) {
        const labels = tripsData.map(t => t.name);
        const values = tripsData.map(t => t.total);

        const data = [{
            type: "pie",
            labels: labels,
            values: values,
            textinfo: "label+percent",
            textposition: 'outside',
            insidetextorientation: "radial"
        }];

        const layout = {
            height: 400
        };

        Plotly.newPlot("tripPieChart", data, layout, {responsive: true});
    }
});

document.addEventListener("DOMContentLoaded", function () {
    if (stageData.length > 0) {
        const labels = stageData.map(s => s.name);
        const values = stageData.map(s => s.total);

        const data = [{
            type: "pie",
            labels: labels,
            values: values,
            textinfo: "label+percent",
            textposition: 'outside',
            insidetextorientation: "radial"
        }];

        const layout = {
            height: 400
        };

        Plotly.newPlot("stagePieChart", data, layout, {responsive: true});
    }
});

document.addEventListener("DOMContentLoaded", function () {
    if (activityData.length > 0) {
        const labels = activityData.map(a => a.name);
        const values = activityData.map(a => a.total);

        const data = [{
            type: "pie",
            labels: labels,
            values: values,
            textinfo: "label+percent",
            textposition: 'outside',
            insidetextorientation: "radial"
        }];

        const layout = {
            height: 400
        };

        Plotly.newPlot("activityPieChart", data, layout, {responsive: true});
    }
});