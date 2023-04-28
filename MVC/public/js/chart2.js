const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'polarArea',
    data: {
      labels: ['Data1', 'Data2', 'Data3', 'Data4', 'data5', 'Data6'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
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