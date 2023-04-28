const ctx = document.getElementById('myChart1');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data6'], //Data of chart
      datasets: [{
        label: 'Profit of 2023',
        data: [12, 19, 3, 5, 11, 3], //value for each data
        borderColor: '#000000',
        backgroundColor: ["#ed1e1e", "#2269e5", "#fce302", "#04f759", "#fc9700"],
        borderWidth: 0.1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });