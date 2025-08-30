<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel CRUD mit Auth

Dies ist eine Standard Laravel-Installation.  [Installation/Download](https://laravel.com/) 08/2025.

Zur CRUD-Übung sind zwei Models integriert "Post" bzw. "User" von Breeze.

Es können Posts angelegt, angesehen und gelöscht werden.

Diese Posts weisen eine Kardinalität / eine Beziehung von 1:n auf (one to many)

## 1) Installation
Folgende Schritte wurden zur Erstellung ausgeführt.

1) Installation mit Composer im WSL2-Terminal oder Windows Powershell mit Admin-Rechten ausgeführt.

   composer create-project laravel/laravel .

2) Dann Laravel Breeze bzw. [Starter-Kit](https://laravel.com/starter-kits) (Auth-Package) mit folgendem Befehl

   ./vendor/bin/sail breeze:install

3) Anschließend die Laravel Debugbar installiert mit Dev-Flag [Official Laravel Debugbar Installation/Download](https://laraveldebugbar.com/)

   composer require barryvdh/laravel-debugbar --dev

4) Für etwas mehr Komfort für die Entwicklung noch "Concurrently" hinzugefügt.
   
   npm i concurrently --save-dev

   Da wir dieses Package nur in der Entwicklung brauchen, nicht für den Live-Betrieb, verwenden wir --save-dev als "Flag" für die Installation, was dem Package-Manager sagt, "Nur für Entwicklung".

   Dieses Package startet sowohl Laravel/PHP als auch Vite für das Frontend.
   
   In der package.json wurde unter dem Punkt "scripts": "dev-all": "concurrently \"php artisan serve\" \"npm run dev\"" hinzugefügt.
   
   Wir müssen also nicht in zwei Fenstern zwei Prozesse starten, sondern starten mit einem Klick alle Prozesse.

## 2) Datenbank, erster Start und Migration (Installation der Tabellen in MySQL)

Für dem ersten Start müssen wir die Migration ausführen und die Datenbank-Tabellen installieren.

- Die Datenbank-Verbindung in der <strong>.env</strong>-Datei eingetragen
- ./vendor/bin/sail migrate oder php artisan migrate
- Zum Starten suchen wir uns die Package.json Datei raus und klicken auf Scripts Start.

## 3) Allgemeine Info

Für Icons (eye, pencil, trash) wurden die [Bootstrap Icons](https://icons.getbootstrap.com/) verwendet.