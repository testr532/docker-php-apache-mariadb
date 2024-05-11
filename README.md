#### 目的
Dockerの練習目的

#### 環境

* PHP8.2
* MariaDB11.3

#### ホスト側からdocker-compose.ymlと同じディレクトリから実行する

```
docker compose up -d --build
```

#### ブラウザで確認できる
http://localhost:8080/    
http://localhost:8080/mariadb_connect_sample.php
