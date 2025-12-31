# U_WEB WordPress Project

島根県西部を拠点としたWeb制作・デジタルマーケティング企業のWordPressサイト

## プロジェクト概要

- **事業内容**: Web制作、アプリ開発、Webマーケティング、デザイン制作、DXコンサルティング
- **ターゲット業種**: 葬祭業、観光業
- **特徴**: ホームページ担当者育成事業で内製化までサポート

## 開発環境

### ローカル環境
- **ツール**: Local (by Flywheel)
- **PHP**: 8.x
- **MySQL**: 8.x
- **Webサーバー**: Nginx/Apache

### 本番環境
- **サーバー**: エックスサーバー
- **ドメイン**: (設定予定)
- **SSL**: 無料SSL（Let's Encrypt）

## セットアップ手順

### 1. Localでサイトを作成
```bash
# Localアプリで新規サイト作成
サイト名: u-web-site
環境: Preferred
```

### 2. このリポジトリをクローン
```bash
git clone <repository-url>
cd wp_code
```

### 3. テーマを配置
```bash
# sample_codeのデザインをWordPressテーマ化
# wp-content/themes/u-web-theme/ に配置
```

### 4. 必要なプラグインをインストール
- All-in-One WP Migration（サーバー移行用）
- Contact Form 7（お問い合わせフォーム）
- Yoast SEO（SEO対策）

## ディレクトリ構成

```
wp_code/
├── .gitignore              # Git除外設定
├── README.md               # このファイル
├── sample_code/            # 既存HTMLデザイン
│   └── index.html
└── wp-content/
    └── themes/
        └── u-web-theme/    # カスタムテーマ（開発予定）
```

## デプロイ手順

### ローカル → エックスサーバー移行
1. All-in-One WP Migrationでエクスポート (.wpress)
2. エックスサーバーでWordPress簡単インストール
3. All-in-One WP Migrationでインポート
4. SSL化設定
5. 最終チェック

## 開発スケジュール

- **期間**: 1-2週間
- **フェーズ1**: ローカル環境構築 ✅
- **フェーズ2**: テーマ開発（進行中）
- **フェーズ3**: コンテンツ作成
- **フェーズ4**: サーバー移行
- **フェーズ5**: 公開・運用開始

## リンク

- [事業計画書](../U_WEBサイト制作必要書類/事業計画/)
- [サイト要件定義書](../U_WEBサイト制作必要書類/Webサイト要件定義書/)

## 連絡先

- Email: piichanandmukkun@gmail.com
- GitHub: ishikawa yutaka
