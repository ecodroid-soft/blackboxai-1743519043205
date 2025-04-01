<?php
require_once 'admin/db_config.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$gameManager = new GameManager($db);
$resultManager = new ResultManager($db);

// Get all active games
$games = $gameManager->getAllGames();

// Get today's results
$todayResults = $resultManager->getTodayResults();

// Format results for display
$formattedResults = [];
foreach ($todayResults as $result) {
    $formattedResults[$result['name']] = [
        'name' => $result['display_name'],
        'time' => date('h:i A', strtotime($result['time'])),
        'result' => $result['number'],
        'status' => $result['status']
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satta King</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="home-icon">
                <a href="#"><i class="fas fa-home"></i></a>
            </div>
            <div class="nav-links">
                <a href="#" class="nav-link">SATTA KING 786</a>
                <a href="#" class="nav-link">SATTA CHART</a>
                <a href="#" class="nav-link">TAJ SATTA KING</a>
                <a href="#" class="nav-link">SATTA LEAK</a>
            </div>
        </nav>

        <!-- Marquee Section -->
        <div class="marquee-section">
            <marquee>SATTA KING, SATTAKING, SATTA RESULT</marquee>
        </div>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-header">
                <h1>आज का सट्टा नंबर यहाँ देखें</h1>
                <p>【FARIDABAD GAZIYABAD GALI DS】</p>
                <p class="after-pass">AFTER PASS AFTER PASS</p>
                <h2>MUMBAI HEAD BRANCH (MD)</h2>
                <p class="add-text">ADD</p>
                <button class="satta-king-btn">SATTA KING</button>
            </div>

            <div class="result-section">
                <h2>Satta king | Satta result | सट्टा किंग</h2>
                
                <!-- Live Results Section -->
                <div class="live-results">
                    <h3 class="result-title">🔴 LIVE RESULTS</h3>
                    <div class="result-grid">
                        <?php foreach ($games as $game): ?>
                        <div class="result-card" data-game="<?php echo htmlspecialchars($game['name']); ?>">
                            <div class="card-header">
                                <h4><?php echo htmlspecialchars($game['display_name']); ?></h4>
                                <p class="time"><?php echo date('h:i A', strtotime($game['time_slot'])); ?></p>
                            </div>
                            <div class="number-display <?php echo !isset($formattedResults[$game['name']]) ? 'loading' : ''; ?>">
                                <p class="number">
                                    <?php echo isset($formattedResults[$game['name']]) ? 
                                          htmlspecialchars($formattedResults[$game['name']]['result']) : 
                                          '--'; ?>
                                </p>
                                <div class="number-animation"></div>
                            </div>
                            <span class="status <?php echo isset($formattedResults[$game['name']]) ? 'win' : 'pending'; ?>">
                                <i class="fas <?php echo isset($formattedResults[$game['name']]) ? 
                                                   'fa-check-circle' : 
                                                   'fa-clock'; ?>"></i>
                                <?php echo isset($formattedResults[$game['name']]) ? 'WIN' : 'PENDING'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="next-update">
                        <p>Next Update In: <span id="countdown">05:00</span></p>
                    </div>
                </div>

                <!-- Record Chart Table -->
                <div class="record-chart">
                    <h3 class="chart-title">Satta King Record Chart December 2024</h3>
                    <div class="table-responsive">
                        <table class="record-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>FARIDABAD</th>
                                    <th>GAZIYABAD</th>
                                    <th>GALI</th>
                                    <th>DESAWAR</th>
                                    <th>SHALIMAR</th>
                                    <th>RAJSHRI</th>
                                    <th>SUNDRAM</th>
                                    <th>SHRI GANESH</th>
                                    <th>SHRI HARI</th>
                                    <th>CHAR MINAR</th>
                                    <th>LUCKY 7</th>
                                    <th>TAJ</th>
                                    <th>HINDUSTAN</th>
                                    <th>INDIA CLUB</th>
                                    <th>PARAS</th>
                                    <th>AHMEDABAD</th>
                                    <th>DELHI-2 PM</th>
                                    <th>DEV DARSHAN</th>
                                    <th>NCR</th>
                                    <th>MAHALAXMI</th>
                                    <th>METRO</th>
                                    <th>KALYUG</th>
                                    <th>MAHARAJ</th>
                                    <th>SALIMAR DAY</th>
                                    <th>NEW GAZIYABAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Sample data - In production, this would come from your database
                                $chartData = [
                                    ['1', '84', '79', '26', '##', '06', '81', '74', '18', '85', '##', '59', '88', '50', '82', '54', '19', '12', '50', '34', '16', '94', '83', '24', '19', '50'],
                                    ['2', '01', '01', '77', '21', '71', '93', '79', '09', '34', '21', '24', '09', '15', '82', '02', '20', '65', '56', '36', '68', '48', '56', '35', '94', '10'],
                                    ['3', '61', '03', '09', '15', '00', '41', '53', '53', '18', '15', '85', '51', '76', '76', '07', '25', '63', '47', '21', '46', '39', '98', '04', '13', '60']
                                ];

                                foreach ($chartData as $row): ?>
                                <tr>
                                    <?php foreach ($row as $cell): ?>
                                    <td><?php echo htmlspecialchars($cell); ?></td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="holi-section">
                    <h3>【HOLI DHAMAK】</h3>
                    <p>FARIDABAD | GAZIYABAD | GALI | DS</p>
                    <p class="highlight">【 DIRECT COMPANY SE LEAK JODI 】</p>
                </div>

                <div class="notice-section">
                    <p>AAJ APNA LOSS COVER KARNA CHAHTE HO ,GAME SINGAL JODI MAI HE MILEGA ,GAME KISI KO AAP NAHI KAAT SAKTA ,APNI BOOKING KARANE K LIYE ABHI WHATSAPP YA CALL KARE !</p>
                    <p class="after-pass">AFTER PASS AFTER PASS</p>
                    <h3>RAJBEER SING(CEO)</h3>
                    <h2>SATTA KING HEAD BRANCH MD MUMBAI</h2>
                    <p class="contact">9262372454</p>
                </div>
            </div>
        </main>

        <!-- Floating Action Buttons -->
        <div class="floating-buttons">
            <div class="play-online">
                <p>Play Online</p>
                <p>Satta 100%</p>
                <p>Trusted</p>
            </div>
            <div class="app-download">
                <p>Satta App</p>
                <p>Fast</p>
                <p>Withdrawal</p>
                <p>App Download</p>
                <p>Now</p>
            </div>
            <div class="telegram-icon">
                <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
            <div class="whatsapp-icon">
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <span class="notification-badge">4</span>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>