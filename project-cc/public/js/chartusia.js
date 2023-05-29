var canvasElement = document.getElementById("usiachart");
var config = {
    type: "bar",
    data: {
        labels: ["0-4", "5-9", "10-14", "15-19", "20-24", "25-29", "30-34", "35-39", "40-44", "45-49"], 
        datasets: [{
            label: "number of people", 
            data: [34509, 35764, 38837, 41093, 40251, 39158, 37793, 39662, 40392, 37471],
            backgroundColor:[
                "rgba(255, 102, 255, 0.2)"
            ],
            borderWidth: 1
        }]
    },
}

var usiachart = new Chart(canvasElement, config)