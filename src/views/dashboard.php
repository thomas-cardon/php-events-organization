<?php
    View::setTitle('Tableau de bord');
    View::addStyleSheet('/vendor/css/bourbon/dashboard.css');
?>

<main class="dashboard">
    <?php View::show('components/header', $params); ?>

    <nav class="buttons vertical">
        <a href="<?php echo BASE_PATH ?>/dashboard">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
        </a>
        <a href="<?php echo BASE_PATH ?>/dashboard/users">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
            </svg>
        </a>
        <a href="<?php echo BASE_PATH ?>/dashboard/create-tournament">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </nav>

    <section class="content">
        <div class="overview">
            <div class="card-chart">
                <canvas id="myChart"></canvas>
            </div>

            <div class="card-chart">
                <canvas id="pointsRepartition"></canvas>
            </div>

            <div>
                <div class="card-sm">
                    <div class="info">
                        <p>Evènements en attente</p>
                        <h2>
                            <?php echo $params['events_waiting'] ?? 0 ?>
                        </h2>
                    </div>
                    <div class="icon">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="card-sm">
                    <div class="info">
                        <p>Tournois en cours</p>
                        <h2>
                            <?php echo $params['tournaments_ongoing'] ?? 0 ?>
                        </h2>
                    </div>
                    <div class="icon">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                <div class="card-sm">
                    <div class="info">
                        <p>Points en circulation</p>
                        <h2>
                            <?php echo $params['points_circulation'] ?? 0 ?>
                        </h2>
                    </div>
                    <div class="icon">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_cards">
            <?php View::show('components/dashboard/widgets/recentUsers', array( 'data' => $params['recent_users'] ?? null )); ?>
            <div class="card">
              
            </div>
            <div class="card card-transparent">
              <canvas id="pointsSpent"></canvas>
            </div>
        </div>
    </section>
    <?php View::show('components/footer', array( 'dashboard' => true )); ?>
</main>
    <script type="text/javascript">
      const menuIcon = document.querySelector('.menu-icon');
      const aside = document.querySelector('.aside');
      const asideClose = document.querySelector('.aside_close-icon');

      function toggle(el, className) {
        if (el.classList.contains(className)) {
          el.classList.remove(className);
        } else {
          el.classList.add(className);
        }
      }

      menuIcon.addEventListener('click', function() {
        toggle(aside, 'active');
      });

      asideClose.addEventListener('click', function() {
        toggle(aside, 'active');
      });
    </script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js" integrity="sha384-4OMvxyBTgFvMJK0tWjIk57FbleRvzmamjg6m+ERG0/p0rV83S6PHHUcLu84Gt+SF" crossorigin="anonymous"></script>
<script>
    Chart.defaults.color = 'white';
    
    let ctx = document.getElementById("myChart");
    new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Administrateur', 'Organisateur', 'Jury', 'Participant'],
                datasets: [{
                label: '# of Tomatoes',
                data: [12, 19, 3, 5],
                backgroundColor: [
                    '#A40E4C',
                    '#818CF8',
                    '#2BEBC8',
                    '#60626C'
                ],
                borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        align: 'left'
                    }
                }
            }
        });

        let points = [
            ['Jane', 10000],
            ['John', 8000],
            ['Peter', 6000],
            ['Mary', 4000],
            ['Susan', 2000],
            ['Julie', 1000]
        ];

        let labels = points.map(point => point[0]);
        let data = points.map(point => point[1]);

        ctx = document.getElementById("pointsRepartition");
        new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                label: 'Répartition des points',
                data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        align: 'left'
                    }
                }
            }
        });

        ctx = document.getElementById("pointsSpent");
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Janvier', 'Février', 'Mars'],
                datasets: [{
                    label: 'Dépense des points',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.4
                }]
            }
        });


</script>
