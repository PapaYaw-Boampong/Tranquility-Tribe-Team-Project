// Sample data for the pie chart
const completedGoals = 5;
const remainingGoals = 10 - completedGoals;

// Create smaller-sized pie chart
const ctx = document.getElementById('goal-pie-chart').getContext('2d');
const goalPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Completed Goals', 'Remaining Goals'],
        datasets: [{
            data: [completedGoals, remainingGoals],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)', // Blue for completed goals
                'rgba(255, 99, 132, 0.5)', // Red for remaining goals
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Goal Completion Percentage'
        },
        responsive: false, // Disable responsiveness
        maintainAspectRatio: false, // Disable aspect ratio
    }
});