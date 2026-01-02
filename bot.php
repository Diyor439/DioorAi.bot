<?php
/*
=====================================================
GROQ AI TELEGRAM BOT - FULL PROFESSIONAL VERSION
Multi-language: O'zbek, Русский, English
100% WORKING VERSION
=====================================================
*/

// ============ KONFIGURATSIYA / CONFIGURATION ============
define('BOT_TOKEN', '8261972583:AAHyTzxlBwlmWVJk5SGJwcynuCbLHJ0lunw');
define('GROQ_API_KEY', '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');
define('GROQ_API_URL', 'https://api.groq.com/openai/v1/chat/completions');
define('GROQ_MODEL', 'llama-3.3-70b-versatile'); // Eng yaxshi model
define('ADMIN_ID', 5925757661);

// Database fayli (SQLite)
define('DB_FILE', 'bot_database.db');

// ============ TIL SOZLAMALARI / LANGUAGE SETTINGS ============
$languages = [
    'uz' => [
        'welcome' => "👋 Assalomu alaykum, <b>%s</b>!\n\n🤖 Men <b>AI Assistant</b> botiman. Sizga har qanday savolingizga javob berishga tayyorman!\n\n📝 <b>Men nima qila olaman:</b>\n• Savollaringizga javob berish\n• Matn yozish va tahrirlash\n• Tarjima qilish\n• Kod yozishda yordam\n• Muammolarni yechish\n• Va boshqa ko'p narsalar!\n\n💬 Menga biror narsa yozing va men sizga yordam beraman!\n\n<i>Komandalar: /help - yordam, /clear - tarixni tozalash, /lang - tilni o'zgartirish</i>",
        'help' => "📚 <b>Yordam</b>\n\n<b>Komandalar:</b>\n/start - Botni boshlash\n/help - Yordam\n/clear - Suhbat tarixini tozalash\n/myid - Telegram ID ni ko'rish\n/lang - Tilni o'zgartirish\n\n<b>Foydalanish:</b>\nMenga oddiy xabar yuboring va men sizga javob beraman. Suhbat davomida men oldingi xabarlarni eslab qolaman.\n\n💡 <i>Maslahat: Aniq va batafsil savollar bering!</i>",
        'cleared' => "🗑️ Suhbat tarixi tozalandi. Yangi suhbat boshlashingiz mumkin!",
        'myid' => "🆔 Sizning Telegram ID: <code>%d</code>",
        'error' => "❌ Xatolik yuz berdi. Iltimos qaytadan urinib ko'ring.\n\n<i>Agar muammo davom etsa, /clear bilan tarixni tozalang.</i>",
        'blocked' => "🚫 Siz bloklangansiz.",
        'maintenance' => "⚠️ Bot hozirda texnik ishlar olib borilmoqda. Keyinroq qaytib keling.",
        'choose_lang' => "🌐 Tilni tanlang / Выберите язык / Choose language:",
        'lang_changed' => "✅ Til o'zgartirildi: O'zbek",
        'thinking' => "🤔 O'ylayapman..."
    ],
    'ru' => [
        'welcome' => "👋 Здравствуйте, <b>%s</b>!\n\n🤖 Я <b>AI Assistant</b> бот. Готов помочь вам с любыми вопросами!\n\n📝 <b>Что я умею:</b>\n• Отвечать на вопросы\n• Писать и редактировать тексты\n• Переводить\n• Помогать с кодом\n• Решать задачи\n• И многое другое!\n\n💬 Напишите мне что-нибудь и я помогу!\n\n<i>Команды: /help - помощь, /clear - очистить историю, /lang - сменить язык</i>",
        'help' => "📚 <b>Помощь</b>\n\n<b>Команды:</b>\n/start - Запустить бота\n/help - Помощь\n/clear - Очистить историю чата\n/myid - Показать Telegram ID\n/lang - Сменить язык\n\n<b>Использование:</b>\nПросто отправьте мне сообщение и я отвечу. Я помню предыдущие сообщения в разговоре.\n\n💡 <i>Совет: Задавайте точные и подробные вопросы!</i>",
        'cleared' => "🗑️ История чата очищена. Можете начать новый разговор!",
        'myid' => "🆔 Ваш Telegram ID: <code>%d</code>",
        'error' => "❌ Произошла ошибка. Пожалуйста, попробуйте снова.\n\n<i>Если проблема продолжается, очистите историю командой /clear.</i>",
        'blocked' => "🚫 Вы заблокированы.",
        'maintenance' => "⚠️ Бот сейчас на техническом обслуживании. Вернитесь позже.",
        'choose_lang' => "🌐 Tilni tanlang / Выберите язык / Choose language:",
        'lang_changed' => "✅ Язык изменен: Русский",
        'thinking' => "🤔 Думаю..."
    ],
    'en' => [
        'welcome' => "👋 Hello, <b>%s</b>!\n\n🤖 I'm <b>AI Assistant</b> bot. Ready to help you with any questions!\n\n📝 <b>What I can do:</b>\n• Answer questions\n• Write and edit texts\n• Translate\n• Help with code\n• Solve problems\n• And much more!\n\n💬 Write me something and I'll help!\n\n<i>Commands: /help - help, /clear - clear history, /lang - change language</i>",
        'help' => "📚 <b>Help</b>\n\n<b>Commands:</b>\n/start - Start bot\n/help - Help\n/clear - Clear chat history\n/myid - Show Telegram ID\n/lang - Change language\n\n<b>Usage:</b>\nJust send me a message and I'll respond. I remember previous messages in the conversation.\n\n💡 <i>Tip: Ask clear and detailed questions!</i>",
        'cleared' => "🗑️ Chat history cleared. You can start a new conversation!",
        'myid' => "🆔 Your Telegram ID: <code>%d</code>",
        'error' => "❌ An error occurred. Please try again.\n\n<i>If the problem persists, clear history with /clear.</i>",
        'blocked' => "🚫 You are blocked.",
        'maintenance' => "⚠️ Bot is currently under maintenance. Come back later.",
        'choose_lang' => "🌐 Tilni tanlang / Выберите язык / Choose language:",
        'lang_changed' => "✅ Language changed: English",
        'thinking' => "🤔 Thinking..."
    ]
];

// ============ DATABASE SOZLASH ============
function initDatabase() {
    $db = new SQLite3(DB_FILE);
    
    $db->exec("CREATE TABLE IF NOT EXISTS users (
        user_id INTEGER PRIMARY KEY,
        username TEXT,
        first_name TEXT,
        last_name TEXT,
        language TEXT DEFAULT 'uz',
        is_blocked INTEGER DEFAULT 0,
        joined_date TEXT,
        last_activity TEXT,
        message_count INTEGER DEFAULT 0
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS messages (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER,
        role TEXT,
        content TEXT,
        timestamp TEXT
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS statistics (
        id INTEGER PRIMARY KEY,
        total_users INTEGER DEFAULT 0,
        total_messages INTEGER DEFAULT 0,
        active_today INTEGER DEFAULT 0,
        last_update TEXT
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS settings (
        key TEXT PRIMARY KEY,
        value TEXT
    )");
    
    $db->exec("CREATE TABLE IF NOT EXISTS broadcasts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        message TEXT,
        sent_count INTEGER,
        timestamp TEXT
    )");
    
    $db->exec("INSERT OR IGNORE INTO settings (key, value) VALUES ('bot_status', 'active')");
    $db->exec("INSERT OR IGNORE INTO settings (key, value) VALUES ('welcome_message', 'enabled')");
    
    return $db;
}

// ============ WEBHOOK/POLLING HANDLER ============
$update = json_decode(file_get_contents('php://input'), true);

if (isset($_GET['mode']) && $_GET['mode'] == 'admin') {
    showAdminPanel();
    exit;
}

if (isset($_GET['action'])) {
    handleAdminAction();
    exit;
}

if (!$update) {
    $offset = 0;
    echo "🤖 Bot started successfully!\n";
    echo "📊 Admin panel: " . getAdminPanelUrl() . "\n";
    echo "✅ Waiting for messages...\n\n";
    
    while (true) {
        $updates = getUpdates($offset);
        foreach ($updates as $update) {
            try {
                processUpdate($update);
            } catch (Exception $e) {
                error_log("Error: " . $e->getMessage());
            }
            $offset = $update['update_id'] + 1;
        }
        sleep(1);
    }
} else {
    processUpdate($update);
}

// ============ ASOSIY UPDATE HANDLER ============
function processUpdate($update) {
    global $languages;
    $db = initDatabase();
    
    if (isset($update['callback_query'])) {
        handleCallbackQuery($update['callback_query']);
        return;
    }
    
    if (!isset($update['message'])) return;
    
    $chatId = $update['message']['chat']['id'];
    $messageText = $update['message']['text'] ?? '';
    $userId = $update['message']['from']['id'];
    $userName = $update['message']['from']['username'] ?? '';
    $firstName = $update['message']['from']['first_name'] ?? 'User';
    $lastName = $update['message']['from']['last_name'] ?? '';
    
    $botStatus = $db->querySingle("SELECT value FROM settings WHERE key='bot_status'");
    if ($botStatus == 'stopped' && $userId != ADMIN_ID) {
        $userLang = getUserLanguage($db, $userId);
        sendMessage($chatId, $languages[$userLang]['maintenance']);
        return;
    }
    
    $isBlocked = $db->querySingle("SELECT is_blocked FROM users WHERE user_id={$userId}");
    if ($isBlocked == 1 && $userId != ADMIN_ID) {
        $userLang = getUserLanguage($db, $userId);
        sendMessage($chatId, $languages[$userLang]['blocked']);
        return;
    }
    
    registerUser($db, $userId, $userName, $firstName, $lastName);
    $userLang = getUserLanguage($db, $userId);
    
    // Admin commands
    if ($userId == ADMIN_ID) {
        if ($messageText == '/admin') {
            sendAdminMenu($chatId);
            return;
        }
        
        if ($messageText == '/stats') {
            sendStatistics($chatId, $db);
            return;
        }
        
        if (strpos($messageText, '/broadcast ') === 0) {
            $broadcastMsg = substr($messageText, 11);
            $sent = sendBroadcast($db, $broadcastMsg);
            sendMessage($chatId, "✅ Message sent to {$sent} users!");
            return;
        }
        
        if (strpos($messageText, '/block ') === 0) {
            $targetUserId = intval(substr($messageText, 7));
            blockUser($db, $targetUserId, true);
            sendMessage($chatId, "✅ User blocked: {$targetUserId}");
            return;
        }
        
        if (strpos($messageText, '/unblock ') === 0) {
            $targetUserId = intval(substr($messageText, 9));
            blockUser($db, $targetUserId, false);
            sendMessage($chatId, "✅ User unblocked: {$targetUserId}");
            return;
        }
        
        if ($messageText == '/stopbot') {
            $db->exec("UPDATE settings SET value='stopped' WHERE key='bot_status'");
            sendMessage($chatId, "⏸️ Bot stopped. Restart: /startbot");
            return;
        }
        
        if ($messageText == '/startbot') {
            $db->exec("UPDATE settings SET value='active' WHERE key='bot_status'");
            sendMessage($chatId, "▶️ Bot started!");
            return;
        }
    }
    
    // User commands
    if ($messageText == '/start') {
        $welcomeMsg = sprintf($languages[$userLang]['welcome'], $firstName);
        sendMessage($chatId, $welcomeMsg);
        return;
    }
    
    if ($messageText == '/help') {
        sendMessage($chatId, $languages[$userLang]['help']);
        return;
    }
    
    if ($messageText == '/clear') {
        clearHistory($db, $userId);
        sendMessage($chatId, $languages[$userLang]['cleared']);
        return;
    }
    
    if ($messageText == '/myid') {
        sendMessage($chatId, sprintf($languages[$userLang]['myid'], $userId));
        return;
    }
    
    if ($messageText == '/lang') {
        sendLanguageMenu($chatId, $userLang);
        return;
    }
    
    // AI response
    if ($messageText) {
        sendChatAction($chatId, 'typing');
        
        $response = askGroq($db, $messageText, $userId, $userLang);
        
        if ($response) {
            sendLongMessage($chatId, $response);
            updateStatistics($db);
        } else {
            sendMessage($chatId, $languages[$userLang]['error']);
        }
    }
}

// ============ CALLBACK QUERY HANDLER ============
function handleCallbackQuery($callback) {
    global $languages;
    $db = initDatabase();
    
    $chatId = $callback['message']['chat']['id'];
    $userId = $callback['from']['id'];
    $data = $callback['data'];
    
    if (strpos($data, 'lang_') === 0) {
        $lang = substr($data, 5);
        
        $stmt = $db->prepare("UPDATE users SET language=? WHERE user_id=?");
        $stmt->bindValue(1, $lang, SQLITE3_TEXT);
        $stmt->bindValue(2, $userId, SQLITE3_INTEGER);
        $stmt->execute();
        
        answerCallbackQuery($callback['id'], $languages[$lang]['lang_changed']);
        editMessageText($chatId, $callback['message']['message_id'], $languages[$lang]['lang_changed']);
    }
}

// ============ GROQ AI FUNKSIYASI ============
function askGroq($db, $message, $userId, $userLang) {
    $result = $db->query("SELECT role, content FROM messages WHERE user_id={$userId} ORDER BY id DESC LIMIT 10");
    
    $history = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        array_unshift($history, [
            'role' => $row['role'],
            'content' => $row['content']
        ]);
    }
    
    $history[] = [
        'role' => 'user',
        'content' => $message
    ];
    
    $systemPrompts = [
        'uz' => "Siz foydali AI yordamchisisiz. O'zbek tilida aniq, qisqa va tushunarli javoblar bering. Do'stona va samimiy bo'ling.",
        'ru' => "Вы полезный AI-помощник. Давайте точные, краткие и понятные ответы на русском языке. Будьте дружелюбны и искренни.",
        'en' => "You are a helpful AI assistant. Give accurate, concise and clear answers in English. Be friendly and sincere."
    ];
    
    $data = [
        'model' => GROQ_MODEL,
        'messages' => array_merge(
            [
                [
                    'role' => 'system',
                    'content' => $systemPrompts[$userLang]
                ]
            ],
            $history
        ),
        'temperature' => 0.7,
        'max_tokens' => 2048,
        'top_p' => 1,
        'stream' => false
    ];
    
    $ch = curl_init(GROQ_API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . GROQ_API_KEY
    ]);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    if ($httpCode == 200 && $response) {
        $result = json_decode($response, true);
        
        if (isset($result['choices'][0]['message']['content'])) {
            $aiResponse = $result['choices'][0]['message']['content'];
            
            saveMessage($db, $userId, 'user', $message);
            saveMessage($db, $userId, 'assistant', $aiResponse);
            
            return $aiResponse;
        }
    }
    
    // Log error for debugging
    if ($curlError) {
        error_log("Groq API Error: " . $curlError);
    }
    if ($response) {
        error_log("Groq API Response: " . $response);
    }
    
    return null;
}

// ============ DATABASE FUNKSIYALAR ============
function registerUser($db, $userId, $userName, $firstName, $lastName) {
    $stmt = $db->prepare("INSERT OR REPLACE INTO users (user_id, username, first_name, last_name, language, joined_date, last_activity, message_count) 
                          VALUES (:uid, :uname, :fname, :lname, 
                          COALESCE((SELECT language FROM users WHERE user_id=:uid), 'uz'),
                          COALESCE((SELECT joined_date FROM users WHERE user_id=:uid), datetime('now')),
                          datetime('now'),
                          COALESCE((SELECT message_count FROM users WHERE user_id=:uid), 0) + 1)");
    $stmt->bindValue(':uid', $userId, SQLITE3_INTEGER);
    $stmt->bindValue(':uname', $userName, SQLITE3_TEXT);
    $stmt->bindValue(':fname', $firstName, SQLITE3_TEXT);
    $stmt->bindValue(':lname', $lastName, SQLITE3_TEXT);
    $stmt->execute();
}

function getUserLanguage($db, $userId) {
    $lang = $db->querySingle("SELECT language FROM users WHERE user_id={$userId}");
    return $lang ?: 'uz';
}

function saveMessage($db, $userId, $role, $content) {
    $stmt = $db->prepare("INSERT INTO messages (user_id, role, content, timestamp) VALUES (?, ?, ?, datetime('now'))");
    $stmt->bindValue(1, $userId, SQLITE3_INTEGER);
    $stmt->bindValue(2, $role, SQLITE3_TEXT);
    $stmt->bindValue(3, $content, SQLITE3_TEXT);
    $stmt->execute();
}

function clearHistory($db, $userId) {
    $db->exec("DELETE FROM messages WHERE user_id={$userId}");
}

function updateStatistics($db) {
    $totalUsers = $db->querySingle("SELECT COUNT(*) FROM users");
    $totalMessages = $db->querySingle("SELECT SUM(message_count) FROM users");
    $activeToday = $db->querySingle("SELECT COUNT(*) FROM users WHERE DATE(last_activity) = DATE('now')");
    
    $db->exec("INSERT OR REPLACE INTO statistics (id, total_users, total_messages, active_today, last_update) 
               VALUES (1, {$totalUsers}, {$totalMessages}, {$activeToday}, datetime('now'))");
}

function blockUser($db, $userId, $block = true) {
    $value = $block ? 1 : 0;
    $db->exec("UPDATE users SET is_blocked={$value} WHERE user_id={$userId}");
}

// ============ ADMIN FUNKSIYALAR ============
function sendAdminMenu($chatId) {
    $menu = "👨‍💼 <b>ADMIN PANEL</b>\n\n";
    $menu .= "📊 <b>Commands:</b>\n\n";
    $menu .= "/stats - Statistics\n";
    $menu .= "/broadcast <i>[message]</i> - Send to all\n";
    $menu .= "/block <i>[user_id]</i> - Block user\n";
    $menu .= "/unblock <i>[user_id]</i> - Unblock\n";
    $menu .= "/stopbot - Stop bot\n";
    $menu .= "/startbot - Start bot\n\n";
    $menu .= "🌐 Web panel:\n<code>" . getAdminPanelUrl() . "</code>";
    
    sendMessage($chatId, $menu);
}

function sendStatistics($chatId, $db) {
    $stats = $db->querySingle("SELECT * FROM statistics WHERE id=1", true);
    $totalUsers = $stats['total_users'] ?? 0;
    $totalMessages = $stats['total_messages'] ?? 0;
    $activeToday = $stats['active_today'] ?? 0;
    $blockedUsers = $db->querySingle("SELECT COUNT(*) FROM users WHERE is_blocked=1");
    $botStatus = $db->querySingle("SELECT value FROM settings WHERE key='bot_status'");
    
    $uzUsers = $db->querySingle("SELECT COUNT(*) FROM users WHERE language='uz'");
    $ruUsers = $db->querySingle("SELECT COUNT(*) FROM users WHERE language='ru'");
    $enUsers = $db->querySingle("SELECT COUNT(*) FROM users WHERE language='en'");
    
    $msg = "📊 <b>BOT STATISTICS</b>\n\n";
    $msg .= "👥 Total users: <b>{$totalUsers}</b>\n";
    $msg .= "💬 Total messages: <b>{$totalMessages}</b>\n";
    $msg .= "🟢 Active today: <b>{$activeToday}</b>\n";
    $msg .= "🚫 Blocked: <b>{$blockedUsers}</b>\n\n";
    $msg .= "🌐 Languages:\n";
    $msg .= "🇺🇿 O'zbek: <b>{$uzUsers}</b>\n";
    $msg .= "🇷🇺 Русский: <b>{$ruUsers}</b>\n";
    $msg .= "🇬🇧 English: <b>{$enUsers}</b>\n\n";
    $msg .= "⚙️ Status: " . ($botStatus == 'active' ? "✅ Active" : "⏸️ Stopped");
    
    sendMessage($chatId, $msg);
}

function sendBroadcast($db, $message) {
    $result = $db->query("SELECT user_id FROM users WHERE is_blocked=0");
    
    $sent = 0;
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        if (sendMessage($row['user_id'], "📢 <b>Broadcast:</b>\n\n" . $message)) {
            $sent++;
        }
        usleep(100000);
    }
    
    $stmt = $db->prepare("INSERT INTO broadcasts (message, sent_count, timestamp) VALUES (?, ?, datetime('now'))");
    $stmt->bindValue(1, $message, SQLITE3_TEXT);
    $stmt->bindValue(2, $sent, SQLITE3_INTEGER);
    $stmt->execute();
    
    return $sent;
}

function sendLanguageMenu($chatId, $currentLang) {
    global $languages;
    
    $keyboard = [
        'inline_keyboard' => [
            [['text' => '🇺🇿 O\'zbek' . ($currentLang == 'uz' ? ' ✅' : ''), 'callback_data' => 'lang_uz']],
            [['text' => '🇷🇺 Русский' . ($currentLang == 'ru' ? ' ✅' : ''), 'callback_data' => 'lang_ru']],
            [['text' => '🇬🇧 English' . ($currentLang == 'en' ? ' ✅' : ''), 'callback_data' => 'lang_en']]
        ]
    ];
    
    sendMessageWithKeyboard($chatId, $languages[$currentLang]['choose_lang'], $keyboard);
}

function getAdminPanelUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = $_SERVER['SCRIPT_NAME'] ?? '/bot.php';
    return $protocol . "://" . $host . $script . "?mode=admin";
}

// ============ WEB ADMIN PANEL ============
function showAdminPanel() {
    $db = initDatabase();
    $stats = $db->querySingle("SELECT * FROM statistics WHERE id=1", true);
    
    $users = [];
    $result = $db->query("SELECT * FROM users ORDER BY last_activity DESC LIMIT 100");
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $users[] = $row;
    }
    
    $broadcasts = [];
    $result = $db->query("SELECT * FROM broadcasts ORDER BY id DESC LIMIT 10");
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $broadcasts[] = $row;
    }
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - AI Bot</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                padding: 20px;
            }
            .container { max-width: 1400px; margin: 0 auto; }
            .header {
                background: white;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                margin-bottom: 30px;
                text-align: center;
            }
            .header h1 { color: #667eea; font-size: 2.5em; margin-bottom: 10px; }
            .stats-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
                margin-bottom: 30px;
            }
            .stat-card {
                background: white;
                padding: 25px;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                text-align: center;
                transition: transform 0.3s;
            }
            .stat-card:hover { transform: translateY(-5px); }
            .stat-card h3 { color: #667eea; font-size: 2.5em; margin-bottom: 10px; }
            .stat-card p { color: #666; font-size: 1em; }
            .content-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                margin-bottom: 30px;
            }
            @media (max-width: 968px) {
                .content-grid { grid-template-columns: 1fr; }
            }
            .panel-section {
                background: white;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            }
            .panel-section h2 { color: #667eea; font-size: 1.6em; margin-bottom: 20px; }
            .broadcast-form textarea {
                width: 100%;
                padding: 15px;
                border: 2px solid #e0e0e0;
                border-radius: 12px;
                font-size: 1em;
                margin: 15px 0;
                min-height: 120px;
                font-family: inherit;
            }
            .broadcast-form button {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 15px 40px;
                border: none;
                border-radius: 12px;
                font-size: 1.1em;
                cursor: pointer;
                font-weight: 600;
            }
            .users-table {
                background: white;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.2);
                overflow-x: auto;
                margin-bottom: 30px;
            }
            table { width: 100%; border-collapse: collapse; }
            th {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 15px;
                text-align: left;
                font-weight: 600;
            }
            td { padding: 15px; border-bottom: 1px solid #eee; }
            tr:hover { background: #f5f5f5; }
            .btn {
                padding: 8px 15px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                font-size: 0.9em;
                margin: 0 5px;
                font-weight: 600;
            }
            .btn-block { background: #e74c3c; color: white; }
            .btn-unblock { background: #27ae60; color: white; }
            .blocked { opacity: 0.6; background: #fee !important; }
            .status {
                padding: 5px 10px;
                border-radius: 15px;
                font-size: 0.85em;
                font-weight: 600;
            }
            .status-active { background: #d4edda; color: #155724; }
            .status-blocked { background: #f8d7da; color: #721c24; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🤖 AI Bot Admin</h1>
                <p>Professional Dashboard</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <h3><?php echo $stats['total_users'] ?? 0; ?></h3>
                    <p>👥 Total Users</p>
                </div>
                <div class="stat-card">
                    <h3><?php echo $stats['total_messages'] ?? 0; ?></h3>
                    <p>💬 Messages</p>
                </div>
                <div class="stat-card">
                    <h3><?php echo $stats['active_today'] ?? 0; ?></h3>
                    <p>🟢 Active Today</p>
                </div>
                <div class="stat-card">
                    <h3><?php echo $db->querySingle("SELECT COUNT(*) FROM users WHERE is_blocked=1"); ?></h3>
                    <p>🚫 Blocked</p>
                </div>
            </div>
            
            <div class="content-grid">
                <div class="panel-section broadcast-form">
                    <h2>📢 Broadcast</h2>
                    <form method="post" action="?action=broadcast">
                        <textarea name="message" placeholder="Message..." required></textarea>
                        <button type="submit">Send to All</button>
                    </form>
                </div>
                
                <div class="panel-section">
                    <h2>⚙️ Bot Status</h2>
                    <?php $botStatus = $db->querySingle("SELECT value FROM settings WHERE key='bot_status'"); ?>
                    <p style="margin: 20px 0;">
                        Status: 
                        <span class="status <?php echo $botStatus == 'active' ? 'status-active' : 'status-blocked'; ?>">
                            <?php echo $botStatus == 'active' ? '✅ Active' : '⏸️ Stopped'; ?>
                        </span>
                    </p>
                </div>
            </div>
            
            <div class="users-table">
                <h2>👥 Users (Last 100)</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Messages</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr class="<?php echo $user['is_blocked'] ? 'blocked' : ''; ?>">
                            <td><?php echo $user['user_id']; ?></td>
                            <td><?php echo htmlspecialchars($user['first_name']); ?></td>
                            <td>@<?php echo htmlspecialchars($user['username']); ?></td>
                            <td><?php echo $user['message_count']; ?></td>
                            <td>
                                <span class="status <?php echo $user['is_blocked'] ? 'status-blocked' : 'status-active'; ?>">
                                    <?php echo $user['is_blocked'] ? '🚫 Blocked' : '✅ Active'; ?>
                                </span>
                            </td>
                            <td>
                                <?php if ($user['is_blocked']): ?>
                                    <button class="btn btn-unblock" onclick="unblockUser(<?php echo $user['user_id']; ?>)">Unblock</button>
                                <?php else: ?>
                                    <button class="btn btn-block" onclick="blockUser(<?php echo $user['user_id']; ?>)">Block</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <script>
            function blockUser(userId) {
                if (confirm('Block this user?')) {
                    window.location.href = '?action=block&user_id=' + userId;
                }
            }
            function unblockUser(userId) {
                if (confirm('Unblock this user?')) {
                    window.location.href = '?action=unblock&user_id=' + userId;
                }
            }
            setTimeout(() => location.reload(), 30000);
        </script>
    </body>
    </html>
    <?php
}

function handleAdminAction() {
    $db = initDatabase();
    $action = $_GET['action'] ?? '';
    
    if ($action == 'block' && isset($_GET['user_id'])) {
        blockUser($db, intval($_GET['user_id']), true);
        header('Location: ?mode=admin');
        exit;
    }
    
    if ($action == 'unblock' && isset($_GET['user_id'])) {
        blockUser($db, intval($_GET['user_id']), false);
        header('Location: ?mode=admin');
        exit;
    }
    
    if ($action == 'broadcast' && isset($_POST['message'])) {
        sendBroadcast($db, $_POST['message']);
        header('Location: ?mode=admin');
        exit;
    }
}

// ============ TELEGRAM API ============
function sendMessage($chatId, $text, $parseMode = 'HTML') {
    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendMessage";
    
    $data = [
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => $parseMode,
        'disable_web_page_preview' => true
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return $httpCode == 200;
}

function sendMessageWithKeyboard($chatId, $text, $keyboard) {
    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendMessage";
    
    $data = [
        'chat_id' => $chatId,
        'text' => $text,
        'reply_markup' => json_encode($keyboard)
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_exec($ch);
    curl_close($ch);
}

function sendLongMessage($chatId, $text) {
    $maxLength = 4096;
    
    if (strlen($text) <= $maxLength) {
        sendMessage($chatId, $text);
        return;
    }
    
    $parts = str_split($text, $maxLength);
    foreach ($parts as $part) {
        sendMessage($chatId, $part);
        usleep(500000);
    }
}

function sendChatAction($chatId, $action) {
    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendChatAction";
    
    $data = ['chat_id' => $chatId, 'action' => $action];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_exec($ch);
    curl_close($ch);
}

function answerCallbackQuery($callbackQueryId, $text) {
    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/answerCallbackQuery";
    
    $data = ['callback_query_id' => $callbackQueryId, 'text' => $text];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_exec($ch);
    curl_close($ch);
}

function editMessageText($chatId, $messageId, $text) {
    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/editMessageText";
    
    $data = [
        'chat_id' => $chatId,
        'message_id' => $messageId,
        'text' => $text,
        'parse_mode' => 'HTML'
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_exec($ch);
    curl_close($ch);
}

function getUpdates($offset) {
    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/getUpdates?offset={$offset}&timeout=30";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $result = json_decode($response, true);
    return $result['result'] ?? [];
}
?>
