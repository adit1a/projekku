<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylePro.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <title>Progress</title>
</head>
<body>
    <main>
    <div class="main-conatiner">
        <nav class="sidebar">
            <div class="sidebar-logo">
                <h2>Task Aditiya</h2>
            </div>
            
            <ul class="nav-menu">
                <li><a href="" class="active">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Reports</a></li>
            </ul>
        </nav>
</div>

            
    <div class="task">
        <div class="task-progres">
            <h2>Task Progress</h2>
        </div>
        <div class="stats-section">
        <div class="filter-wrapper">
            <select class="select-weeckly" name="" id="">
                <option value="weekly">weeekly</option>
                <option value="month">month</option>
                <option value="year">year</option>
            </select>
        </div>
        <div class="chart-container">
            <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 6%"></div></div>
                <span>mon</span>
            </div>
            <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 10%"></div></div>
                <span>tue</span>
            </div>
            <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 45%"></div></div>
                <span>wed</span>
            </div>
            <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 60%"></div></div>
                <span>thur</span>
            </div>
            <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 20%"></div></div>
                <span>fri</span>
            </div>
             <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 67%"></div></div>
                <span>sat</span>
            </div>
            <div class="chart-column">
                <div class="bar-wrapper"><div class="bar" style="height: 80%"></div></div>
                <span>sun</span>
            </div>
        </div>
    </div>
    </div>
     <div class="assignment">
            <div class="assignment-card">
            <h2>Assignment Bro</h2>
            <span>time spent</span>
            </div>
            <div class="assignment-check">
                <label for="" class="checkbox-container">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    <span class="task-text">Selesaikan</span>
                </label>
                <label for="" class="checkbox-container2">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    <span class="task-text">Selesaikan</span>
                </label>
                <label for="" class="checkbox-container3">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    <span class="task-text">Selesaikan</span>
                </label>
            </div>
        </div>
</body>
</html>