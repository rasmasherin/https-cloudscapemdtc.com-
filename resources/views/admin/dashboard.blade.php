@extends('admin.layouts.app')

@section('content')
<style>
    .dashboard-container {
        background: #F5F3FF;
        min-height: 100vh;
    }

    .dashboard-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .left-section {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .right-section {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    /* Welcome Card */
    .welcome-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .welcome-content h1 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1F2937;
        margin-bottom: 0.5rem;
    }

    .welcome-subtitle {
        color: #9CA3AF;
        font-size: 0.875rem;
    }

    .welcome-datetime {
        color: #6B7280;
        font-size: 0.8rem;
        margin-top: 0.75rem;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .welcome-datetime i {
        margin-right: 0.25rem;
        color: #A78BFA;
    }

    .welcome-illustration {
        width: 120px;
        height: 120px;
        position: relative;
    }

    .doctor-avatar {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #E9D5FF 0%, #DDD6FE 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 0 auto;
    }

    .doctor-avatar::before {
        content: '👨‍⚕️';
        font-size: 2.5rem;
    }

    .floating-circle {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, #A78BFA 0%, #C4B5FD 100%);
        animation: float 3s ease-in-out infinite;
    }

    .circle-1 {
        width: 30px;
        height: 30px;
        top: 0;
        right: 0;
        animation-delay: 0s;
    }

    .circle-2 {
        width: 20px;
        height: 20px;
        bottom: 10px;
        left: 0;
        background: linear-gradient(135deg, #FCA5A5 0%, #FCD34D 100%);
        animation-delay: 1s;
    }

    .circle-3 {
        width: 15px;
        height: 15px;
        top: 20px;
        left: 10px;
        background: linear-gradient(135deg, #6EE7B7 0%, #34D399 100%);
        animation-delay: 2s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Stats Cards */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    .stat-card-link {
        text-decoration: none;
        display: block;
    }

    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .stat-card::before {
        content: '';
        position: absolute;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        opacity: 0.1;
        top: -20px;
        right: -20px;
    }

    .stat-card.services::before {
        background: #A78BFA;
    }

    .stat-card.appointments::before {
        background: #34D399;
    }

    .stat-card.messages::before {
        background: #F472B6;
    }

    .stat-label {
        font-size: 0.875rem;
        color: #6B7280;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .stat-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    .stat-card.services .stat-dot {
        background: #A78BFA;
    }

    .stat-card.appointments .stat-dot {
        background: #34D399;
    }

    .stat-card.messages .stat-dot {
        background: #F472B6;
    }

    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        color: #1F2937;
        margin-bottom: 0.5rem;
    }

    .stat-subtitle {
        font-size: 0.75rem;
        color: #9CA3AF;
    }

    /* Pie Chart Card */
    .chart-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .chart-header {
        margin-bottom: 1.5rem;
    }

    .chart-title {
        font-size: 1rem;
        font-weight: 600;
        color: #1F2937;
        margin-bottom: 0.5rem;
    }

    .chart-subtitle {
        font-size: 0.75rem;
        color: #9CA3AF;
    }

    .pie-chart-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        padding: 1rem 0;
    }

    .pie-chart-wrapper {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .pie-chart {
        width: 200px;
        height: 200px;
        position: relative;
    }

    .pie-chart canvas {
        max-width: 100%;
        max-height: 100%;
    }

    .chart-legend {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .legend-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem;
        background: #F9FAFB;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .legend-item:hover {
        background: #F3F4F6;
        transform: translateX(4px);
    }

    .legend-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .legend-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .legend-dot.pending {
        background: #A78BFA;
    }

    .legend-dot.today {
        background: #34D399;
    }

    .legend-dot.cancelled {
        background: #FCD34D;
    }

    .legend-text {
        font-size: 0.875rem;
        color: #6B7280;
        font-weight: 500;
    }

    .legend-value {
        font-size: 0.875rem;
        font-weight: 700;
        color: #1F2937;
    }

    /* Calendar */
    .calendar-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .calendar-month {
        font-size: 0.875rem;
        font-weight: 600;
        color: #1F2937;
    }

    .calendar-nav {
        display: flex;
        gap: 0.5rem;
    }

    .calendar-nav button {
        background: none;
        border: none;
        color: #9CA3AF;
        cursor: pointer;
        padding: 0.25rem;
        font-size: 0.875rem;
    }

    .calendar-nav button:hover {
        color: #6B7280;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 0.5rem;
        text-align: center;
    }

    .calendar-day-header {
        font-size: 0.75rem;
        color: #9CA3AF;
        padding: 0.5rem 0;
        font-weight: 500;
    }

    .calendar-day {
        font-size: 0.875rem;
        color: #6B7280;
        padding: 0.5rem;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .calendar-day:hover {
        background: #F3F4F6;
    }

    .calendar-day.today {
        background: #A78BFA;
        color: white;
        font-weight: 600;
    }

    .calendar-day.empty {
        opacity: 0.3;
    }

    /* Appointments */
    .appointments-card {
        background: linear-gradient(135deg, #FC8181 0%, #F687B3 100%);
        border-radius: 16px;
        padding: 1.5rem;
        color: white;
        box-shadow: 0 4px 12px rgba(252, 129, 129, 0.3);
    }

    .appointments-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .appointments-value {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .appointments-subtitle {
        font-size: 0.875rem;
        opacity: 0.9;
    }

    @media (max-width: 1024px) {
        .dashboard-grid {
            grid-template-columns: 1fr;
        }

        .pie-chart-container {
            flex-direction: column;
        }

        .stats-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .dashboard-container {
            padding: 1rem;
        }

        .stats-row {
            grid-template-columns: 1fr;
        }

        .welcome-illustration {
            display: none;
        }

        .pie-chart {
            width: 160px;
            height: 160px;
        }
    }
</style>

<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="services-container">
    <div class="page-header">
        <h2 class="page-title">Overview</h2>
    </div>

    <div class="dashboard-container">
        <div class="dashboard-grid">
            <!-- Left Section -->
            <div class="left-section">
                <!-- Welcome Card -->
                <div class="welcome-card">
                    @php
                        $hour = date('H');
                        $greeting = 'Good Morning';
                        if ($hour >= 12 && $hour < 17) {
                            $greeting = 'Good Afternoon';
                        } elseif ($hour >= 17) {
                            $greeting = 'Good Evening';
                        }
                        $currentDay = date('l');
                        $currentDate = date('F d, Y');
                        $currentTime = date('h:i A');
                    @endphp
                    <div class="welcome-content">
                        <h1>{{ $greeting }}<br></h1>
                        <p class="welcome-subtitle">CLOUDSCAPE</p>
                        <p class="welcome-datetime">
                            <i class="far fa-calendar"></i> {{ $currentDay }}, {{ $currentDate }} 
                            <span style="margin-left: 1rem;">
                                <i class="far fa-clock"></i> {{ $currentTime }}
                            </span>
                        </p>
                    </div>
                    <div class="welcome-illustration">
                        <div class="doctor-avatar"></div>
                        <div class="floating-circle circle-1"></div>
                        <div class="floating-circle circle-2"></div>
                        <div class="floating-circle circle-3"></div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="stats-row">
                    <a href="{{ route('admin.services.index') }}" class="stat-card-link">
                        <div class="stat-card services">
                            <div class="stat-label">
                                <span class="stat-dot"></span>
                                Services
                            </div>
                            <div class="stat-value">{{ $totalServices ?? '0' }}</div>
                            <div class="stat-subtitle">Total Services</div>
                        </div>
                    </a>

                    <a href="{{ route('admin.appointments.index') }}" class="stat-card-link">
                        <div class="stat-card appointments">
                            <div class="stat-label">
                                <span class="stat-dot"></span>
                                Appointments
                            </div>
                            <div class="stat-value">{{ $appointmentsToday ?? 0 }}</div>
                            <div class="stat-subtitle">Today's Appointments</div>
                        </div>
                    </a>

                    <div class="stat-card messages">
                        <div class="stat-label">
                            <span class="stat-dot"></span>
                            Messages
                        </div>
                        <div class="stat-value">{{ $messagesToday ?? 0 }}</div>
                        <div class="stat-subtitle">Today's Messages</div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Appointment Status Distribution</h3>
                        <p class="chart-subtitle">Overview of all appointments by status</p>
                    </div>
                    <div class="pie-chart-container">
                        <div class="pie-chart-wrapper">
                            <div class="pie-chart">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                        <div class="chart-legend">
                            <div class="legend-item">
                                <div class="legend-info">
                                    <span class="legend-dot pending"></span>
                                    <span class="legend-text">Pending</span>
                                </div>
                                <span class="legend-value">{{ $pendingCount ?? 0 }}</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-info">
                                    <span class="legend-dot today"></span>
                                    <span class="legend-text">Today's Appointments</span>
                                </div>
                                <span class="legend-value">{{ $appointmentsToday ?? 0 }}</span>
                            </div>
                            <!-- <div class="legend-item">
                                <div class="legend-info">
                                    <span class="legend-dot cancelled"></span>
                                    <span class="legend-text">Cancelled</span>
                                </div>
                                <span class="legend-value">{{ $cancelledCount ?? 0 }}</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <!-- Calendar -->
                <div class="calendar-card">
                    @php
                        $currentMonth = date('n');
                        $currentYear = date('Y');
                        $currentDayNum = date('j');
                        $monthName = strtoupper(date('F Y'));
                        
                        $firstDayOfMonth = date('w', strtotime($currentYear . '-' . $currentMonth . '-01'));
                        $daysInMonth = date('t', strtotime($currentYear . '-' . $currentMonth . '-01'));
                        
                        $prevMonth = $currentMonth - 1;
                        $prevYear = $currentYear;
                        if ($prevMonth < 1) {
                            $prevMonth = 12;
                            $prevYear--;
                        }
                        $daysInPrevMonth = date('t', strtotime($prevYear . '-' . $prevMonth . '-01'));
                    @endphp
                    
                    <div class="calendar-header">
                        <span class="calendar-month">{{ $monthName }}</span>
                        <div class="calendar-nav">
                            <button><i class="fas fa-chevron-left"></i></button>
                            <button><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="calendar-grid">
                        <div class="calendar-day-header">Su</div>
                        <div class="calendar-day-header">Mo</div>
                        <div class="calendar-day-header">Tu</div>
                        <div class="calendar-day-header">We</div>
                        <div class="calendar-day-header">Th</div>
                        <div class="calendar-day-header">Fr</div>
                        <div class="calendar-day-header">Sa</div>
                        
                        @php
                            for ($i = $firstDayOfMonth - 1; $i >= 0; $i--) {
                                echo '<div class="calendar-day empty">' . ($daysInPrevMonth - $i) . '</div>';
                            }
                            
                            for ($day = 1; $day <= $daysInMonth; $day++) {
                                $todayClass = ($day == $currentDayNum) ? ' today' : '';
                                echo '<div class="calendar-day' . $todayClass . '">' . $day . '</div>';
                            }
                            
                            $totalCells = $firstDayOfMonth + $daysInMonth;
                            $remainingCells = (7 - ($totalCells % 7)) % 7;
                            for ($day = 1; $day <= $remainingCells; $day++) {
                                echo '<div class="calendar-day empty">' . $day . '</div>';
                            }
                        @endphp
                    </div>
                </div>

                <!-- Appointments Today -->
                <div class="appointments-card">
                    <div class="appointments-title">Total Arrived</div>
                    <div class="appointments-value">{{ $appointmentsToday ?? '0' }}</div>
                    <div class="appointments-subtitle">Patients / Day {{ date('M d, Y') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Update DateTime
    function updateDateTime() {
        const now = new Date();
        
        const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        const dayName = days[now.getDay()];
        
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 
                       'July', 'August', 'September', 'October', 'November', 'December'];
        const monthName = months[now.getMonth()];
        
        const date = now.getDate();
        const year = now.getFullYear();
        
        let hours = now.getHours();
        const minutes = now.getMinutes();
        const ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        const minutesStr = minutes < 10 ? '0' + minutes : minutes;
        
        const dateTimeElement = document.querySelector('.welcome-datetime');
        if (dateTimeElement) {
            dateTimeElement.innerHTML = `
                <i class="far fa-calendar"></i> ${dayName}, ${monthName} ${date}, ${year} 
                <span style="margin-left: 1rem;">
                    <i class="far fa-clock"></i> ${hours}:${minutesStr} ${ampm}
                </span>
            `;
        }
        
        const greetingElement = document.querySelector('.welcome-content h1');
        let greeting = 'Good Morning';
        const currentHour = now.getHours();
        if (currentHour >= 12 && currentHour < 17) {
            greeting = 'Good Afternoon';
        } else if (currentHour >= 17) {
            greeting = 'Good Evening';
        }
        
        if (greetingElement) {
            greetingElement.innerHTML = `${greeting}<br>`;
        }
    }
    
    updateDateTime();
    setInterval(updateDateTime, 1000);

    // Pie Chart
    const ctx = document.getElementById('pieChart').getContext('2d');
    
    const pieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Pending', "Today's Appointments", 'Cancelled'],
            datasets: [{
                data: [
                    {{ $pendingCount ?? 0 }},
                    {{ $appointmentsToday ?? 0 }},
                    {{ $cancelledCount ?? 0 }}
                ],
                backgroundColor: [
                    '#A78BFA',
                    '#34D399',
                    '#FCD34D'
                ],
                borderWidth: 0,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#1F2937',
                    padding: 12,
                    borderRadius: 8,
                    titleFont: {
                        size: 14,
                        weight: '600'
                    },
                    bodyFont: {
                        size: 13
                    },
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.parsed || 0;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                            return `${label}: ${value} (${percentage}%)`;
                        }
                    }
                }
            },
            cutout: '60%'
        }
    });
</script>

@endsection