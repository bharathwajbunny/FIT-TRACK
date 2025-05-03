<?php
// Optional: Any PHP code for dynamic functionality or session handling could be placed here
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses - FitTrack</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Set max width and height for the chart */
        #chart-container {
            width: 300px;
            height: 300px;
            margin: auto;
        }
        #line-chart-container {
            width: 100%;
            height: 300px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Expenses - FitTrack</h1>
        <nav>
            <ul>
                <li><a href="/j/public/login.php">Home</a></li>
                <li><a href="/j/public/dashboard.php">Dashboard</a></li>
                <li><a href="/j/public/workouts.php">Workouts</a></li>
                <li><a href="/j/public/diet.php">Diet</a></li>
                <li><a href="/j/public/expenses/expenses.php">Expenses</a></li>
                <li><a href="/j/public/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Track Your Fitness Expenses</h2>
            <p>Manage your spending related to fitness and maintain your budget.</p>

            <form id="expense-form">
                <label for="item">Item:</label>
                <input type="text" id="item" required>

                <label for="price">Price (₹):</label>
                <input type="number" id="price" required>

                <label for="category">Category:</label>
                <select id="category">
                    <option value="">Select a category</option>
                    <option value="Gym">Gym</option>
                    <option value="Supplements">Supplements</option>
                    <option value="Equipment">Equipment</option>
                    <option value="Apparel">Apparel</option>
                    <option value="Nutrition">Nutrition</option>
                    <option value="Classes">Classes</option>
                    <option value="Personal Training">Personal Training</option>
                    <option value="Recovery">Recovery</option>
                    <option value="Other">Other</option>
                </select>

                <button type="button" id="save-button">Save</button>
                <button type="button" id="store-button">Store in Database</button>
            </form>

            <h3>Saved Expenses</h3>
            <ul id="saved-expense-list"></ul>

            <h3>Stored Expenses</h3>
            <ul id="stored-expense-list"></ul>

            <h3>Total Stored Expenses: ₹<span id="total-expenses">0</span></h3>

            <h3>Expense Distribution</h3>
            <div id="chart-container">
                <canvas id="expenseChart"></canvas>
            </div>

            <h3>Monthly Expense Trend</h3>
            <div id="line-chart-container">
                <canvas id="monthlyExpenseChart"></canvas>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>

    <script>
        let savedExpenses = [];

        document.getElementById("save-button").addEventListener("click", function() {
            const item = document.getElementById("item").value;
            const price = document.getElementById("price").value;
            const category = document.getElementById("category").value;

            if (!item || isNaN(price) || price <= 0 || !category) {
                alert("Please enter a valid item, price, and category.");
                return;
            }

            savedExpenses.push({ item, price, category });
            updateSavedList();
            document.getElementById("expense-form").reset();
        });

        function updateSavedList() {
            const savedList = document.getElementById("saved-expense-list");
            savedList.innerHTML = "";
            savedExpenses.forEach(expense => {
                const li = document.createElement("li");
                li.textContent = `${expense.item} - ₹${parseFloat(expense.price).toFixed(2)} - ${expense.category}`;
                savedList.appendChild(li);
            });
        }

        document.getElementById("store-button").addEventListener("click", function() {
            if (savedExpenses.length === 0) {
                alert("No expenses to store. Save expenses first.");
                return;
            }

            savedExpenses.forEach(expense => {
                const formData = new FormData();
                formData.append("item", expense.item);
                formData.append("price", expense.price);
                formData.append("category", expense.category);

                fetch("add_expense.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then((data) => {
                    console.log("Response from PHP:", data);
                    loadStoredExpenses();
                    savedExpenses = [];
                    updateSavedList();
                })
                .catch(error => console.error("Error storing expense:", error));
            });
        });

        function loadStoredExpenses() {
            fetch('fetch_expenses.php')
                .then(response => response.json())
                .then(expenses => {
                    const storedList = document.getElementById("stored-expense-list");
                    const totalExpenses = document.getElementById("total-expenses");

                    storedList.innerHTML = "";
                    let total = 0;
                    let labels = [], data = [];
                    let monthlyData = {}; // To store expenses by month

                    expenses.forEach(expense => {
                        total += parseFloat(expense.price);
                        labels.push(expense.item);
                        data.push(parseFloat(expense.price));

                        const li = document.createElement("li");
                        li.innerHTML = `${expense.item} - ₹${parseFloat(expense.price).toFixed(2)} - ${expense.category}
                            <button onclick="deleteExpense(${expense.id})">Remove</button>`;
                        storedList.appendChild(li);

                        // Group by month (assuming the 'created_at' field stores the date)
                        const expenseDate = new Date(expense.created_at);
                        const month = expenseDate.getMonth() + 1; // Get month number (1-12)
                        const year = expenseDate.getFullYear();

                        const monthKey = `${year}-${month < 10 ? '0' + month : month}`; // Format as YYYY-MM
                        if (!monthlyData[monthKey]) {
                            monthlyData[monthKey] = 0;
                        }
                        monthlyData[monthKey] += parseFloat(expense.price);
                    });

                    totalExpenses.textContent = total.toFixed(2);
                    updateChart(labels, data);
                    updateLineChart(monthlyData);
                })
                .catch(error => console.error("Error loading expenses:", error));
        }

        function deleteExpense(id) {
            fetch("delete_expense.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `id=${id}`
            })
            .then(response => response.text())
            .then(() => loadStoredExpenses())
            .catch(error => console.error("Error deleting expense:", error));
        }

        let expenseChart;
        function updateChart(labels, data) {
            const ctx = document.getElementById("expenseChart").getContext("2d");
            if (expenseChart) expenseChart.destroy();
            expenseChart = new Chart(ctx, {
                type: "pie",
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Expenses",
                        data: data,
                        backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40"]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        }

        // Create a line chart to show the trend of monthly expenses
        let monthlyExpenseChart;
        function updateLineChart(monthlyData) {
            const ctx = document.getElementById("monthlyExpenseChart").getContext("2d");

            const months = Object.keys(monthlyData);  // Get the months (keys)
            const expenses = Object.values(monthlyData);  // Get the corresponding expenses

            if (monthlyExpenseChart) monthlyExpenseChart.destroy();
            
            monthlyExpenseChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: months, // x-axis labels (months)
                    datasets: [{
                        label: 'Monthly Expenses (₹)',
                        data: expenses, // y-axis values (expenses)
                        borderColor: '#36A2EB',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Month'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Amount (₹)'
                            }
                        }
                    }
                }
            });
        }

        loadStoredExpenses();
    </script>
</body>
</html>
