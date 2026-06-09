<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #0066cc;
            padding-bottom: 10px;
        }
        h2 {
            color: #0066cc;
            margin-top: 30px;
        }
        .user-info {
            background-color: #f0f8ff;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #0066cc;
        }
        .adult { color: #28a745; }
        .minor { color: #dc3545; }
    </style>
</head>
<body>
    <div class="container">
        <h1>ユーザー管理プログラム</h1>

        <?php
        // Userクラスの定義
        class User {
            public $name;
            public $age;

            // コンストラクタ
            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            // 自己紹介メソッド
            public function introduce() {
                echo "<div class='user-info'>";
                echo "こんにちは、私は{$this->name}です。{$this->age}歳です。";
                echo "</div>";
            }

            // 成人判定メソッド
            public function isAdult() {
                return $this->age >= 18;
            }
        }

        // ユーザーを作成
        $user1 = new User("田中太郎", 25);
        $user2 = new User("佐藤花子", 17);
        $user3 = new User("鈴木一郎", 30);

        // 自己紹介
        echo "<h2>自己紹介</h2>";
        $user1->introduce();
        $user2->introduce();
        $user3->introduce();

        // 成人判定
        echo "<h2>成人判定</h2>";

        $users = [$user1, $user2, $user3];
        foreach ($users as $user) {
            if ($user->isAdult()) {
                $p = 'adult';
                $sign = '✓';
                $judge = '年増';
            } else {
                $p = 'minor';
                $sign = '✗';
                $judge = 'ガキ';
            }
            echo "<p class={$p}>{$sign} {$user->name}さんは{$judge}です。</p>";
        }
        ?>
    </div>
</body>
</html>
